<?php
include_once "PHP/checkRights.php";
include_once "Model.php";
class Blog extends Model
{
    public $blogID;
    public $blogTitle;
    public $content;
    public $datePosted;
    function __construct($id = -1)
    {
        $conn = getConnectionDB();
        if ($id < 0) 
        {
            // Initialize with empty values if no ID is provided
            $this->blogID = -1;
            $this->blogTitle = "";
            $this->content = "";
            $this->datePosted = "";
        } 
        else 
        {
            // Query the blog post from the database based on ID
            $sql = "SELECT * FROM `blog` WHERE `blogID` = " . $id;
            $result = $conn->query($sql);
            if ($result && $data = $result->fetch_assoc()) 
            {
                $this->blogID = $data['blogID'];
                $this->blogTitle = $data['blogTitle'];
                $this->content = $data['content'];
                $this->datePosted = $data['datePosted'];
            }
        }
    }

    public function getAllPosts()
    {
        $conn = getConnectionDB();
        $sql = "SELECT * FROM `blog` ORDER BY `datePosted` DESC";
        $result = $conn->query($sql);
        $posts = [];
        while ($row = $result->fetch_assoc()) 
        {
            $posts[] = $row;
        }
        return $posts;
    }

    public function getPostById($id)
    {
        $conn = getConnectionDB();
        $sql = "SELECT * FROM `blogs` WHERE `blogID` = " . $id;
        $result = $conn->query($sql);
        return $result ? $result->fetch_assoc() : null;
    }
}
?>
