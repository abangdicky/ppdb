<?php
session_start();
include '../libs/conn.php';
$NISN = ai($_SESSION['username']);
switch ($_POST['act']) {
  case 'data_diri':
    // code...
    $nama = ai($_POST['nama_lengkap']);
    $jk = ai($_POST['jenis_kelamin']);
    $tlahir = ai($_POST['tlahir']);
    $tgllahir = ai($_POST['tgllahir']);
    $alamat = ai($_POST['alamat']);
    $ttinggal = ai($_POST['ttinggal']);
    $agama = ai($_POST['agama']);
    $transport = ai($_POST['transport']);
    $ake = ai($_POST['ake']);
    $nohp = ai($_POST['nohp']);
    $email = ai($_POST['email']);
    mysqli_query($mysqli,"UPDATE ntz_data_siswa SET
    nama_lengkap='".$nama."',
      jk='".$jk."',
      tempat_lahir='".$tlahir."',
      tgl_lahir='".$tgllahir."',
      alamat='".$alamat."',
      jenis_tinggal='".$ttinggal."',
      agama='".$agama."',
      alat_transportasi='".$transport."',
      anak_ke='".$ake."',
      hp='".$nohp."',
      email='".$email."'

       WHERE NISN='".$NISN."' ");
    header("location:../dashboard.php?view=daftar_ulang#1");
    break;
  case 'data_ortu':
    // code...
    $nama_ayah = ai($_POST['nama_ayah']);
    $tlahir = ai($_POST['tlahir']);
    $pendidikan_ayah = ai($_POST['pendidikan_ayah']);
    $pekerjaan_ayah=ai($_POST['pekerjaan_ayah']);
    $penghasilan_ayah=ai($_POST['penghasilan_ayah']);
    $telepon_ayah=ai($_POST['telepon_ayah']);

    $nama_ibu = ai($_POST['nama_ibu']);
    $thn_lahir_ibu = ai($_POST['thn_lahir_ibu']);
    $pendidikan_ibu = ai($_POST['pendidikan_ibu']);
    $pekerjaan_ibu = ai($_POST['pekerjaan_ibu']);
    $penghasilan_ibu = ai($_POST['penghasilan_ibu']);
    $telepon_ibu = ai($_POST['telepon_ibu']);

    $nama_wali = ai($_POST['nama_wali']);
    $tlahir_wali = ai($_POST['tlahir_wali']);
    $pendidikan_wali = ai($_POST['pendidikan_wali']);
    $pekerjaan_wali = ai($_POST['pekerjaan_wali']);
    $penghasilan_wali = ai($_POST['penghasilan_wali']);
    $alamat_wali=ai($_POST['alamat_wali']);
    $telepon_wali=ai($_POST['telepon_wali']);

    mysqli_query($mysqli,"UPDATE ntz_data_siswa_ayah SET
    nama_lengkap='".$nama_ayah."',
    thn_lahir='".$tlahir."',
    jenjang_pendidikan='".$pendidikan_ayah."',
    pekerjaan='".$pekerjaan_ayah."',
    penghasilan='".$penghasilan_ayah."',
    nohp='".$telepon_ayah."' WHERE NISN='".$NISN."'");
    mysqli_query($mysqli,"UPDATE ntz_data_siswa_ibu SET
    nama_lengkap='".$nama_ibu."',
    thn_lahir='".$thn_lahir_ibu."',
    jenjang_pendidikan='".$pendidikan_ibu."',
    pekerjaan='".$pekerjaan_ibu."',
    penghasilan='".$penghasilan_ibu."',
    nohp='".$telepon_ibu."' WHERE NISN='".$NISN."'");
    mysqli_query($mysqli,"UPDATE ntz_data_siswa_wali SET
    nama_lengkap='".$nama_wali."',
    thn_lahir='".$tlahir_wali."',
    jenjang_pendidikan='".$pendidikan_wali."',
    pekerjaan='".$pekerjaan_wali."',
    penghasilan='".$penghasilan_wali."',
    nohp='".$telepon_wali."',
    alamat='".$alamat_wali."' WHERE NISN='".$NISN."'");

    header("location:../dashboard.php?view=daftar_ulang#1");

    break;
  case 'sekolah_asal':
    // code...
    $nama_sekolah=ai($_POST['nama_sekolah']);
    $thn_lulus=ai($_POST['thn_lulus']);
    $nopes_un=ai($_POST['nopes_un']);
    mysqli_query($mysqli,"UPDATE ntz_data_smp SET nama_sekolah='".$nama_sekolah."',
    thn_lulus='".$thn_lulus."',
    nopes_un='".$nopes_un."' WHERE NISN='".$NISN."'");
    header("location:../dashboard.php?view=daftar_ulang#1");

    break;
  case 'periodik':
    // code...
    $tinggi_badan = ai($_POST['tinggi_badan']);
    $berat_badan = ai($_POST['berat_badan']);
    $jarak_sekolah = ai($_POST['jarak_sekolah']);
    mysqli_query($mysqli,"UPDATE ntz_data_periodik SET tinggi_badan='".$tinggi_badan."',
    berat_badan='".$berat_badan."',jarak_sekolah='".$jarak_sekolah."' WHERE NISN='".$NISN."'");

    header("location:../dashboard.php?view=daftar_ulang#1");

    break;
  
  default:
    // code...
    break;
}
?>
