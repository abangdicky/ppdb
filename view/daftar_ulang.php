<?php
$q = mysqli_query($mysqli,"SELECT * FROM ntz_data_siswa WHERE NISN='".$_SESSION['username']."'");
$r = mysqli_fetch_array($q);
$qa = mysqli_query($mysqli,"SELECT * FROM ntz_data_siswa_ayah WHERE NISN='".$_SESSION['username']."'");
$ra = mysqli_fetch_array($qa);
$qi = mysqli_query($mysqli,"SELECT * FROM ntz_data_siswa_ibu WHERE NISN='".$_SESSION['username']."'");
$ri = mysqli_fetch_array($qi);
$qw = mysqli_query($mysqli,"SELECT * FROM ntz_data_siswa_wali WHERE NISN='".$_SESSION['username']."'");
$rw = mysqli_fetch_array($qw);
$qs = mysqli_query($mysqli,"SELECT * FROM ntz_data_smp WHERE NISN='".$_SESSION['username']."'");
$rs = mysqli_fetch_array($qs);
$qp = mysqli_query($mysqli,"SELECT * FROM ntz_data_periodik WHERE NISN='".$_SESSION['username']."'");
$rp = mysqli_fetch_array($qp);
?>
<div class="page-inner">
	<div class="page-header">
		<h4 class="page-title">Daftar Ulang</h4>
		<ul class="breadcrumbs">
			<li class="nav-home">
				<a href="#">
					<i class="flaticon-home"></i>
				</a>
			</li>
			<li class="separator">
				<i class="flaticon-right-arrow"></i>
			</li>
			<li class="nav-item">
				<a href="#">Daftar Ulang</a>
			</li>
			<li class="separator">
				<i class="flaticon-right-arrow"></i>
			</li>
			<li class="nav-item">
				<a href="#">Data Diri, Data Orang Tua, Data Sekolah Asal, Data Periodik</a>
			</li>
		</ul>
	</div>
