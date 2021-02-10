<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายการภาพยนต์</title>
    <!--การเรียกใช้บูส-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</head>

<?php
    include('connect.php');
    $sql = "SELECT * FROM movie";
    $result = $con->query($sql);

    if(isset ($_GET['serach_click'])){
    $sql = "SELECT * FROM moive WHERE id LIKE '%{$_GET['search']}%' OR fname LIKE '%{$_GET['search']}%' ";
    }
$result = $con->query($sql);
    ?>
<body>

<br>
<form action="login.php" method="get"  style="width: 20rem; margin-left: 2%;" >
 
    <div class="mb-3">
    <input type="hiden" class="form-control" name="search"   id="search" placeholder="ค้นหา">
    
    </div>
    <button type="submit" class="btn btn-primary" name="serach_click">ค้นหา</button>
</form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">รหัสภาพยนต์</th>
                <th scope="col">ชื่อภาพยนต์</th>
                <th scope="col">เวลาที่เริ่มฉาย/วัน</th>
                <th scope="col">pin</th>
            </tr>
        </thead>
        <tbody>
<?php
    while($row = mysqli_fetch_array($result)) {
?>
            <!--ข้อมูล-->
            <tr>
                <th scope="id">1</th>
                <td> mname</td>
                <td> date</td>
                <td> customer</td>
                <td> pin</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <a href=""><button type="button" class="btn btn-outline-primary">แก้ไข</button> </a>
                        <a href=""><button type="button" class="btn btn-outline-primary">ลบ</button> </a>
                    </div>
<?php
     }
?>
        </tbody>
      </table>
      <a href="insert_form.html"><button type="button" class="btn btn-primary">เพิ่มรายชื่อนักศึกษา</button></a>
      <br>
      <br>
    <form action="login.php" method="post">
     <button type="submit" name="logout" class="btn btn-success">ออกจากระบบ</button>
    </form>
</body>

</html>