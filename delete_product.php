<?php 
    header( 'Location: index.php' );
    include_once("database_connection.php");
    
    // Establish connection to the database
    $connection = new DatabaseConnection;
    $conn = $connection->connect();
    
    // Get the ids of checked input elements to be deleted from database
    $ids = array();
    $checkedIds = array();

    if(isset($_POST['checkedIds'])) {
        $ids = json_decode($_POST['checkedIds']);
    
        foreach ($ids as $value) {
            echo $value . " ";
        }
    }
    else {
        // echo "empty";
    }

    // Convert string stored ids to integers and pass them into an array
    for($i = 0; $i < count($ids); $i++) {
        $checkedIds[$i] = intval($ids[$i]);
    }

    // If $checkedIds array is set loop through it and run DELETE query on the ids it holds
    if(isset($checkedIds)) {
    foreach($checkedIds as $num) {
        $sql = "DELETE FROM products WHERE id='$num'";
        $delete = mysqli_query($conn, $sql);
    }
    }
?>