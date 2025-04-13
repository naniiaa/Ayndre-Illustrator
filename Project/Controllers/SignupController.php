<?php
include_once "Controllers/Controller.php";
include_once "Models/Admin.php";
include_once "Models/Customer.php";
include_once __DIR__ . '/../PHP/checkRights.php';

class SignupController extends Controller {
    public function route() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'firstName' => htmlspecialchars($_POST['firstName']),
                'lastName' => htmlspecialchars($_POST['lastName']),
                'usernameEmail' => filter_var($_POST['email'], FILTER_SANITIZE_EMAIL),
                'password' => htmlspecialchars($_POST['password'])
            ];

            $groupID = 2; // Customer is set to 2 as per user_groups

            // The information is stored under the users table. We assume that the public sign up page is assigned to customers.

            try {
                if (User::signUp($data, $groupID)) { 
                    header("Location: Views/Login/login.php");
                    exit();
                } else {
                    $this->render("SignUp", "signup", ['error' => "Registration failed. Please try again."]);
                }
            } catch (Exception $e) {
                $this->render("SignUp", "signup", ['error' => $e->getMessage()]);
            }
        } else {
            $this->render("SignUp", "signup");
        }
    }
}
