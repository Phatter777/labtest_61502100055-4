<?php
    include('connect.php');
    session_start();
    if(isset($_POST['login'])) {
        $sql = "SELECT * FROM movie WHERE id = '{$_POST['customer']}' AND pin = '{$_POST['pin']}'";
        $result = $con->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION["customer"] = $row['customer'];
        } else {
            echo "<p>รหัสผิด</p>";
        }
    }

    if(isset($_POST['logout'])) {
        session_unset();
        header("Location: login_form.php");
    }

    if(isset($_SESSION['id'])) {
     require_once("Show.php");
    } else {
        require_once("login_form.php");
    }
?>
