<?php

	if( isset($_COOKIE['message']) )
	{
		$message = $_COOKIE['message'];
		setcookie('message','');
	}
	else
	{
		$message = '';
	}

?>

<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>

	<!-- 指定網頁編碼 -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<!--
		響應式網頁
		width=device-width 頁面寬度與螢幕可視寬度相同
		initial-scale=1 手機上畫面放大倍率
		user-scalable=0 手機上禁止縮放
	-->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

    <!-- title旁的小圖案-->
    <link rel="icon" href="img/board.ico">

	<!-- 網頁文件標題 -->
	<title>餐廳訂位系統</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="css/board.css" type="text/css">

</head>

<body>

	<!-- 頁面標題 -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>餐廳訂位系統</h2>
					<ol class="breadcrumb">
						<li><a href="board.php">查看訂位資訊</a></li>
						<li><a href="admin.php">管理者</a></li>
					</ol>
					<hr>
                </div>
            </div>
        </div>
    </header>

	<!-- 頁面內容 -->
	<section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>訂位</h2>
          <p>請填寫以下欄位</p>
        </div>

        <form action="book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="姓名" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
						<div class="col-lg-4 col-md-6 form-group">
              <input type="tel" name="telNo" class="form-control" id="telNo" placeholder="電話" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
						<div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="date" name="date" class="form-control" id="time" placeholder="時間" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
						<div class="col-lg-4 col-md-6 form-group mt-3">
                <select name="adult">
                  <option value="" disabled selected>
                    大人人數
                  </option>
									<option value="0">
                    0
                  </option>
									<option value="1">
                    1
                  </option>
                  <option value="2">
                    2
                  </option>
                  <option value="3">
                    3
                  </option>
                  <option value="4">
                    4
                  </option>
                  <option value="5">
                    5
                  </option>
									<option value="6">
                    6
                  </option>
									<option value="7">
                    7
                  </option>
									<option value="8">
                    8
                  </option>
									<option value="9">
                    9
                  </option>
									<option value="10">
                    10
                  </option>
                </select>
              </div>
							<div class="col-lg-4 col-md-6 form-group mt-3">
              <select name="child">
                  <option value="child" disabled selected>
                    小孩人數
                  </option>
									<option value="0">
                    0
                  </option>
									<option value="1">
                    1
                  </option>
                  <option value="2">
                    2
                  </option>
                  <option value="3">
                    3
                  </option>
                  <option value="4">
                    4
                  </option>
                  <option value="5">
                    5
                  </option>
									<option value="6">
                    6
                  </option>
									<option value="7">
                    7
                  </option>
									<option value="8">
                    8
                  </option>
									<option value="9">
                    9
                  </option>
									<option value="10">
                    10
                  </option>
                </select>
	              </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
					<div class="col-md-12 text-center">
<?php if( $message ): ?>
<div class="alert alert-warning" role="alert"><?php echo $message; ?></div>
<?php endif; ?>
							<button type="submit" class="btn btn-success" name="submit">確定送出</button>
					</div>
        </form>

      </div>
    </section>
		<!-- End Book A Table Section -->
	 <!--<section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="insert_message.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
																<div class="form-group">
																		<input type="text" class="form-control input-lg" name="rest_code" placeholder="餐廳代碼 *">
																</div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="name" placeholder="姓名 *">
                                </div>
																<div class="form-group">
                                    <input type="text" class="form-control input-lg" name="phone_num" placeholder="電話 *">
                                </div>
																<div class="form-group">
                                    <input type="text" class="form-control input-lg" name="adult_num" placeholder="大人人數 *">
                                </div>
																<div class="form-group">
                                    <input type="text" class="form-control input-lg" name="child_num" placeholder="小孩人數 *">
                                </div>
																<div class="form-group">
                                    <input type="text" class="form-control input-lg" name="book_time" placeholder="訂位時間 *">
                                </div>
                            </div>
                            <div class="col-md-6">
																<div class="form-group">
                                    <textarea class="form-control" name="remark" rows="5" placeholder="備註 *"></textarea>
                                </div>
																<div class="form-group">
                                    <input type="text" class="form-control input-lg" name="verify" placeholder="驗證碼 *">
                                </div>
                                <div class="form-group">
									<img src="verifyimg.php" name="img">
									<a href="index.php">看不清楚? 刷新</a>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
								?php if( $message ): ?>
									<div class="alert alert-warning" role="alert">?php echo $message; ?></div>
								?php endif; ?>
                                <button type="submit" class="btn btn-success" name="submit">送出</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>-->

	<!-- 頁面底部 -->
    <footer>
         <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
					<hr>
                    <h5>餐廳訂位系統建置實作</h5>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="bootstrap/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
