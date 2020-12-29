<?php
error_reporting(0);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Login</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<script src="assets/js/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/atlantis_login.css">
</head>
<body class="login">
	<div class="wrapper wrapper-login wrapper-login-full p-0">
		<div class="login-aside w-50 d-flex flex-column align-items-center justify-content-center text-center bg-secondary-gradient">
			<h1 class="title fw-bold text-white mb-3">Portal PPDB</h1>
			<h2 class="subtitle text-white op-7">SMK Muhammadiyah 3 Singosari</h2>
		</div>
		<div class="login-aside w-50 d-flex align-items-center justify-content-center bg-white">
			<div class="container container-login container-transparent animated fadeIn">
				<h3 class="text-center">Masuk Untuk mengisi data lengkap</h3>
				<?php
				if($_GET['error']=="baru"){
					echo "<small><center style='color:red;'>NISN anda belum dikonfirmasi, harap tunggu beberapa saat. dan login kembali</center></small>";
				}else if($_GET['error']=="tolak"){
					echo "<small><center style='color:red;'>Maaf, NISN yang anda daftarkan tidak sesuai persyaratan</center></small>";

				}
				 ?>
				<div class="login-form">
					<form action="act/proses_login.php" method="post">
					<div class="form-group">
						<label for="username" class="placeholder"><b>NISN</b></label>
						<input name="user" type="hidden" value="siswa">
						<input id="username" name="NISN" type="text" class="form-control" required placeholder="contoh:203213413xxx">
						<small id="emailHelp2" class="form-text text-muted">Masukkan NISN yang terlah didaftarkan.</small>
					</div>

					<div class="form-group form-action-d-flex mb-3">
						<div class="custom-control custom-checkbox">
						</div>
						<button type="submit" class="btn btn-secondary col-md-5 float-right mt-3 mt-sm-0 fw-bold">Sign In</button>
					</div>

				</div>
				</form>
			</div>
		</div>
	</div>
	<script src="assets/js/jquery.3.2.1.min.js"></script>
	<script src="assets/js/jquery-ui.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/atlantis.min.js"></script>
</body>
</html>
