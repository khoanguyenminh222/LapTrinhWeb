<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                    echo "<a class='nav-link' href='AddClass.php'>Tạo lớp học</a>";
                    echo "</li>";
                }else if($_SESSION["ChucVu"]==="Admin") {
                    echo "<li class='nav-item'>";
                    echo "<a class='nav-link' href='PhanQuyen.php'>Phân quyền</a>";
                    echo "</li>";
                    echo "<li class='nav-item'>";
                    echo "<a class='nav-link' href='AddClass.php'>Tạo lớp học</a>";
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
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 mt-3 mb-3">
            <a href="Stream_Class.php" style="color: black">
                <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tên môn học</h4>
                            <p class="card-text">Tên giáo viên</p>
                        </div>
                    <div class="image"></div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 mt-3 mb-3">
            <a href="Stream_Class.php" style="color: black">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tên môn học</h4>
                        <p class="card-text">Tên giáo viên</p>
                    </div>
                    <div class="image"></div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 mt-3 mb-3">
            <a href="Stream_Class.php" style="color: black">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tên môn học</h4>
                        <p class="card-text">Tên giáo viên</p>
                    </div>
                    <div class="image"></div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 mt-3 mb-3">
            <a href="Stream_Class.php" style="color: black">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tên môn học</h4>
                        <p class="card-text">Tên giáo viên</p>
                    </div>
                    <div class="image"></div>
                </div>
            </a>
        </div>
    </div>
</div>
</body>
</html>