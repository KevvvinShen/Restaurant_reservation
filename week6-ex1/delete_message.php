<?php

	// session_start();
	// $db = require_once "db.php";
	
	// if( isset($_GET['id']) && isset($_SESSION['admin']) && $_SESSION['admin'] == 'admin_yes' )
	// {
	// 	$id = trim($_GET['id']);
	// 	$page = trim($_GET['page']);

	// 	try
	// 	{
	// 		$sql = "DELETE FROM info WHERE id = $id";
	// 		$res = mysqli_query($db, $sql);
	// 		// $sql = "DELETE FROM info WHERE id = :id";
	// 		// $res = $db->prepare($sql);
	// 		// $res -> bindValue(':id', $id, PDO::PARAM_INT);
	// 		// $res -> execute();

	// 		if (mysqli_affected_rows($db)>0) 
	// 		{
	// 			alert('刪除成功');
	// 		}
	// 		else
	// 		{
	// 			alert('查無資料');
	// 		}
			
	// 	}
	// 	catch(PDOException $e)
	// 	{
	// 		setcookie('message', $e->getMessage());
	// 	}
	// }
	// else
	// {
	// 	setcookie('message', '參數錯誤');
	// }

	// header("Location: board.php");

	session_start();
	$db = require_once "db.php";

	if (isset($_GET['id']) && isset($_SESSION['admin']) && $_SESSION['admin'] == 'admin_yes') {
		$id = trim($_GET['id']);

		try {
			$sql = "DELETE FROM info WHERE id = ?";
			$stmt = mysqli_prepare($db, $sql);
			mysqli_stmt_bind_param($stmt, "i", $id);
			mysqli_stmt_execute($stmt);

			if (mysqli_stmt_affected_rows($stmt) > 0) {
				echo "<script>alert('刪除成功');</script>";
			} else {
				echo "<script>alert('查無資料');</script>";
			}
		} catch (Exception $e) {
			setcookie('message', $e->getMessage());
		}
	} else {
		setcookie('message', '參數錯誤');
	}
	header("Location: board.php");