<?php
    include('connect.php');
    $sql = "Update movie SET
    mname = '{$_POST['mname']}' AND date = '{$_POST['date']}'
    WHERE mname = '{$_POST['mname']}' ";
 if ($con->query($sql) === TRUE) {
    header("Location: show.php");
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$conn->close();
?>