<?php

include_once "PHP/mysql.php";

// The statistics model is meant for the admin dashboard once logged in.

// Can we route the admin user directly to admin dashboard without checking user rights?

/*
The statistics module of the admin dashboard consists of monthly stats OF:
- the new user count (customer)
- total registered user count (customers), 
- commission and order count based on the specfic month and year.
*/
class Statistics extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function getNewUsersCount($year, $month) {
        $query = "SELECT COUNT(*) AS newUsers FROM users WHERE YEAR(dateRegistered) = ? AND MONTH(dateRegistered) = ?";
    
        $stmt = $this->db->prepare($query);
        
        $stmt->bind_param("ii", $year, $month);
        
        $stmt->execute();

        $result = $stmt->get_result()->fetch_assoc();
        
        $stmt->close();

        return $result['newUsers'] ?? 0;
    }
   
    public function getTotalUserCount() {
        
        $query = "SELECT COUNT(*) AS totalUsers FROM users";
    
        $stmt = $this->db->prepare($query); 
    
        $result = $stmt->get_result()->fetch_assoc();

        $stmt->close();

        return $result['totalUsers'] ?? 0; 
    }

    public function getCommissionsCount($year, $month) {
        
        $query = "SELECT COUNT(*) AS commissionsCount FROM commissions WHERE YEAR(createdDate) = ? AND MONTH(createdDate) = ?";

        $stmt = $this->db->prepare($query); 
        
        $stmt->bind_param("ii", $year, $month); 
        
        $stmt->execute(); 

        $result = $stmt->get_result()->fetch_assoc();
        
        $stmt->close(); 

        return $result['commissionsCount'] ?? 0;
    }

    public function getOrdersCount($year, $month) {

        $query = "SELECT COUNT(*) AS ordersCount FROM orders WHERE YEAR(datePlaced) = ? AND MONTH(datePlaced) = ?";
        
        $stmt = $this->db->prepare($query);
        
        $stmt->bind_param("ii", $year, $month);
        
        $stmt->execute();
        
        $result = $stmt->get_result()->fetch_assoc();
        
        $stmt->close();
        
        return $result['ordersCount'] ?? 0;
    }

    // Visitors uses sessions and cookies might have to restructure database ...

}
?>
