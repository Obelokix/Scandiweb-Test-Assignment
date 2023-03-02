<?php 
    header( 'Location: index.php' );

    include_once "product.php";
    include_once "DVDClass.php";
    include_once "furnitureClass.php";
    include_once "bookClass.php";
    include_once("database_connection.php");

    // Check which special attribute has been chosen by the user and assign it to $special_attribute var
    if($_POST["size"] != NULL){ // Size attribute
        $special_attribute = "Size: " . $_POST["size"] . "MB";
    }
    else if ($_POST["weight"] != NULL) { // Weight attribute
        $special_attribute = "Weight: " . $_POST["weight"] . "KG";
    }
    else if($_POST["width"] != NULL && $_POST["height"] != NULL && $_POST["length"] != NULL) { // Dimension attribute
        $special_attribute = "Dimension: " . $_POST["width"] . "x" . $_POST["height"] . "x" . $_POST["length"];
    }

    // Create an new product object based on user's selection
    $newProduct = new $_POST["productType"]();

    // Insert data for this object to the database
    $newProduct->insertData($_POST["sku"], $_POST["name"], $_POST["price"], $special_attribute);
?>