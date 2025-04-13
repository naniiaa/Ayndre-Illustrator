<?php

   include_once "Controllers/Controller.php";

    class AboutController extends Controller
    {
        function route()
        {
			
            $this->render("About", "view");
        }
    }
