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
<body>
<nav class="navbar navbar-expand-md bg-light navbar-light">
    <a class="navbar-brand" href="Home.php">Lớp học</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Stream</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Classwork</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">People</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Grades</a>
            </li>
            <li class="nav-item">
                <p class="navbar-brand"  ><?php echo $_SESSION["username"] ?></p>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="banner-image">
        <h1>Tên môn học</h1>
        <p>Tên giáo viên</p>
        <p>Mã lớp</p>
    </div>
    <div class="card-stream mt-3">
        <br>
        <textarea id="textarea" placeholder="Chia sẻ với lớp học"></textarea>
        <button class="mt-2" id="btn-send">Đăng</button>
        <br>
    </div>
    <div class="card-stream mt-3 mb-3">
        <br>
        <h4 class="ml-2">Tên người dùng</h4>
        <p class="ml-2">Nội dung</p>
        <input class="input-stream" type="text" placeholder="Thêm nhận xét của bạn">
        <br>
    </div>
</div>
</body>
</html>