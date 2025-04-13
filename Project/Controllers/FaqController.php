<?php

    include_once "Controllers/Controller.php";

    class FaqController extends Controller
    {
        function route()
        {
            $action = isset($_GET['action']) ? $_GET['action'] : "home";

            if($action == "display")
            {
                $this->render("Faq", "faq");
            }
            if($action == "postBlog")
            {

            }
            if($action == "deleteBlog")
            {
                
            }
            
            $this->render("Faq", "view");
        }
    }
?>