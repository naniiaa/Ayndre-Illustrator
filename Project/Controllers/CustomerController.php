<?php
    $path = $_SERVER['SCRIPT_NAME'];
include_once "Controller.php";
include_once "PHP/checkRights.php"; // Ensure user rights are checked
include_once "Models/Customer.php";
class CustomerController extends Controller {
    public function route() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'customer') {
            $userID = $_SESSION['user_id'];
            $userRights = get_user_rights($userID);

            if (in_array('viewCustomerDashboard', $userRights)) {
                $this->render("Customer", "customerdashboard");
            } else {
                $this->render("Error", "accessDenied", ['message' => "You do not have sufficient permissions to access this page."]);
            }
        } else {
            header("Location: login.php");
            exit();
        }
        
    }
    
    // Example method to show commission status
    public function showCommissions() {
        // Logic for fetching and displaying commission status
        $commissionData = [
            ['status' => 'Pending', 'description' => 'Commission 1'],
            ['status' => 'Accepted', 'description' => 'Commission 2'],
            ['status' => 'Declined', 'description' => 'Commission 3']
        ];
        $this->render("Customer", "commissions", $commissionData);
    }
    
    // Other customer-specific methods can be added here
}



/*<?php
>>>>>>> origin/Bridjette
    include_once "Controllers/Controller.php";
    include_once "Models/User.php";
    include_once "PHP/checkRights.php";

    class CustomerController extends Controller
    {
        function route()
        {
            $action = isset($_GET['action']) ? $_GET['action'] : "display";
            $id = isset($_GET['userID']) ? intval($_GET['userID']) : -1;
            
            $password = isset($_GET['psswd']) ? $_GET['psswd'] : "";
            $useremail =isset($_GET['email']) ? $_GET['email'] : "";

<<<<<<< HEAD
            if($action == "login")
            {
                $path = $_SERVER['SCRIPT_NAME'];
                $allowView = User::logIn();

                if ($allowView == true) 
                {
                    // $user = User::getUserID($useremail);
                    // if(has_permition($user,$action))
                    //     return false;
                    $this->render("Customer", "customer");
                } 
                else 
                {
                    echo  "<script type='text/javascript'> alert('Unable to Sign Up!'); window.location.href = '$path/index.php/?controller=login'; </script>";
                }
            }
            if($action == "signup")
            {
                $path = $_SERVER['SCRIPT_NAME'];
                $allowView = User::signUp();

                if ($allowView == true) 
                {
                    // $user = User::getUserID($useremail);
                    // if(has_permition($user,$action))
                    //     return false;
                    $this->render("Login", "login");
                } 
                else 
                {
                    echo  "<script type='text/javascript'> alert('Unable to Sign Up!'); window.location.href = '$path/index.php/?controller=login'; </script>";
=======
            $action = isset($_GET['action']) ? $_GET['action'] : "display";
            $id = isset($_GET['userID']) ? intval($_GET['userID']) : -1;
            
            $password = isset($_GET['password']) ? $_GET['password'] : "display";
            $useremail =isset($_GET['useremail']) ? $_GET['useremail'] : "display"; 

            if($action == "login")
            {
                $allowLogIn = logIn($useremail, $password);
                if($allowLogIn == true)
                {
                    if(verifyRights($id, 'Admin', "list"))
                        return false;
                    Customer::admin();
                    $this->render("", "");
>>>>>>> origin/Bridjette
                }
            }
            if($action == "logout")
            {
                
            }
            if($action == "commissionRequest")
            {

            }
            if($action == "viewCommission")
            {

            }
            if($action == "viewPurchaseHistory")
            {

            }
            if($action == "purchaseArtwork")
            {

            }
        }
    }
?>
Route()
      // Check if the user is logged in and is a customer
        /* if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'customer') {
            $userID = $_SESSION['user_id'];
            $userRights = get_user_rights($userID);
            
            // Check if the user has permission to view the customer dashboard
            if (in_array('view_client_dashboard', $userRights)) {
                // Render the customer dashboard view
                $this->render("Customer", "home");
            } else {
                $this->render("Error", "accessDenied", ['error' => "Access denied. You do not have sufficient permissions."]);
            }
        } else {
            $this->render("Error", "accessDenied", ['error' => "Access denied."]);
        } */

