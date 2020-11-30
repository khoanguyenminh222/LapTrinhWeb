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
session_start();
?>
<body>
<nav class="navbar navbar-expand-md bg-light navbar-light">
    <a class="navbar-brand" href="Home.php">Lớp học</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">

            <?php
            include "database.php";
            $conn=ConnectDB();

            if($_SESSION["ChucVu"]==="HocVien"){

            }else if($_SESSION["ChucVu"]==="GiaoVien"){
                echo "<li class='nav-item'>";
                echo "<a class='nav-link' href='#'>Tạo lớp học</a>";
                echo "</li>";
            }else if($_SESSION["ChucVu"]==="Admin") {
                echo "<li class='nav-item active'>";
                echo "<a class='nav-link' href='PhanQuyen.php'>Phân quyền</a>";
                echo "</li>";
                echo "<li class='nav-item'>";
                echo "<a class='nav-link' href='#'>Tạo lớp học</a>";
                echo "</li>";
            }
            ?>

            <li class="nav-item">
                <a class="nav-link" href="#">Tham gia vào lớp học</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Login.php">Đăng xuất</a>
            </li>
            <li class="nav-item">
                <p class="navbar-brand" > <?php echo $_SESSION["username"] ?></p>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <h3>Admin</h3>

    <table class="table table-hover">
        <tr>
            <th>username</th>
            <th>password</th>
            <th>HoTen</th>
            <th>NgaySinh</th>
            <th>Email</th>
            <th>SoDienThoai</th>
            <th>ChucVu</th>
        </tr>
        <tr>
            <?php
            $sql="Select * from user";
            $result = $conn->query($sql);
            $email='';
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {

                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td>" . $row['password'] . "</td>";
                        echo "<td>" . $row['HoTen'] . "</td>";
                        echo "<td>" . $row['NgaySinh'] . "</td>";
                        echo "<td>" . $row['Email'] . "</td>";
                        echo "<td>" . $row['SoDienThoai'] . "</td>";
                        echo "<form method='post' action='PhanQuyen.php'>";
                        echo '<td><select name="ChucVu">';
                        echo "<option value='Admin' selected='selected'>Admin</option>";
                        echo "<option value='GiaoVien'>GiaoVien</option>";
                        echo "<option value='HocVien'>HocVien</option>";
                        echo "</select></td>";
                        echo "<td><button type='submit' name='update'>Update ChucVu</button></td>";
                        echo "</form>";
                        echo "</tr>";
                    
                }
            }
            if (isset($_POST['update'])) {
                $value = $_POST['ChucVu'];
                $email = $row['Email'];
                $sql = "update user set ChucVu='$value' when Email='$email'";
                if ($conn->query($sql) === TRUE) {
                    echo "<div class='alert alert-success'>Cập nhật thành công</div>";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
            }
            ?>
        </tr>
    </table>
</div>
<?php


?>
</body>
</html>