<?php
    include_once "./PHP/mysql.php";
	include_once "Model.php";
    abstract class User extends Model{
        protected $userID;
        protected $groupID;
        protected $firstName;
        protected $lastName;
        protected $usernameEmail;
        protected $password;
        protected $dateRegistered;

        protected static $db;

        function __construct($id = -1)
        {
            if (!self::$db) 
            {
                self::$db = getConnectionDB();
            }
    
            if ($id >= 0) 
            {
                $this->loadUserData($id);
            }

            if($id < 0)
            {
                $this->userID = -1;
                $this->groupID = "";
                $this->firstName = "";
                $this->lastName = "";
                $this->usernameEmail = "";
                $this->password = "";
                $this->dateRegistered = "";
            }
            else
            {
                global $conn;

                $sql = "SELECT * from `User` WHERE `userID`=" . $id;

                $result = $conn->query($sql);

                $data = $result->fetch_assoc();

                $this->userID = $id;
                $this->groupID = $data['groupID'];
                $this->firstName = $data['firstName'];
                $this->lastName = $data['lastName'];
                $this->usernameEmail = $data['usernameEmail'];
                $this->password = $data['password'];
                $this->dateRegistered =$data['dateRegistered'];
                        
            }
        }

        private function loadUserData($id) {
            $sql = "SELECT * FROM User WHERE userID = ?";
            $stmt = self::$db->prepare($sql);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $data = $stmt->get_result()->fetch_assoc();
    
            if ($data) {
                $this->userID = $id;
                $this->firstName = $data['firstName'];
                $this->lastName = $data['lastName'];
                $this->usernameEmail = $data['usernameEmail'];
                $this->password = $data['password'];
                $this->dateRegistered = $data['dateRegistered'];
            }
        }
    
        protected static function initDbConnection() {
            if (!self::$db) {
                self::$db = getConnectionDB();
            }
        }

        public static function getUserID($usernameEmail)
        {
            $id = "";
            
            $sql = "SELECT userID FROM User WHERE usernameEmail = ?";

            $conn =  getConnectionDB();

            $stmt = $conn->prepare($sql);

            $stmt->bind_param("s", $usernameEmail);

            $stmt->execute();

            $result = $stmt->get_result();

            if ($result->num_rows === 1) 
            {
                // Output data of each row
                while($row = $result->fetch_assoc()) 
                {
                    $id = $row['userID'];
                }
            } 
            else 
            {
                $message = "No userID found";
            }
            
            return $id;
        }

        public static function signUp(): bool
        {
            $validAcc = true;
            $conn = getConnectionDB();

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $firstname = $_GET["fname"];
            $lastname = $_GET["lname"];
            $usernameEmail = $_GET["email"];
            $date = $_GET["date"];
            $psswd = $_GET["psswd"];

            $groupID = 2;


            // Check if email already exists
            $sqlextract = "SELECT usernameEmail FROM user WHERE usernameEmail = ?";
            $stmt = $conn->prepare($sqlextract);
            $stmt->bind_param("s", $usernameEmail);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) 
            {
                $validAcc = false;
                $message ="This email is already used, Please use another email to Sign Up!";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }

            // Validate required fields
            if ($firstname == "" || $lastname == "" || $usernameEmail == "" || $psswd == "") 
            {
                $message = "All fields must be completed in order to 'Sign Up'.";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }

            // Validate password format
            $pattern = '/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/';
            if (!preg_match($pattern, $psswd)) 
            {
                $message = "Password must contain at least 8 characters, one uppercase letter, one lowercase letter, and one number or special character.";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }

            // Insert the new user into the database
            $sqlInsert = "INSERT INTO user (firstname, lastname, usernameEmail, password, dateRegistered) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sqlInsert);
            $hashedPassword = password_hash($psswd, PASSWORD_DEFAULT); // Hash the password
            $stmt->bind_param("sssss", $firstname, $lastname, $usernameEmail, $hashedPassword, $date);

            if ($stmt->execute()) 
            {
                $message = "New User Created Successfully!";

                $userID = self::$db->insert_id;

                $sqlGroup = "INSERT INTO user_groups (userID, groupID) VALUES (?, ?)";
                
                $stmtGroup = self::$db->prepare($sqlGroup);
                
                $stmtGroup->bind_param("ii", $userID, $groupID);
                
                return $stmtGroup->execute();

                echo "<script type='text/javascript'>alert('$message');</script>";
            } 
            else 
            {
                $message = "Database Insertion Error: " . $stmt->error;
                echo "<script type='text/javascript'>alert('$message');</script>";
            }

            $conn->close();
            return $validAcc;

        }

        public static function logIn()
        {
            $validAcc = true;

            $usernameEmail = urldecode($_GET["useremail"]);
            $password = trim(urldecode($_GET["password"]));
            
            $sql = "SELECT password FROM user WHERE usernameEmail = ?";

            $conn =  getConnectionDB();

            $stmt = $conn->prepare($sql);

            $stmt->bind_param("s", $usernameEmail);

            $stmt->execute();

            $result = $stmt->get_result();

            if ($result->num_rows === 1) 
            {
                // Output data of each row
                while($row = $result->fetch_assoc()) 
                {
                    //asd5&Gh9j
                    if(password_verify($password, $row['password']))
                    {
                        $validAcc = true;
                    }
                    else
                    {
                        $validAcc = false;
                        $message = "Not able to Log In: Wrong password! ";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    }
                }
            } 
            else 
            {
                $message = "Not able to Log In: Wrong email! ";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
            
            return $validAcc;
        }

        public static function logOut()
        {
            session_destroy();
            header("Location: index.php");
		}
	}