<?php

    include_once "Controller.php";
    include_once "Models/Admin.php";

    class CommissionController extends Controller
     {
        function route()
        {
            $action = isset($_GET['action']) ? $_GET['action'] : "home";
            $id = isset($_GET['userID']) ? intval($_GET['userID']) : -1;

            if($action == "viewCommission")
            {
                
            }
            if($action == "viewCommissions")
            {
                
            }
            if($action == "commissionRequest")
            {
                
            }
            if($action == "updateCommissionStatus")
            {
                
            }
        }
    }
