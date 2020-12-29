<?php
session_start();
include '../libs/conn.php';
switch ($_GET['act']) {
  case 'konfirm_siswa':
    // code...
    if($_SESSION['level']=="admin"){
      mysqli_query($mysqli,"UPDATE ntz_data_siswa SET status='konfirm' WHERE id='".ai($_GET['id'])."'");
      header("location:../dashboard.php?view=data_siswa");
    }else{
      header("location:../dashboard.php");
    }
    break;
    case 'tolak':
      // code...
      if($_SESSION['level']=="admin"){
        mysqli_query($mysqli,"UPDATE ntz_data_siswa SET status='tolak' WHERE id='".ai($_GET['id'])."'");
        header("location:../dashboard.php?view=data_siswa");
      }else{
        header("location:../dashboard.php");
      }
      break;


  default:
    // code...
    break;
}
 ?>
