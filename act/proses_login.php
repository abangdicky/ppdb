<?php
session_start();
include '../libs/conn.php';
if($_POST['user']=='admin'){
	$username = ai($_POST['username']);
	$password = md5(ai($_POST['password']));
	$q = mysqli_query($mysqli,"SELECT * FROM ntz_data_user WHERE username='".$username."' AND password='".$password."'");
	$h = mysqli_num_rows($q);
	if($h>0){
		$r = mysqli_fetch_array($q);
		$_SESSION['id'] = $r['id'];
		$_SESSION['level'] = $r['level'];
		$_SESSION['username'] = $r['username'];
		$_SESSION['nama_lengkap'] = $r['nama_lengkap'];
		mysqli_query($mysqli,"UPDATE ntz_data_user SET log=now() WHERE username='".$username."'");
		header("location:../dashboard.php");
	}else{
		header("location:../admin.php?error=1");
	}

}else if($_POST['user']=='siswa'){
	$NISN = ai($_POST['NISN']);
	$q = mysqli_query($mysqli,"SELECT * FROM ntz_data_siswa WHERE NISN='".$NISN."'");
	$h = mysqli_num_rows($q);
	if($h>0){
		$r = mysqli_fetch_array($q);
		if($r[status]=='tolak'){
			header("location:../login.php?error=tolak");
		}else if($r[status]=='baru'){
			header("location:../login.php?error=baru");
		}else{

		$_SESSION['id'] = $r['id'];
		$_SESSION['level'] = "siswa";
		$_SESSION['username'] = $r['NISN'];
		$_SESSION['nama_lengkap'] = $r['nama_lengkap'];
		mysqli_query($mysqli,"UPDATE ntz_data_siswa SET log=now() WHERE NISN='".$NISN."'");
		header("location:../dashboard.php");

		}
	}else{
		header("location:../login.php?error=1");

	}
}else{
	header("location:../login.php?error=1");
}
?>
