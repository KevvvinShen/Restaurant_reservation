<?php
// 接值
$name = $_POST['name'];
$telNo = $_POST['telNo'];
$date = $_POST['date'];
$adult = $_POST['adult'];
$child = $_POST['child'];
$message = $_POST['message'];

// 引入資料庫連線
$connect = require_once "db.php";
// 寫SQL並執行
$sql = "INSERT INTO info (id, name, phone, date, adult, child, message) 
        VALUES(null, '$name', '$telNo', '$date', '$adult', '$child', '$message')";
if(!$connect)
    echo "ERROR: Could not connect. " . mysqli_connect_error();
else{
    if(mysqli_query($connect, $sql))
        echo "insert success<br>";
    else
        echo "错误描述: " . mysqli_error($connect);
}

// 結束連線
mysqli_close($connect);

// 3秒後跳轉到C.html
header("refresh: 0; url=board.php");