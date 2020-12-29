<?php
session_start();
error_reporting(0);
include 'libs/conn.php';
include 'libs/form.php';
if(!isset($_SESSION['id'])){
	header("location:login.php");
}else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?php echo $title;?></title>
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
	<link rel="stylesheet" href="assets/css/atlantis.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">

				<a href="dashboard.php" class="logo"  style="margin-top: 9px;">
					<span style="color:#fff;"><b>PPDB</b> MUGAS</span>
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<!-- <div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div> -->
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">

						<!-- <li class="nav-item">
							<a href="#" class="nav-link quick-sidebar-toggler">
								<i class="fa fa-th"></i>
							</a>
						</li> -->
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>
													<?php
														echo $_SESSION['nama_lengkap'];
													?>
												</h4>
												<p class="text-muted"><?php
														echo "@".$_SESSION['username'];
													?></p><!-- <a href="#" class="btn btn-xs btn-secondary btn-sm">View Profile</a> -->
											</div>
										</div>
									</li>
									<li>
										<!-- <div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">My Profile</a>
										<a class="dropdown-item" href="#">My Balance</a>
										<a class="dropdown-item" href="#">Inbox</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Account Setting</a>
										<div class="dropdown-divider"></div> -->
										<a class="dropdown-item" href="logout.php">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?php
										$jml = strlen($_SESSION['nama_lengkap']);
										if($jml<=20){
											echo $_SESSION['nama_lengkap'];
										}else{
											echo substr($_SESSION['nama_lengkap'],0,18)."..";
										}

									?>
									<span class="user-level"><?php
										echo "@".$_SESSION['username'];
									?></span>
								</span>
							</a>

						</div>
					</div>
					<ul class="nav nav-primary">
						<?php
						if($_SESSION['level']=='admin'){
							echo '<li class="nav-item active">
							<a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>';
						}
						include 'view/menu.php';
						?>

					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="container">

				<?php
				if($_SESSION['level']=="admin"){
					switch ($_GET['view']) {
						case 'data_siswa':
							// code...
							include 'view/data_siswa.php';
							break;

						default:
							// code...
							break;
					}
				}else{
					switch ($_GET['view']) {
						case 'daftar_ulang':
							# code...
							include 'view/daftar_ulang.php';
							break;
						case 'databerkas':
							# code...
							include 'view/databerkas.php';
							break;
						case 'dokumen':
							# code...
							include 'view/dokumen.php';
							break;

						case 'buktidu':
								# code...
							include 'view/buktidu.php';
							break;

						default:
							echo '<div class="panel-header bg-primary-gradient">
									<div class="page-inner py-5">
										<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
											<div>
												<h2 class="text-white pb-2 fw-bold">'.$head.'</h2>
												<h5 class="text-white op-7 mb-2">'.$des.'</h5>
											</div>

										</div>
									</div>
								</div>';
							break;
					}
				}
				?>
			</div>
		</div>
	</div>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery.3.2.1.min.js.download"></script>
	<script src="assets/js/popper.min.js.download"></script>
	<script src="assets/js/bootstrap.min.js.download"></script>

	<!-- jQuery UI -->
	<script src="assets/js/jquery-ui.min.js.download"></script>
	<script src="assets/js/jquery.ui.touch-punch.min.js.download"></script>

	<!-- jQuery Scrollbar -->
	<script src="assets/js/jquery.scrollbar.min.js.download"></script>

	<!-- Moment JS -->
	<script src="assets/js/moment.min.js.download"></script>

	<!-- Chart JS -->
	<script src="assets/js/chart.min.js.download"></script>

	<!-- jQuery Sparkline -->
	<script src="assets/js/jquery.sparkline.min.js.download"></script>

	<!-- Chart Circle -->
	<script src="assets/js/circles.min.js.download"></script>

	<!-- Datatables -->
	<script src="assets/js/datatables.min.js.download"></script>

	<!-- Bootstrap Notify -->
	<script src="assets/js/bootstrap-notify.min.js.download"></script>

	<!-- Bootstrap Toggle -->
	<script src="assets/js/bootstrap-toggle.min.js.download"></script>

	<!-- jQuery Vector Maps -->
	<script src="assets/js/jquery.vmap.min.js.download"></script>
	<script src="assets/js/jquery.vmap.world.js.download"></script>

	<!-- Google Maps Plugin -->
	<script src="assets/js/gmaps.js.download"></script>

	<!-- Dropzone -->
	<script src="assets/js/dropzone.min.js.download"></script>

	<!-- Fullcalendar -->
	<script src="assets/js/fullcalendar.min.js.download"></script>

	<!-- DateTimePicker -->
	<script src="assets/js/bootstrap-datetimepicker.min.js.download"></script>

	<!-- Bootstrap Tagsinput -->
	<script src="assets/js/bootstrap-tagsinput.min.js.download"></script>

	<!-- Bootstrap Wizard -->
	<script src="assets/js/bootstrapwizard.js.download"></script>

	<!-- jQuery Validation -->
	<script src="assets/js/jquery.validate.min.js.download"></script>

	<!-- Summernote -->
	<script src="assets/js/summernote-bs4.min.js.download"></script>

	<!-- Select2 -->
	<script src="assets/js/select2.full.min.js.download"></script>

	<!-- Sweet Alert -->
	<script src="assets/js/sweetalert.min.js.download"></script>

	<!-- Owl Carousel -->
	<script src="assets/js/owl.carousel.min.js.download"></script>

	<!-- Magnific Popup -->
	<script src="assets/js/jquery.magnific-popup.min.js.download"></script>

	<!-- Atlantis JS -->
	<script src="assets/js/atlantis.min.js.download"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="assets/js/setting-demo.js.download"></script>
	<script src="assets/js/demo.js.download"></script>
	<script>
		Circles.create({
			id:'circles-1',
			radius:45,
			value:60,
			maxValue:100,
			width:7,
			text: 5,
			colors:['#f1f1f1', '#FF9E27'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-2',
			radius:45,
			value:70,
			maxValue:100,
			width:7,
			text: 36,
			colors:['#f1f1f1', '#2BB930'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-3',
			radius:45,
			value:40,
			maxValue:100,
			width:7,
			text: 12,
			colors:['#f1f1f1', '#F25961'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
				datasets : [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: {
							display: false //this will remove only the label
						},
						gridLines : {
							drawBorder: false,
							display : false
						}
					}],
					xAxes : [ {
						gridLines : {
							drawBorder: false,
							display : false
						}
					}]
				},
			}
		});

		$('#lineChart').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>
</body>
</html>
<?php
}
?>
