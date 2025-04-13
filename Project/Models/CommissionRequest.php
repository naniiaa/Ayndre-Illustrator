<?php
    include_once dirname(__DIR__) . "/mysql.php";
	include_once "Model.php";

class Commission extends Model
        protected $commissionID;
        protected $customerName;
        protected $customerEmail;
        protected $commissionDetails;
        protected $commissionStatus;

        function __construct($id = -1)
        {
            if($id < 0)
            {
                $this->commissionID = -1;
                $this->customerName = "";
                $this->customerEmail = "";
                $this->commissionDetails = "";
                $this->commissionStatus = "";
            }
            else
            {
                global $conn;

                $sql = "SELECT * from `CommissionRequests` WHERE `commissionID`=" . $id;

                $result = $conn->query($sql);

                $data = $result->fetch_assoc();

                $this->employeeNumber = $id;
                //this might change....
                $this->lastName = $data['customerName'];
                $this->firstName = $data['customerEmail'];
                $this->email = $data['commissionDetails']; 
                $this->extension = $data['commissionStatus'];
                        
            }
        }

        public static function viewCommission($commissionID)
        {
            $sql = "SELECT * FROM `CommissionRequests` WHERE commissionID = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $commissionID);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) 
            {
                echo "<table border='1'>";
                echo "<tr> <th>Commission ID</th> <th>Full Name</th> <th>Email</th> <th>Description</th> <th>Status</th></tr>";

                // Output data of each row
                while($row = $result->fetch_assoc()) 
                {
                    //or return in an array? what do u guys think?
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['commissionID']) . "</td>"; 
                    echo "<td>" . htmlspecialchars($row['customerName']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['customerEmail']) . "</td>"; 
                    echo "<td>" . htmlspecialchars($row['commissionDetails']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['commissionStatus']) . "</td>"; 
                    echo "</tr>";
                }

                echo "</table>";
            }
            else
            {
                echo "No commission requests found.";
            }
        }

        public static function viewCommissions()
        {
            $sqlextract = "SELECT * FROM `CommissionRequests`";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) 
            {
                // Output data of each row
                while($row = $result->fetch_assoc()) 
                {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['commissionID']) . "</td>"; 
                    echo "<td>" . htmlspecialchars($row['customerName']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['customerEmail']) . "</td>"; 
                    echo "<td>" . htmlspecialchars($row['commissionDetails']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['commissionStatus']) . "</td>"; 
                    echo "</tr>";
                }
            }
        }
         
        public static function addCommission(Commission $commission)
        {
            $getObj = get_object_vars ($commission);
            $objArr = (array)$getObj;

            $commissionID = $getObj['commissionID'];
            $customerName = $getObj['customerName']; 
            $customerEmail = $getObj['customerEmail']; 
            $commissionDetails = $getObj['commissionDetails']; 
            $commissionStatus = $getObj['commissionStatus'];

            $sqlInsert = "INSERT INTO CommissionRequests (commissionID, customerName, customerEmail, commissionDetails, commissionStatus) VALUES (?, ?, ?, ?)";

            $stmt = $conn->prepare($sqlInsert);

            //will we need to add id  or is it autoincrement
            $stmt->bind_param("ssss", $commissionID, $customerName, $customerEmail, $commissionDetails, $commissionStatus);

            if ($stmt->execute()) 
            {
                echo "New Commission Added Successfully";
            } 
            else 
            {
                echo "Database Insertion Error: " . $sqlinsert . "<br>" . $stmt->error;
            }
        }

        public static function removeCommission($commissionID)
        {
            $sqlInsert = "DELETE FROM `CommissionRequests` WHERE commissionID = ?";
            $stmt->bind_param("s", $commissionID); 

            if ($stmt->execute()) 
            {
                echo "Commission Deleted  Successfully";
            } 
            else 
            {
                echo "Database Insertion Error: " . $sqlinsert . "<br>" . $stmt->error;
            }
        }

        public static function updateCommissionStatus($commissionID, $status)
        {
            $sql = "UPDATE `CommissionRequests` SET `commissionStatus` = '".$status."' WHERE `CommissionRequests`.`commissionID` = ".$commissionID.";";

            $result = $conn->query($sql);

            $data = $result->fetch_assoc();



            // $sql = "SELECT `commissionStatus` FROM `CommissionRequests` WHERE commissionID = ?";
            // $stmt = $conn->prepare($sql);
            // $stmt->bind_param("s", $commissionID);
            // $stmt->execute();
            // $result = $stmt->get_result();

            // if ($result->num_rows > 0) 
            // {
            //     // Output data of each row
            //     while($row = $result->fetch_assoc()) 
            //     {
            //         
                  
            //     }
            // }
            // else
            // {
            //     echo "Commission status couldn't be updated.";
            // }
        }
    }

?>