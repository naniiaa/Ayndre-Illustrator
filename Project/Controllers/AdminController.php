<?php
include_once "Controller.php";
include_once "PHP/checkRights.php"; 
include_once "Models/Admin.php";

class AdminController extends Controller {
    public function route() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin') {
            $userID = $_SESSION['user_id'];
            $userRights = get_user_rights($userID);

            if (in_array('viewAdminDashboard', $userRights)) {
                $this->render("Admin", "admindashboard");
            } else {
                $this->render("Error", "accessDenied", ['message' => "You do not have access to this page."]);
            }
        } else {
            header("Location: login.php");
            exit();
        }
    }
       
    // Admin-specific methods
}




/* <?php

    include_once "Controllers/Controller.php";
    include_once "Models/User.php";
    include_once "PHP/checkRights.php";

    class AdminController extends Controller
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< Updated upstream
        function list()
        {
            var_dump(strtolower(substr(get_class(), 0, -10)));
            var_dump( __FUNCTION__);
            if(!$this->verifyRights(1,get_class, __FUNCTION__))
            {
                return false;
            }
=======
        // function list()
        // {
        //     var_dump(strtolower(substr(get_class(), 0, -10)));
        //     var_dump( __FUNCTION__);
            
        //     if(!$this->verifyRights(1, get_class(), __FUNCTION__))
        //     {
        //         return false;
        //     }
>>>>>>> 9332ab2349f5e5bf3581521c7e20034b6c0c0d71

        //     $admin = Admin::list();
        //     $this->render("Admin", "list", $admin);
        // }

=======
>>>>>>> Stashed changes
=======
>>>>>>> Sofya
        function route()
        {
            $action = isset($_GET['action']) ? $_GET['action'] : "display";
            $id = isset($_GET['userID']) ? intval($_GET['userID']) : -1;
            
            $password = isset($_GET['password']) ? $_GET['password'] : "";
            $useremail =isset($_GET['useremail']) ? $_GET['useremail'] : "";

            if($action == "login")
            {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< Updated upstream
                if(verifyRights($id, 'Admin', "list"))
                    return false;
                $admin = Admin::list();
                $this->render("", "", $);
            }
            if($action == "signup")
            {
                $this->render("", "", $);
=======
                $allowLogIn = logIn($useremail, $password);
                if($allowLogIn == true)
                {
                    //$user = ;
=======
                $allowLogIn = logIn($useremail, $password);
                if($allowLogIn == true)
                {
                    $user = ;
>>>>>>> 9332ab2349f5e5bf3581521c7e20034b6c0c0d71
                    if(has_permition($user,$action))
                        return false;
                    //Admin::admin();
                    $this->render("", "");
=======
                $allowLogIn = User::logIn();

                if($allowLogIn == true)
                {
                    // $user = User::getUserID($useremail);
                    // if(has_permition($user,$action))
                    //     return false;
                    $this->render("Admin", "admin");
                }
                else
                {
                    echo "Unable to log in!";
                    $this->render("Login", "login");
>>>>>>> Sofya
                }
                
<<<<<<< HEAD
>>>>>>> Stashed changes
=======
>>>>>>> 9332ab2349f5e5bf3581521c7e20034b6c0c0d71
            }
            if($action == "logout")
            {
                
            }
            if($action == "viewStatistics")
            {

            }
            if($action == "viewUsers")
            {

            }
            if($action == "viewCommissions")
            {

            }
            if($action == "updateCommissionStatus")
            {

            }
            if($action == "addArtwork")
            {

            }
            if($action == "updateArtwork")
            {

            }
            if($action == "removeArtwork")
            {

            }
            if($action == "addFaq")
            {

            }
            if($action == "postBlog")
            {

            }
        }
    }
?> */