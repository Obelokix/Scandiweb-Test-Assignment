<?php

    class DatabaseConnection {
        
        // Database credentials
        private $servername;
        private $username;
        private $password;
        private $dbname;

        public function connect() {
            $this->servername = "localhost";
            $this->username = "id20370458_root";
            $this->password = "tp}}eb=j%\GouR5Z";
            $this->dbname = "id20370458_products";

            // Establish connection with given credentials
            $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

            if($conn) { 
            }
            else {
                die ("Database Connection Failed.");
            }
            return $conn;
        }
    }
?>