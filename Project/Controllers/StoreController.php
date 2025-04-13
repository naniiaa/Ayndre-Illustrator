<?php

    include_once "Controller.php";

    class StoreController extends Controller
    {
        function route()
        {
            $this->render("Store", "view");
        }
    }
?>