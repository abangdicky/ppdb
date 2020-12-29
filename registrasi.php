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
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold"><?php echo $head; ?></h2>
								<h5 class="text-white op-7 mb-2"><?php echo $des; ?></h5>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					
		<!-- form wizard -->

					<div class="row">
						<div class="wizard-container wizard-round col-md-9">
							<div class="wizard-header text-center">
								<h3 class="wizard-title"><b>Halaman Pendaftaran</b></h3>
								<small>Data ini digunakan untuk pendaftaran siswa baru </small>
								<small>akan mendapat user login untuk Daftar Ulang</small>
							</div>
							<?php
							session_start();
							if(isset($_SESSION['status_error'])){
								if($_SESSION['status_error']=="0"){
									echo '<div class="col-md-6 ml-auto mr-auto">
									<div class="card">
										<div class="card-body text-center">
											Pendaftaran Berhasil<br>
											Silahkan cetak bukti pendaftaran berikut<br>
											<a href="logout.php">kembali ke beranda</a>
										</div>
									</div>
								</div>';
								}else{
									echo '<div class="col-md-6 ml-auto mr-auto">
									<div class="card">
										<div class="card-body text-center">
											Pendaftaran tidak dapat diproses<br><b> NISN tersebut telah didaftarkan</b><br>
											<a href="logout.php">kembali ke beranda</a>
										</div>
									</div>
								</div>';
								}
								
							}else{
							?>
							<form novalidate="novalidate" method="post" action="act/simpan.php?act=daftar">
								<div class="wizard-body">
									<div class="row">

										<ul class="wizard-menu nav nav-pills nav-primary">
											<li class="step" style="width: 33.3333%;">
												<a class="nav-link active" href="#1" data-toggle="tab" aria-expanded="true"><i class="fa fa-user mr-0"></i> Data Pendaftar</a>
											</li>
											<li class="step" style="width: 33.3333%;">
												<a class="nav-link" href="#2" data-toggle="tab"><i class="fa fa-file mr-2"></i> Data Orang Tua</a>
											</li>
											<li class="step" style="width: 33.3333%;">
												<a class="nav-link" href="#3" data-toggle="tab"><i class="fa fa-map-signs mr-2"></i> Program Keahlian</a>
											</li>
										</ul>
									</div>
									<div class="tab-content">
										<div class="tab-pane active" id="1">
											<div class="row">
												<div class="col-md-12">
													<h4 class="info-text">Harap di isi dengan Lengkap dan Benar.</h4>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label>Nama :</label>
														<input name="nama" type="text" class="form-control" required="">
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-12">Jenis Kelamin : <span class="required"></span></label>
													<div class="col-md-12">
														<div class="custom-control custom-radio">
															<input type="radio" id="male" name="JK" value="L" class="custom-control-input">
															<label class="custom-control-label" for="male">Laki-Laki</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="female" name="JK" value="P" class="custom-control-input">
															<label class="custom-control-label" for="female">Perempuan</label>
														</div>
													</div>
												</div>

												<div class="col-md-12">
													<div class="form-group">
														<label>NISN :</label>
														<input name="nisn" type="text" class="form-control" required="">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Tempat Lahir :</label>
														<input name="tmplahir" type="text" class="form-control" required="">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Tanggal Lahir</label>
														<div class="input-group">
															<input type="date" class="form-control" id="datepicker" name="tgllahir" required="">
															<div class="input-group-append">
																<span class="input-group-text">
																	<i class="fa fa-calendar-check"></i>
																</span>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label>Alamat :</label>
														<input name="alamat" type="text" class="form-control" required="">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label>Nomor Handphone :</label>
														<input name="nohp" type="text" class="form-control" required="">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label>Asal SMP :</label>
														<input name="asalsmp" type="text" class="form-control" required="">
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="2">
											<h4 class="info-text">Harap di isi dengan Lengkap dan Benar.</h4>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label>Nama Ayah :</label>
														<input name="namaayah" type="text" class="form-control" required="">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label>Nomor Handphone Ayah :</label>
														<input name="nohp1" type="text" class="form-control" required="">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label>Nama Ibu :</label>
														<input name="namaibu" type="text" class="form-control" required="">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label>Nomor Handphone Ibu :</label>
														<input name="nohp2" type="text" class="form-control" required="">
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="3">
											<h4 class="info-text">Program Keahlian yang anda pilih</h4>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label>Program Keahlian :</label>
														
														<select name="prog" class="form-control" required="">
															<option value="">-- Pilih salah satu --</option>
															<option value="akl">Akuntansi Keuangan Lembaga</option>
															<option value="otkp">Otomatisasi Tata Kelola Perkantoran</option>
															<option value="phl">Perhotelan</option>
															<option value="mm">Multimedia</option>
															<option value="tbsm">Teknik dan Bisnis Sepeda Motor</option>
															<option value="jb">Jasa Boga</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="wizard-action">
									<div class="pull-left">
										<input type="button" class="btn btn-previous btn-fill btn-black disabled" name="Sebelumnya" value="Sebelumnya">
									</div>
									<div class="pull-right">
										<input type="button" class="btn btn-next btn-fill btn-danger" name="Selanjutnya" value="Selanjutnya">
										<button type="submit" class="btn btn-finish btn-danger" name="Konfirmasi" value="Konfirmasi" style="display: none; ">Kirim</button>
									</div>
									<div class="clearfix"></div>
								</div>
							</form>
							<?php
								}
							?>
						</div>
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

</body>
</html>