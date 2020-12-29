<?php
if($_SESSION['level']=="siswa"){
	echo '<li class="nav-section">
			<span class="sidebar-mini-icon">
				<i class="fa fa-ellipsis-h"></i>
			</span>
			<h4 class="text-section">Menu Utama</h4>
		</li>
		<li class="nav-item">
			<a data-toggle="collapse" href="#base">
				<i class="flaticon-users"></i>
				<p>Daftar Ulang</p>
				<span class="caret"></span>
			</a>
			<div class="collapse" id="base">
				<ul class="nav nav-collapse">
					<li>
						<a href="dashboard.php?view=daftar_ulang#1">
							<span class="sub-item">Data Diri</span>
						</a>
					</li>
					<li>
						<a href="dashboard.php?view=daftar_ulang#2">
							<span class="sub-item">Data Orang Tua</span>
						</a>
					</li>
					<li>
						<a href="dashboard.php?view=daftar_ulang#3">
							<span class="sub-item">Data Sekolah Asal</span>
						</a>
					</li>
					<li>
						<a href="dashboard.php?view=daftar_ulang#4">
							<span class="sub-item">Data Periodik</span>
						</a>
					</li>
				</ul>
			</div>
		</li>
		<li class="nav-item">
			<a data-toggle="collapse" href="#base2">
				<i class="fas fa-file-signature"></i>
				<p>Data Berkas</p>
				<span class="caret"></span>
			</a>
			<div class="collapse" id="base2">
				<ul class="nav nav-collapse">
					<li>
						<a href="dashboard.php?view=databerkas#1">
							<span class="sub-item">KIP dan SKTM</span>
						</a>
					</li>
					<li>
						<a href="dashboard.php?view=dokumen">
							<span class="sub-item">KK, Akta dan SKHUS</span>
						</a>
					</li>
				</ul>
			</div>
		</li>
		<li class="nav-item">
			<a href="dashboard.php?view=buktidu">
				<i class="far fa-calendar-alt"></i>
				<p>Upload Bukti Pembayaran</p>
				<span class="badge badge-warning">!</span>
			</a>
		</li>
		<li class="nav-item">
			<a href="dashboard.php?view=cetak">
				<i class="far fa-calendar-alt"></i>
				<p>Cetak Form Daftar Ulang</p>
				<span class="badge badge-warning">!</span>
			</a>
		</li>';
}else{
	echo '<li class="nav-section">
			<span class="sidebar-mini-icon">
				<i class="fa fa-ellipsis-h"></i>
			</span>
			<h4 class="text-section">Menu Utama</h4>
		</li>
		<li class="nav-item">
			<a data-toggle="collapse" href="#base">
				<i class="flaticon-users"></i>
				<p>Master Data</p>
				<span class="caret"></span>
			</a>
			<div class="collapse" id="base">
				<ul class="nav nav-collapse">
					<li>
						<a href="dashboard.php?view=data_siswa">
							<span class="sub-item">Data Calon Siswa</span>
						</a>
					</li>
				</ul>
			</div>
		</li>';
}
?>
