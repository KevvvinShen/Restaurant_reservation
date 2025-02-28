<?php

	$db = require_once('db.php');

	if( isset( $_POST['submit'] ) )
	{
		$account = trim($_POST['account']);
		$password = trim($_POST['password']);
		$check_password = trim($_POST['check_password']);
		$date = date("Y-m-d H:i:s");

		if( !empty($account) && !empty($password) && !empty($check_password) )
		{
			if( $password == $check_password )
			{
				try
				{
					// $sql = "SELECT * FROM customer WHERE account = :account";
					// $res = $db->prepare($sql);
					// $res -> bindValue(':account', $account);
					// $res -> execute();
					// $account_count = $res -> rowCount();

					$sql = "SELECT * FROM customer WHERE account = '$account'";
					echo $sql;
					$res = mysqli_query($db, $sql);
					$account_count = mysqli_num_rows($res);
					echo $account_count;

					//確認帳號是否重複
					if( $account_count === 0 )
					{
						$sql = "INSERT INTO customer(id, account, password	, date) VALUES(null, '$account', '$password', '$date')";
						$res = mysqli_query($db, $sql);
						// $res = $db->prepare($sql);
						// $res -> bindValue(':account', $account);
						// $res -> bindValue(':password', md5($password));
						// $res -> bindValue(':date', $date);
						// $res -> execute();
						// $check = $res->rowCount();

						// if( $check === 1 )
						// {
							setcookie('message', '新增成功');
						// }
						// else
						// {
						// 	setcookie('message', '新增失敗');
						// }
					}
					else
					{
						setcookie('message', '帳號重複 請重新申請');
					}

				}
				catch(PDOException $e)
				{
					setcookie('message', $e->getMessage());
				}
			}
			else
			{
				setcookie('message', '密碼與確認密碼不同');
			}
		}
		else
		{
			setcookie('message', '請確實填寫欄位');
		}
	}
	else
	{
		setcookie('message', '參數錯誤');
	}

	header("Location: admin_customer_register.php");
