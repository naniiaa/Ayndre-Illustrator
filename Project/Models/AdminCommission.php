<?php

require_once 'Model.php';

class AdminCommission extends Model {

    protected $commissionID;
    protected $customerID;
    protected $customerEmail;
    protected $customerName;
    protected $figureFormat;
    protected $basePrice;
    protected $characterDescription;
    protected $addOnDescription;
    protected $backgroundDescription;
    protected $contactMethod;
    protected $additionalNotes;
    protected $commissionStatus;
    protected $createdDate;
    protected $updatedDate;

    public static $db;

    public function __construct($id = -1) {
        
        parent::__construct();

        if ($id > 0) {
            
            $stmt = $this->db->prepare("SELECT * FROM commission WHERE commissionID = ?");
            
            $stmt->bind_param("i", $id);
            
            $stmt->execute();
            
            $result = $stmt->get_result();
            
            $data = $result->fetch_assoc();

            if ($data) {
                $this->loadFromArray($data);
            } else {
                throw new Exception("Commission $id not found!!!!");
            }
        }
    }

    // Loop associative arrays
    public function loadFromArray(array $data) {
        
        foreach ($data as $key => $value) {
            
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

    // Get all commissions from the DB
    public function getAllCommissions() {
        
        $query = "SELECT * FROM commission ORDER BY createdDate DESC";
        
        $result = $this->db->query($query);

        
        $commissions = [];
        
        while ($row = $result->fetch_assoc()) {
            $commission = new self();
            $commission->loadFromArray($row); 
            $commissions[] = $commission;
        }

        return $commissions;
    }

    // Get commission details by ID
    public function getCommissionDetails($commissionID) {
        
        $stmt = $this->db->prepare("SELECT * FROM commission WHERE commissionID = ?");
        
        $stmt->bind_param("i", $commissionID);
        
        $stmt->execute();
        
        $result = $stmt->get_result();
        
        $row = $result->fetch_assoc();

        if ($row) {
            
            $commission = new self();
            
            $commission->loadFromArray($row); 
            
            return $commission;
        } else {
            
            return null;
        }
    }

    // Update the status of a commission by ID
    public function updateCommissionStatus($commissionID, $status) {
        
        $stmt = $this->db->prepare("UPDATE commission SET commissionStatus = ? WHERE commissionID = ?");
        
        $stmt->bind_param("si", $status, $commissionID);
        
        return $stmt->execute();
    }

    // Delete a commission by ID
    public function deleteCommission($commissionID) {
        
        $stmt = $this->db->prepare("DELETE FROM commission WHERE commissionID = ?");
        
        $stmt->bind_param("i", $commissionID);
        
        return $stmt->execute();
    }
}
?>
