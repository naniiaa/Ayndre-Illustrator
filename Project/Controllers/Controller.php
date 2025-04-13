<?php
#   generic controller
#   parent class
#   in charge of
#   ~   routing
#   ~   rendering
#   ~   managing actions
include_once 'PHP/mysql.php'; 

abstract class Controller {
    protected $db;

    public function __construct() {
        $this->db = getConnectionDB();  // Initiate DB connection
    }

    abstract public function route();

    protected function render($controller, $view, $data = []) {
        extract($data);
        include "Views/$controller/$view.php";
    }
}

    // function verifyRights($id, $controller='user', $action='list')
    // {
    //     $sql = "SELECT * FROM users;

    //         inner join users_groups on users.id = users_group.user_id

    //         inner join groups_rights on users_group.group_id = group.group_id

    //         inner join rights on group_rights.rights_id = rights.rights_id

    //         WHERE users.id = 1";

    //         $stmt = $conn->prepare($sql)
    //         $stmt->bind_param("dss", $id, $action, $controller);

    //         $count = $stmt

    //         //check if count 1 or 0 then return true or false -> verification
    // }



