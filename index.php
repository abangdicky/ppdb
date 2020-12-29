<?php
include 'libs/conn.php';
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
				<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">
									<img src="assets/img/logo.png"  style="width: 70px; height: 70px; margin:5px; margin-right:10px; ">
									<h2 class="text-white pb-2 fw-bold" style="margin-right:100px;"><?php echo $title_logo;?></h2>
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
									</button>

									<div class="collapse navbar-collapse" id="navbarColor02">
										<ul class="navbar-nav mr-auto">
											<li class="nav-item active">
												<!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> -->
											</li>
											<li class="nav-item">
												<!-- <a class="nav-link" href="#">Features</a> -->
											</li>
										</ul>
											<button class="btn btn-light my-2 my-sm-0" type="submit"><a href="login.php">Login</a></button>
									</div>
								</nav>
					
		<!-- form wizard -->
		<div class="panel-header bg-primary-gradient">
				<!-- <div class="page-inner py-5" style="padding: 100px !important;">
					<div class="row">
						<div class="col-md-12">
							<h2 class="text-white pb-2 fw-bold"><center>LIHAT HASIL PENDAFTARAN ANDA !</center></h2>
						<div class="col-md-9 ml-auto mr-auto">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Masukkan NISN yang tertera di bukti pendaftaran" aria-label="" aria-describedby="basic-addon1">
								<div class="input-group-prepend">
									<button class="btn btn-black btn-primary" type="button">Cek Data</button>
								</div>
							</div>
						</div>	
						</div>								
					</div>
				</div> -->
				<img src="assets/img/gbr-12.jpg" style="width: 100%; margin: 0px; margin-left: 0px;">
		</div>
		<div class="card">

				<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">
					<div class="card-body" style="padding: 10px !important;">

					<div class="row">
						<div class="col-md-3">
							
						</div>
						<div class="col-md-5">
							<h2 class="text-white text-center">Bagi Yang Akan Daftar Klik Tombol Disamping</h2>
						</div>
						<div class="col-md-1">
						<a href="registrasi.php"><button class="btn btn-warning my-2 my-sm-0" type="submit"><b>DAFTAR !</b></a></button>
						</div>
						<div class="col-md-3">
						</div>
					</div>
					</div>
				</nav>
					<div class="card-header">
						<div class="card-title">Daftar Program Keahlian</div>
					</div>
				<div class="card-body">
					<div class="row ">

						<div class="col-md-4">
							<div class="card">
								<div class="card-body"><center>
									<h5 class="card-title mb-3 text-center">Akuntansi Keuangan Lembaga</h5>
									<br>
									<p class="card-text">Yang dimaksud dengan Akuntansi adalah proses menelusuri transaksi keuangan dari suatu perusahaan. Selama dimana ada transaksi keuangan, perusahaan perlu melacak keluar masuknya aliran dana mereka untuk menentukan rugi laba yang diperoleh. Hal ini sangatlah penting dalam menilai kemajuan dalam suatu perusahaan.</p>
									<!-- <a href="#" class="card-link">Card link</a> -->
								</center></div>
							</div>
						</div>
							<div class="col-md-4">
							<div class="card">
								<div class="card-body"><center>
									<h5 class="card-title mb-3 text-center">Otomatisasi Tata Kelola Perkantoran</h5>
									<br>
									<p class="card-text">Suatu bidang pekerjaan yang dibutuhkan di pelbagai perusahaan, baik perusahaan skala kecil, menengah maupun besar. Suatu pekerjaan administrasi yang dapat dilakukan di mana saja di segala bidang pekerjaan dan profesi.</p>
									<!-- <a href="#" class="card-link">Card link</a> -->
								</center></div>
							</div>
						</div>
							<div class="col-md-4">
							<div class="card">
								<div class="card-body"><center>
									<h5 class="card-title mb-3 text-center">Perhotelan</h5>
									<br>
									<p class="card-text">Akomodasi Perhotelan adalah kompetensi keahlian dibawah program studi keahlian pariwisata yang menekankan keahlian pada bidang penguasaan informasi dan kemampuan tentang akomodasi perhotelan, pengelolaan dan penyelengaraan akomodasi.</p>
									<!-- <a href="#" class="card-link">Card link</a> -->
								</center></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="card-body"><center>
									<h5 class="card-title mb-3 text-center">Multimedia</h5>
									<br>
									<p class="card-text">Jurusan multimedia sangat cocok bagi mereka yang berpikiran kreatif dan memiliki hasrat pada teknologi baru dan menciptakan cara-cara inovatif dalam menyampaikan sesuatu.</p>
									<!-- <a href="#" class="card-link">Card link</a> -->
								</center></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="card-body"><center>
									<h5 class="card-title mb-3 text-center">Teknik dan Bisnis Sepeda Motor</h5>
									<br>
									<p class="card-text">Teknik Sepeda Motor adalah kompetensi keahlian pada Bidang Studi Keahlian Teknologi dan Rekayasa Program Studi Keahlian Teknik Otomotif yang menekankan pada keterampilan pelayanan jasa mekanik kendaraan sepeda motor roda dua. Kompetensi Keahlian Teknik Sepeda Motor menyiapkan peserta didik untuk bekerja pada bidang pekerjaan yang dikelola oleh badan, instansi atauperusahaan pribadi (wirausaha).</p>
									<!-- <a href="#" class="card-link">Card link</a> -->
								</center></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="card-body"><center>
									<h5 class="card-title mb-3 text-center">Jasa Boga</h5>
									<br>
									<p class="card-text">Jasa Boga adalah Kompetensi Keahlian yang berada di bawah Program Studi Keahlian Tata Boga, Bidang Studi Keahlian Seni, Kerajinan dan Pariwisata. Kompetensi Keahlian Jasa Boga memberikan pengetahuan dan keterampilan kepada peserta didik di bidang pengolahan, penyajian dan pelayanan makanan dan minuman.</p>
									<!-- <a href="#" class="card-link">Card link</a> -->
								</center></div>
							</div>
						</div>
					</div>
				</div>
				<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">
					<div class="card-body" style="padding: 50px !important;">

					<div class="row">
						<div class="col-md-1">	
						</div>
						<div class="col-md-6">
							<h1 class="text-white fw-bold">Waktu Pendaftaran</h1>
							<h4 class="text-white">Pendaftaran Dapat Dilakukan Dengan Membawa Berkas Persyaratan Ke SMK Muhammadiyah 3 Singosari Pada Jam Kerja, Senin - Sabtu: pukul 07:30 s/d 15:00 WIB</h4>
						</div>
						<div class="col-md-1">	
						</div>
						<div class="col-md-1">
						<button class="btn btn-light my-2 my-sm-0" type="submit" style="margin-top: 30px !important; padding: 15px 30px;"><b>Download Brosur</b></button>
						</div>
						<div class="col-md-1">
						</div>
					</div>
					</div>
				</nav>
				
				<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">
					<div class="card-body" style="padding: 10px !important;">
						<div class="card">
							<table class="table">
							    <tbody>
							        <tr>
							            <td colspan="2"><b>Persyaratan Umum PPDB 2020 (Jalur Umum)</b></td>
									</tr>
							        <tr>
							            <td align="center" valign="top" width="5%">1.</td>
							            <td width="95%">Mengisi Formulir Pendaftaran di SMK Muhammadiyah 3 Singosari Dengan Sistem Komputerisasi</td>
							        </tr>
							        <tr>
							            <td align="center" valign="top" width="5%">2.</td>
							            <td width="95%">Menyerahkan Foto Copy SKHUS (Surat Keterangan Hasil Ujian Sementara) Sebanyak 1 Lembar</td>
							        </tr>
							        <tr>
							            <td align="center" valign="top" width="5%">3.</td>
							            <td width="95%">Menyerahkan Foto Copy Kartu Keluarga Sebanyak 1 Lembar</td>
							        </tr>
							        <tr>
							            <td align="center" valign="top" width="5%">4.</td>
							            <td width="95%">Menyerahkan Foto Copy (KIP/KPS/PKH/KKS) Bagi Siswa Kurang Mampu</td>
							        </tr>
							        <tr>
							            <td align="center" valign="top" width="5%">5.</td>
							            <td width="95%">Menyerahkan Foto Copy Akta kelahiran Sebanyak 1 Lembar</td>
							        </tr>
							        <tr>
							            <td align="center" valign="top" width="5%">6.</td>
							            <td width="95%">Menyerahkan Foto Copy Piagam Prestasi Kejuaraan Bidang Akademik dan Non Akademik</td>
							        </tr>
							        <tr>
							            <td align="center" valign="top" width="5%">7.</td>
							            <td width="95%">Pas Foto Terbaru Berwarna (3 x 4 = 3 Lembar) dan (2 x 3 = 3 Lembar)</td>
							        </tr>
							        <tr>
							            <td align="center" valign="top" width="5%">8.</td>
							            <td width="95%">Menandatangani Kontrak Belajar dan Surat Perjanjian Siswa</td>
							        </tr>
							        <tr>
							            <td align="center" valign="top" width="5%">9.</td>
							            <td width="95%">Calon Siswa Datang Bersama Orang Tua dan Berpakaian Rapi</td>
							        </tr>
							        <tr>
							            <td align="center" valign="top" width="5%">10.</td>
							            <td width="95%">Membayar Uang Pendaftaran Sebesar Rp. 100.000</td>
							        </tr>
							    </tbody>
							</table>
						</div>
					</div>
				</nav>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12" style="margin-bottom:30px;">
							<div class="col-md-12">
								<h2><b>Alamat Kami<b></h2>
								<h5>
								Alamat: JL. Ken Arok No.9 Kecamatan Singosari, Kabupaten Malang, Jawa Timur, 65153<br>
								Telepon: (0341) 458730<br>
								Email: smkm3sgs@gmail.com<br>
								Website: https://smkm3sgs.sch.id<br>
								</h5>
							</div>
						</div>
						<div class="card-footer">
						<h5 class="text-center">Developed by ntz|abang</h5>
					</div>
					</div>
				</div>
	<!-- DIV TERAKHIR JANGAN DI HAPUS  -->
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

</body>
</html>