<?php

	// try
	// {
	// 	$db = new PDO('mysql:host = 127.0.0.1;port=3307; dbname=board', 'root', ''); //連接資料庫
	// 	$db -> query("SET NAMES 'UTF8'"); //指定編碼
	// 	$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //捕捉錯誤訊息
	// }
	// catch(PDOException $e)
	// {
	// 	setcookie('message', $e->getMessage());
	// 	header("Location: index.php");
	// 	exit;
	// }
?>

<?php
    // 定義連線參數
    define('DB_HOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_NAME', 'board');
    define('DB_PASSWORD', '');

    // 資料庫連線
    $connect = @mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, 3307);

    // 設定中文編碼
    // mysqli_query($connect, 'SET NAMES utf8');

    // 檢查連線
    if(!$connect)
        die("ERROR: Could not connect. " . mysqli_connect_error());
    else{
        return $connect;
    }
?>