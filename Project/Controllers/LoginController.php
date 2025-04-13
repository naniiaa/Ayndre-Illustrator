<?php

include_once "Controllers/Controller.php";
include_once "Models/Admin.php";
include_once "Models/Customer.php";
include_once 'PHP/checkRights.php';

class LoginController extends Controller {
    public function route() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $password = htmlspecialchars($_POST['password']);
            $isAdmin = isset($_POST['isAdmin']); // Check if user is trying to log in as admin

        

            if ($email && $password) {
                try {
                    // Choose whether to create an Admin or Customer object
                    $user = $isAdmin ? new Admin() : new Customer();

                    if ($user->logIn($email, $password, $isAdmin)) {
                        if (isset($_SESSION['user_rights'])) {
                            // Redirect based on user role
                            if ($_SESSION['user_role'] === 'admin' && $isAdmin) {
                                header("Location: Views/Admin/admindashboard.php");
                                exit();
                            } elseif ($_SESSION['user_role'] === 'customer' && !$isAdmin) {
                                header("Location: Views/Customer/customerdashboard.php");
                                exit();
                            } else {
                                throw new Exception("Access denied. You do not have sufficient permissions.");
                            }
                        } else {
                            throw new Exception("No rights found for the user.");
                        }
                    } else {
                        $this->render("Login", "login", ['error' => "Incorrect email or password."]);
                    }
                } catch (Exception $e) {
                    error_log("Login error: " . $e->getMessage());
                    $this->render("Login", "login", ['error' => $e->getMessage()]);
                }
            } else {
                $this->render("Login", "login", ['error' => "Email and password are required."]);
            }
        } else {
            $this->render("Login", "login");
        }
    }
}
