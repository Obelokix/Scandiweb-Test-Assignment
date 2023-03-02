<?php 
    include_once("database_connection.php");

    class DVD extends Product {
        public function openConnection() {
            $newConnection = new DatabaseConnection(); 
            $conn = $newConnection->connect();
            return $conn;
        }

        public function insertData($sku, $product_name, $price, $special_attribute) {
            // Insert data into the database
            $sql = "INSERT INTO products (sku, product_name, price, special_attribute)
                    VALUES ('$sku', '$product_name', '$price', '$special_attribute')";
            $conn = $this->openConnection();
            mysqli_query($conn, $sql);
            return 1;
        }
    }
?>