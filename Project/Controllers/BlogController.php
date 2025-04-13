<?php

include_once "Controller.php";
include_once "./Models/Blog.php";

class BlogController extends Controller
{
    private $blogModel;

    public function __construct() {
        $this->blogModel = new Blog();
    }
            
    public function route() {
		if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['blogID'])) {
            $this->getBlogPostById();
        }/*
		if($action == "display")
            {
                $this->render("Blog", "blog");
            }
        elseif($action == "postBlog")
            {
				#do something
            }
        elseif($action == "deleteBlog")
            {
				#do something
            }*/
        else {
            $this->render("Blog", "view");
        }
    }

    private function getBlogPostById() {
        $blogID = $_POST['blogID'];
        $post = $this->blogModel->getPostById($blogID);
        echo json_encode($post);
        exit;
    }
}


