<?php
session_start();
ob_start();
include "../model/pdo.php";
include "../model/users.php";

if ((isset($_POST['dangnhap']))) {
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$role = check_tk_admin($email, $pass);
	// var_dump($role);
	$_SESSION['vai_tro'] = $role;

	if ($role == 0) {
		header('location: ../admin/index.php?act=show_thong_ke');
	} else {
		$erro = "Đăng nhập thất bại: Email hoặc mật khẩu bị sai";
	}
}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>LOGIN ADMIN</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Trendz Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>

<body>
	<section class="w3l-forms-23">
		<div class="forms23-block-hny">
			<div class="wrapper">
				<!-- <h1>Trendz Login Form</h1> -->
				<div class="d-grid forms23-grids">
					<div class="form23">
						<div class="main-bg">
							<h6 class="sec-one">ADMIN</h6>
							<div class="speci-login first-look">
								<img src="images/user.png" alt="" class="img-responsive">
							</div>
						</div>
						<div class="bottom-content">
							<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
								<input type="email" name="email" class="input-form" placeholder="Your Email" required="required" />
								<input type="password" name="password" class="input-form" placeholder="Your Password" required="required" maxlength="15"/>
								<button type="submit" name="dangnhap" class="loginhny-btn btn">Đăng nhập</button>
							</form>
							<br>
							<?php
							if (isset($erro) && ($erro != "")) {
								echo "<font color='red'>".$erro."</font>";
							}
							?>
							<!-- <p>Not a member yet? <a href="#">Join Now!</a></p> -->
						</div>
					</div>
				</div>
				<!-- <div class="w3l-copy-right text-center">
				</div> -->
			</div>
		</div>
	</section>
</body>

</html>