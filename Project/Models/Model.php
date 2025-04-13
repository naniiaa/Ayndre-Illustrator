<?php

include_once "PHP/mysql.php";
    class Model 
    {
        protected $localDB;
        public function __construct() 
        {
            $this->localDB = getConnectionDB();  // Assuming getConnectionDB() returns a DB connection
        }
        // Basic CRUD methods
        public function create($data) 
        {
            // Placeholder for create logic, e.g., inserting $data into a specific table
        }
        public function read($conditions = null) 
        {
            // Placeholder for read logic, e.g., selecting data based on $conditions
        }
        public function update($data, $conditions = null) 
        {
            // Placeholder for update logic, e.g., updating rows based on $data and $conditions
        }
        public function delete($conditions) 
        {
            // Placeholder for delete logic, e.g., deleting rows based on $conditions
        }
    }
?>
