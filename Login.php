<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Style.css" />
</head>
<?php
session_start();
?>
<?php
    $email = "";
    $pass = "";
    if(isset($_POST['email']) && isset($_POST['pass'])){
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        if(empty($email)){
            $error='Hãy nhập email';
        }
        else if(empty($pass)){
            $error='Hãy nhập password';
        }
        else{
            include "database.php";
            $conn=ConnectDB();
            $sql="Select username, password, Email, ChucVu from user";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    if ($email === $row['Email'] && $pass === $row['password']) {
                        $_SESSION["username"] = $row['username'];
                        $_SESSION["ChucVu"] = $row['ChucVu'];
                        header('Location: http://localhost:8899/DoAn/code/Home.php', true, 301);
                    } else if ($email != $row['Email'] || $pass!=$row['password']) {
                        $error = "Sai email hoặc password";
                    }
                }
            }
        }
    }
?>
<body>
<div class="login-page">
    <form class="login-form" action="Login.php" method="post">
        <h2>LỚP HỌC CLASSROOM</h2>
        <table>
            <tr>
                <td><input class="input-login" id="id_username" value="<?= $email?>" name="email" type="text" placeholder="Enter email"/></td>
            </tr>
            <tr>
                <td><input class="input-login" value="<?= $pass?>" name="pass" type="password" placeholder="Enter password"/></td>
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
            <tr>
                <td><button type="submit" id="button-login">login</button></td>
            </tr>
            <tr>
                <td><p class="message">Not registered? <a href="Register.php">Create an account</a></p></td>
            </tr>
            <tr>
                <td><a href="forgot.php">Forgot a password</a></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>