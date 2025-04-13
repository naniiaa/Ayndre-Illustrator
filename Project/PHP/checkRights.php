<?php
    include_once "mysql.php";

    function get_user_rights($id)
    {
        $sql = "SELECT user.userID, rights.rightName FROM user 
    
                inner join user_groups on user.userID= user_groups.userID
    
                inner join group_rights on user_groups.groupID= group_rights.groupID
                
                inner join rights on group_rights.rightID = rights.rightID
    
                WHERE user.userID = ". $id;

        $db= getConnectionDB();

        $result=$db->query($sql);

        return mysqli_fetch_assoc($result);
    }
    
    function has_permition($userID,$action)
    {
        $ur = get_user_rights($userID);
        
        return $ur['rightName']===$action;
    }
?>