<!-- Data Diri -->
	<section id="1">
	<div class="row">
		<div class="col-md-12">

				<form action="act/update.php" method="post">
					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<?php
								echo judul("Detail Identitas");
								 ?>
								<div class="card-body">
									<ol class="activity-feed">
										<li class="feed-item feed-item-primary">
											<time class="date" datetime="9-25">Data Diri</time>
											<?php
											if($r['JK']=='P'){
												$jk = "Perempuan";
											}else{
												$jk = "Laki-laki";

											}
											echo '<span class="text"><table>';
											echo itemtbl("Nama Lengkap",$r['nama_lengkap']);
											echo itemtbl("NISN",$r['NISN']);
											echo itemtbl("Jenis Kelamin",$jk);
											echo itemtbl("Tempat Lahir",$r['tempat_lahir']);
											echo itemtbl("Tanggal Lahir",$r['tgl_lahir']);
											echo itemtbl("Alamat",$r['alamat']);
											echo itemtbl("Jenis Tinggal",$r['jenis_tinggal']);
											echo itemtbl("Agama",$r['agama']);
											echo itemtbl("Alat Transportasi",$r['alat_transportasi']);
											echo itemtbl("Anak Ke",$r['anak_ke']);
											echo itemtbl("No.HP",$r['hp']);
											echo itemtbl("Email",$r['email']);

											echo'
											</table></span></li>
											<li class="feed-item feed-item-primary">
												<time class="date" datetime="9-24">Data Orang Tua</time>
												<span class="text">
												<table>
												';
												echo itemtbl("Nama Ayah",$ra['nama_lengkap']);
												echo itemtbl("Tahun Lahir",$ra['thn_lahir']);
												echo itemtbl("Pendidikan",$ra['jenjang_pendidikan']);
												echo itemtbl("Pekerjaan",$ra['pekerjaan']);
												echo itemtbl("Penghasilan",$ra['penghasilan']);
												echo itemtbl("No.HP",$ra['nohp']);
												echo "<tr><td><br></td><td></td></tr>";
												echo itemtbl("Nama Ibu",$ri['nama_lengkap']);
												echo itemtbl("Tahun Lahir",$ri['thn_lahir']);
												echo itemtbl("Pendidikan",$ri['jenjang_pendidikan']);
												echo itemtbl("Pekerjaan",$ri['pekerjaan']);
												echo itemtbl("Penghasilan",$ri['penghasilan']);
												echo itemtbl("No.HP",$ri['nohp']);
												echo "<tr><td><br></td><td></td></tr>";
												echo itemtbl("Nama Wali",$rw['nama_lengkap']);
												echo itemtbl("Tahun Lahir",$rw['thn_lahir']);
												echo itemtbl("Pendidikan",$rw['jenjang_pendidikan']);
												echo itemtbl("Pekerjaan",$rw['pekerjaan']);
												echo itemtbl("Penghasilan",$rw['penghasilan']);
												echo itemtbl("No.HP",$rw['nohp']);
												echo itemtbl("Alamat",$rw['alamat']);
												echo '
												</table></span>
											</li>
											<li class="feed-item feed-item-primary">
												<time class="date" datetime="9-24">Data Sekolah Asal</time>
												<span class="text">
												<table>
												';
												echo itemtbl("Nama Sekolah",$rs['nama_sekolah']);
												echo itemtbl("Tahun Lulus",$rs['thn_lulus']);
												echo itemtbl("Nomor Peserta UN SMP",$rs['nopes_un']);
												echo'
												</table></span>
											</li>
											<li class="feed-item feed-item-primary">
												<time class="date" datetime="9-24">Data Periodik</time>
												<span class="text">
												<table>
												';
												echo itemtbl("Tinggi Badan (cm)",$rp['tinggi_badan']);
												echo itemtbl("Berat Badan (kg)",$rp['berat_badan']);
												echo itemtbl("Jarak Rumah ke Sekolah (km)",$rp['jarak_sekolah']);
												echo'
												</table></span>
											</li>
											<li class="feed-item feed-item-primary">
												<time class="date" datetime="9-24">Last Update</time>
												<span class="text">'.$r['log_update'].'</span>
											</li>';
											?>

									</ol>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card">
								<?php
								echo judul("Update Data");
								 ?>
								<div class="card-body">
									<form action="act/update.php" method="post">
										<input type="hidden" name="act" value="data_diri">
											<?php
											echo input_d("NISN","text","NISN",$r['NISN'],"disabled");
											echo input_("Nama Lengkap","text","nama_lengkap",$r['nama_lengkap']);
											if($r['JK']=="P"){
									    echo radio_("Jenis Kelamin","jenis_kelamin","P","L","Perempuan","Laki-Laki","checked");
									    }else{
									    echo radio_("Jenis Kelamin","jenis_kelamin","L","P","Laki-Laki","Perempuan","checked");
									    }
											echo input_("Tempat Lahir","text","tlahir",$r['tempat_lahir']);
											echo input_("Tanggal Lahir","date","tgllahir",$r['tgl_lahir']);
											echo textarea_("Alamat","alamat",$r['alamat']);
											$list_ttinggal = array("Bersama Orang Tua","Wali","Kos","Asrama","Panti Asuhan","Lainnya");
											echo combo_("Jenis Tinggal","ttinggal",$list_ttinggal,"<option value='".$r['jenis_tinggal']."'>".$r['jenis_tinggal']."</option>");

											$list_agama = array("Islam","Kristen","Katholik","Hindu","Budha","Kong Hu Cu","Lainnya");
											echo combo_("Agama","agama",$list_agama,"<option value='".$r['agama']."'>".$r['agama']."</option>");

											$list_transport = array("Jalan Kaki","Kendaraan Pribadi","Kendaraan Umum/Angkot/Pete-pete","Jemputan Sekolah","Kereta Api","Ojek","Andong/Bendi/Sado/Dokar/Delman/Becak","Perahu Penyebrangan/Getek/Rakit","Lainnya");
											echo combo_("Transportasi","transport",$list_transport,"<option value='".$r['alat_transportasi']."'>".$r['alat_transportasi']."</option>");

											echo input_("Anak Ke","number","ake",$r['anak_ke']);
											echo input_("No.HP","text","nohp",$r['hp']);
											echo input_("email","email","email",$r['email']);

											?>
											<div class="form-group">

											<button type="submit" class="btn btn-primary col-md-6 mt-3 mt-sm-0 fw-bold">Perbaruhi</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</form>
		</div>
	</div>
	</section>

