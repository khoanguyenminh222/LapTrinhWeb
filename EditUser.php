<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<?php
include "database.php";
$conn=ConnectDB();
$sql="Select * from user";
$result = $conn->query($sql);

?>
<body>
<div>
    <form action="" method="post">
        <h2>Edit</h2>
        <table>
            <tr>
                <td><label>username</label></td>
                <td><input class="input-login" name="user" type="text" placeholder="Enter username"/></td>
            </tr>
            <tr>
                <td><label>password</label></td>
                <td><input class="input-login" name="pass" type="password" placeholder="Enter password"/></td>
            </tr>
            <tr>
                <td><label>HoTen</label></td>
                <td><input class="input-login" name="name" type="text" placeholder="Enter Full name"/></td>
            </tr>
            <tr>
                <td><label>NgaySinh</label></td>
                <td><input class="input-login" name="date" type="date" placeholder="22/02/2000"/></td>
            </tr>
            <tr>
                <td><label>Email</label></td>
                <td><input class="input-login" name="mail" type="text" placeholder="Enter email address"/></td>
            </tr>
            <tr>
                <td><label>SoDienThoai</label></td>
                <td><input class="input-login" name="phone" type="text" placeholder="Enter your phone 0-9"></td>
            </tr>
            <tr>
                <td><label>ChucVu</label></td>
                <td><input class="input-login" name="phone" type="text" placeholder="Enter your phone 0-9"></td>
            </tr>
            <tr>
                <td><button type="submit" id="button-login">Create</button></td>
            </tr>
            <tr>
                <div class="form-group">
                    <?php
                    if (!empty($error)) {
                        echo "<div class='alert alert-danger'>$error</div>";
                    }
                    ?>
                </div>
            </tr>

            <div class="form-group">
                <?php
                if (!empty($success)) {
                    echo "<div class='alert alert-success'>$success</div>";
                }
                ?>
            </div>
        </table>

    </form>

</div>
</body>
</html>