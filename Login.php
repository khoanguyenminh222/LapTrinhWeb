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
    $username = "";
    $pass = "";
    if(isset($_POST['username']) && isset($_POST['pass'])){
        $username=$_POST['username'];
        $pass=$_POST['pass'];
        if(empty($username)){
            $error='Hãy nhập username';
        }
        else if(empty($pass)){
            $error='Hãy nhập password';
        }
        else{
            include "database.php";
            $conn=ConnectDB();
            $sql="Select username, password, ChucVu from user";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    if ($username === $row['username'] && $pass === $row['password']) {
                        $_SESSION["username"] = $username;
                        $_SESSION["ChucVu"] = $row['ChucVu'];
                        header('Location: http://localhost:8899/DoAn/code/Home.php', true, 301);
                    } else if ($username != $row['username'] || $pass!=$row['password']) {
                        $error = "Sai username hoặc password";
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
                <td><input class="input-login" id="id_username" value="<?= $username?>" name="username" type="text" placeholder="Enter username"/></td>
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
        </table>
    </form>
</div>
</body>
</html>