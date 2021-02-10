<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="padding:10px; border: 1px solid #eeeeee; background-color: #FAFFF5;">
        <form name="frmLogin" method="post" action="login.php">
            ล็อกอินเข้าสู่ระบบ...<br>
            <table border="0" cellspacing="0" cellpadding="5" style="width: 300px">
                <tbody>
                    <tr>
                        <td> ชื่อผู้ใช้</td>
                        <td>
                            <input name="username" type="text" id="id">
                        </td>
                    </tr>
                    <tr>
                        <td> รหัสผ่าน</td>
                        <td>
                            <input name="password" type="password" id="pin">
                        </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>
                            <a href="Show.php"><input type="submit" name="btnSubmit" value="เข้าสู่ระบบ"></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</body>

</html>