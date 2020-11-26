<?php
function ConnectDB(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "quanlilophoc";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
function CloseDB($conn){
    $conn->close();
}
?>
