<?php
    include_once("database_connection.php");

    // Establish connection to the database
    $connection = new DatabaseConnection;
    $conn = $connection->connect();

    $sql = "SELECT sku FROM products";

    $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($conn));

    //create an array
    $techarray = array();
    while($row = mysqli_fetch_assoc($result)){
        $techarray[] = $row;
    }

    echo json_encode($techarray);

    return $techarray;

?> 