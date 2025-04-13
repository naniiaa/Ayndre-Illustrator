<?php
include_once "User.php";
include_once 'PHP/checkRights.php';
class Customer extends User {

    // public static function signUp($data): bool {
    //     if (empty($data['firstName']) || empty($data['lastName']) || empty($data['usernameEmail']) || empty($data['password'])) {
    //         throw new Exception("All fields are required for signup.");
    //     }
    //     return self::registerUser($data['firstName'], $data['lastName'], $data['usernameEmail'], $data['password']);
    // }

    // public static function logIn($email, $password): bool {
    //     return self::verifyCredentials($email, $password);
    // }

    // public static function logOut() {
    //     session_destroy();
    //     header("Location: index.php");
    // }

    // public static function registerUser($firstName, $lastName, $email, $password): bool 
    // {
    //     self::initDbConnection();
    //     if (self::isEmailTaken($email)) {
    //         throw new Exception("Email already registered.");
    //     }

    //     $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    //     $sql = "INSERT INTO User (firstName, lastName, usernameEmail, password, dateRegistered) VALUES (?, ?, ?, ?, ?)";
    //     $stmt = self::$db->prepare($sql);
    //     $dateRegistered = date("Y-m-d");
    //     $stmt->bind_param("sssss", $firstName, $lastName, $email, $hashedPassword, $dateRegistered);
    //     return $stmt->execute();
    // }
}
?>