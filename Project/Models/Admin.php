<?php
include_once "User.php";
include_once "PHP/mysql.php";
include_once 'PHP/checkRights.php';
class Admin extends User
{
        public static function logIn($usernameEmail, $password)
        {
            $validAcc = true;
            
            $sql = "SELECT password FROM User WHERE usernameEmail = ?";
		}
		public static function logOut() {
        session_destroy();
        header("Location: index.php");
        exit();
    }
}
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


