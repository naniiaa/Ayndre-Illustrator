<?php

    include_once "Controller.php";

    class PortfolioController extends Controller
    {
        function route()
        {
            $this->render("Portfolio", "view");
        }
    }
