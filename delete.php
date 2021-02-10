<?php
include('connect.php');

    $query = "DELETE FROM movie WHERE id = '{$_GET['id']}'";
    $result = mysqli_query($con, $query); 
    if ($result) {
        header("Location: Show.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }


?>