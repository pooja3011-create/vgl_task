<?php 
    class Database {
        private $host = "127.0.0.1";
        private $database_name = "vgl";
        private $username = "root";
        private $password = "";

        public $conn;
        
        public function getConnection(){ 
            $this->conn = null;
            $this->conn = new mysqli($this->host,$this->username,$this->password,$this->database_name);

            // Check connection
            if ( $this->conn-> connect_errno) {
                echo "Failed to connect to MySQL: " .$this->conn -> connect_error;
            }   
            return $this->conn;
        }
    }  
?>