<!-- Data Orang Tua -->
	<section id="2">

	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="card-title">Data Orang Tua</div>
				</div>
<!-- Data Ayah -->
				<form action="act/update.php" method="post">
					<input type="hidden" name="act" value="data_ortu">
				<div class="card-body">
					<div class="card-header">
						<div class="card-title">Data Ayah</div>
					</div>
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6">
										<?php
										echo input_("Nama Ayah","text","nama_ayah",$ra['nama_lengkap']);
										?>
									</div>
									<div class="col-md-6">
										<?php
										echo input_("Tahun Lahir","text","tlahir",$ra['thn_lahir']);
										?>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<?php
										$list_pa = array("Tidak Sekolah","Putus SD","SD Sederajat","SMP Sederajat","SMA sederajat","D1","D2","D3","S1/D4","S2","S3");
								    echo combo_("Pendidikan","pendidikan_ayah",$list_pa,"<option value='".$ra['jenjang_pendidikan']."'>".$ra['jenjang_pendidikan']."</option>");
								    ?>
									</div>
									<div class="col-md-6">

										<?php $list_pe = array("Tidak Bekerja","Nelayan","Petani","Peternak","PNS/TNI/POLRI","Karyawan Swasta","Pedagang Kecil","Pedagang Besar","Wiraswasta","Wirausaha","Buruh","Pensiunan","Lain-lain");
								    echo combo_("Pekerjaan Ayah","pekerjaan_ayah",$list_pe,"<option value='".$ra['pekerjaan']."'>".$ra['pekerjaan']."</option>");
										?>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<?php
										$list_ph = array("Kurang dari Rp 500.000","500.000 - 999.999","1 Juta - 1.999.999","2 juta - 4.999.999","5 Juta - 20 Juta","Lebih dari 20 Juta");
								    echo combo_("Penghasilan Bulanan","penghasilan_ayah",$list_ph,"<option value='".$ra['penghasilan']."'>".$ra['penghasilan']."</option>");
								     ?>
									</div>
									<div class="col-md-6">
										<?php
										echo input_("No.Tlp","number","telepon_ayah",$ra['nohp']);
										?>
									</div>
								</div>

							</div>
						</div>
<!-- Data Ibu -->
					<div class="card-header">
						<div class="card-title">Data Ibu</div>
					</div>
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6">
										<?php
										echo input_("Nama Lengkap Ibu","text","nama_ibu",$ri['nama_lengkap']);

										 ?>
									</div>
									<div class="col-md-6">
										<?php
										echo input_("Tahun Lahir","text","thn_lahir_ibu",$ri['thn_lahir']);
										 ?>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<?php
										echo combo_("Pendidikan","pendidikan_ibu",$list_pa,"<option value='".$ri['jenjang_pendidikan']."'>".$ri['jenjang_pendidikan']."</option>");
										 ?>
									</div>
									<div class="col-md-6">
										<?php
										echo combo_("Pekerjaan ibu","pekerjaan_ibu",$list_pe,"<option value='".$ri['pekerjaan']."'>".$ri['pekerjaan']."</option>");
								    ?>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<?php
										echo combo_("Penghasilan Bulanan","penghasilan_ibu",$list_ph,"<option value='".$ri['penghasilan']."'>".$ri['penghasilan']."</option>");
								     ?>
									</div>
									<div class="col-md-6">
										<?php
										echo input_("No.Tlp","number","telepon_ibu",$ri['nohp']);
 										 ?>
									</div>
								</div>
							</div>
						</div>
