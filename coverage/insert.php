<?php
include('connect.php');

$query =  "INSERT INTO movie (id, mname, date,customer, pin)
VALUES ('{$_POST['id']}', '{$_POST['mname']}', '{$_POST['date']}', '{$_POST['customer']}', '{$_POST['pin']}')";
$result = mysqli_query($con,$query);
if($result == TRUE){
 header("Location: Show.php");
}else{
echo "ไม่สามารถเพิ่มรายชื่อได้";
}

?>