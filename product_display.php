<?php
    include_once("database_connection.php");

    class ProductDisplay  {
        public function fetchProductData() {

            // Establish connection to the database
            $connection = new DatabaseConnection;
            $conn = $connection->connect();
            
            // Select data from the database
            $sql = "SELECT sku, product_name, price, special_attribute, id FROM products";
            $result = $conn->query($sql);
            
            if ($result->num_rows >= 0) {
              // Output data of each row
              while($row = $result->fetch_assoc()) {
                $id = $row["id"];
                echo "<div class='col text-center gx-5 gy-5'> <div style='padding: 10px;' class='card'> <div class='card-input'> <input name='product_input[]' style='display: block;' type='checkbox' class='delete-checkbox' id='$id' checked> <div class='card-body' style='padding-bottom: 25%'>" . "<p style='margin: 0px;'>" .$row["sku"] . "</p>". "<p style='margin: 0px;'>".$row["product_name"]. "</p>". "<p style='margin: 0px;'>" . $row["price"]."$". "</p>" . "<p style='margin: 0px;'>" . $row["special_attribute"]. "</p>" . "</div> </div> </div> </div>";
              }
            } else {
              // echo "0 results";
            }
            $conn->close();
        }
    }
?>