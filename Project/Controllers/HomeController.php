<?php
include_once 'Controller.php';
include_once 'PHP/checkRights.php';
class HomeController extends Controller {
    public function route() {
        $rights = get_user_rights(3); 
        $this->render("Home", "home");
    }
}
?>
