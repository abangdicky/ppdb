<?php
session_start();
include '../libs/conn.php';
switch ($_GET['act']) {
	case 'daftar':
		# code...
		$nama = ai($_POST['nama']);
		$JK = ai($_POST['JK']);
		$nisn = ai($_POST['nisn']);
		$tmplahir = ai($_POST['tmplahir']);
		$tgllahir = ai($_POST['tgllahir']);
		$alamat = ai($_POST['alamat']);
		$nohp = ai($_POST['nohp']);
		$asalsmp = ai($_POST['asalsmp']);
		$namaayah = ai($_POST['namaayah']);
		$nohp1 = ai($_POST['nohp1']);
		$namaibu = ai($_POST['namaibu']);
		$nohp2 = ai($_POST['nohp2']);
		$prog = ai($_POST['prog']);
		$q = mysqli_query($mysqli,"SELECT NISN FROM ntz_data_siswa WHERE NISN='".$nisn."'");
		$h = mysqli_num_rows($q);
		if($h>0){
			$_SESSION['status_error'] = "NISN";
			header("location:../registrasi.php");
		}else{
			mysqli_query($mysqli,"INSERT INTO ntz_data_siswa SET
				nama_lengkap='".$nama."',
				jk='".$JK."',
				NISN='".$nisn."',
				tempat_lahir='".$tmplahir."',
				tgl_lahir='".$tgllahir."',
				alamat='".$alamat."',
				hp='".$nohp."',
				asal_smp='".$asalsmp."'
				");
			mysqli_query($mysqli,"INSERT INTO ntz_data_siswa_ayah SET
				NISN='".$nisn."',
				nama_lengkap='".$namaayah."',
				nohp='".$nohp1."'
				");
			mysqli_query($mysqli,"INSERT INTO ntz_data_siswa_ibu SET
				NISN='".$nisn."',
				nama_lengkap='".$namaibu."',
				nohp='".$nohp2."'
				");
			mysqli_query($mysqli,"INSERT INTO ntz_data_siswa_wali SET
				NISN='".$nisn."',
				nama_lengkap='".$namaayah."',
				nohp='".$nohp1."'
				");
			mysqli_query($mysqli,"INSERT INTO ntz_data_periodik SET NISN='".$nisn."'");
			mysqli_query($mysqli,"INSERT INTO ntz_data_smp SET NISN='".$nisn."'");
			$_SESSION['status_error'] = "0";
			header("location:../registrasi.php");
		}
		break;

	default:
		# code...
		break;
}
?>