<!-- Data Wali -->
					<div class="card-header">
						<div class="card-title">Data Wali</div>
					</div>
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-6">
											<?php
											echo input_("Nama wali","text","nama_wali",$rw['nama_lengkap']);
											?>
										</div>
										<div class="col-md-6">
											<?php
											echo input_("Tahun Lahir","text","tlahir_wali",$rw['thn_lahir']);
											?>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<?php
											$list_pa = array("Tidak Sekolah","Putus SD","SD Sederajat","SMP Sederajat","SMA sederajat","D1","D2","D3","S1/D4","S2","S3");
											echo combo_("Pendidikan","pendidikan_wali",$list_pa,"<option value='".$rw['jenjang_pendidikan']."'>".$rw['jenjang_pendidikan']."</option>");
											?>
										</div>
										<div class="col-md-6">

											<?php $list_pe = array("Tidak Bekerja","Nelayan","Petani","Peternak","PNS/TNI/POLRI","Karyawan Swasta","Pedagang Kecil","Pedagang Besar","Wiraswasta","Wirausaha","Buruh","Pensiunan","Lain-lain");
											echo combo_("Pekerjaan wali","pekerjaan_wali",$list_pe,"<option value='".$rw['pekerjaan']."'>".$rw['pekerjaan']."</option>");
											?>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<?php
											$list_ph = array("Kurang dari Rp 500.000","500.000 - 999.999","1 Juta - 1.999.999","2 juta - 4.999.999","5 Juta - 20 Juta","Lebih dari 20 Juta");
											echo combo_("Penghasilan Bulanan","penghasilan_wali",$list_ph,"<option value='".$rw['penghasilan']."'>".$rw['penghasilan']."</option>");
											 ?>
										</div>
										<div class="col-md-6">
											<?php
											echo input_("No.Tlp","text","telepon_wali",$rw['nohp']);

											?>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<?php
											echo textarea_("Alamat","alamat_wali",$rw['alamat']);
											?>
										</div>

								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
												<button type="submit" class="btn btn-primary col-md-6 mt-3 mt-sm-0 fw-bold">Perbaruhi</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<!-- Data Sekolah Asal -->
	<section id="3">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Data Sekolah Asal</div>
					</div>
					<div class="card-body">
						<form action="act/update.php" method="post">
							<input type="hidden" name="act" value="sekolah_asal">
						<div class="row">
							<div class="col-md-4">
								<?php
								echo input_("Nama Sekolah Asal","text","nama_sekolah",$rs['nama_sekolah']);
								 ?>
							</div>
							<div class="col-md-4">
									<?php
									echo input_("Tahun Lulus","text","thn_lulus",$rs['thn_lulus']);
									?>
							</div>
							<div class="col-md-4">
								<?php
								echo input_("Nomor Peserta UN","text","nopes_un",$rs['nopes_un']);
 								?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
										<button type="submit" class="btn btn-primary col-md-6 mt-3 mt-sm-0 fw-bold">Perbaruhi</button>
								</div>
							</div>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</section>

<!-- Data Periodik -->
	<section id="4">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Data Periodik</div>
					</div>
					<div class="card-body">
						<form action="act/update.php" method="post">
							<input type="hidden" name="act" value="periodik">
						<div class="row">
							<div class="col-md-4">
								<?php
								echo input_("Tinggi Badan (cm)","number","tinggi_badan",$rp['tinggi_badan']);
								 ?>
							</div>
							<div class="col-md-4">
								<?php
								echo input_("Berat Badan (kg)","number","berat_badan",$rp['berat_badan']);
								 ?>
							</div>
							<div class="col-md-4">
								<?php
								echo input_("Jarak ke Sekolah (km)","number","jarak_sekolah",$rp['jarak_sekolah']);
								 ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
										<button type="submit" class="btn btn-primary col-md-6 mt-3 mt-sm-0 fw-bold">Perbaruhi</button>
								</div>
							</div>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
