<?php

    include_once "Controllers/Controller.php";

    class CartController extends Controller
    {
        function route()
        {
            
            $this->render("Cart", "view");
        }
    }
?>