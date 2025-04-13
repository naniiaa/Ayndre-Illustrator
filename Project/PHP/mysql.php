
<?php
function getConnectionDB() {
    // Database connection credentials
    $servername = "localhost:3306";  // Adjust if needed
    $username = "root";
    $password = ""; // Add your password if it's set in XAMPP
    $dbname = "project";

    // Create a new MySQLi connection
    try {
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
            throw new Exception("Connection failed: " . $conn->connect_error);
        }
        
        return $conn;
    } catch (Exception $e) {
        // Log the error for debugging purposes
        error_log($e->getMessage());
        die("Database connection error. Please check your configuration.");
    }
}
/*
<?php 

    function getConnectionDB($server = "localhost", $user = "root", $pass= "", $db = "project")
    {
        $conn = new mysqli($server, $user, $pass, $db);

        if($conn->connect_error)
        {
            die("Connection error: <br>" . $conn->connect_error);
        }

        return $conn;
    }

?>*/