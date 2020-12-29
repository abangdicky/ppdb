<?php
$q = mysqli_query($mysqli,"SELECT * FROM ntz_data_siswa");

 ?>
<div class="page-inner">
	<div class="page-header">
		<h4 class="page-title">Data Siswa</h4>
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
				<a href="#">Master Data</a>
			</li>
			<li class="separator">
				<i class="flaticon-right-arrow"></i>
			</li>
			<li class="nav-item">
				<a href="#">Data Calon Siswa</a>
			</li>
		</ul>
	</div>
  <div class="row">
		<div class="col-md-12">
      <table id="file_export" class="table table-striped table-bordered display dataTable" role="grid" aria-describedby="file_export_info" style="font-size: 10px;">
          <thead>
              <tr role="row">
                  <th class="sorting" tabindex="0" aria-controls="file_export" style="width: 5px !important;">No</th>
                  <th class="sorting" tabindex="0" aria-controls="file_export" style="width: 80px;">Nama Lengkap </th>
                  <th class="sorting" tabindex="0" aria-controls="file_export" style="width: 30px;">NISN</th>
                  <th class="sorting" tabindex="0" aria-controls="file_export" style="width: 35px;">Jenis Kelamin</th>
                  <th class="sorting" tabindex="0" aria-controls="file_export" style="width: 35px;">Tanggal Lahir</th>
                  <th class="sorting" tabindex="0" aria-controls="file_export" style="width: 50px;">Alamat</th>
                  <th class="sorting" tabindex="0" aria-controls="file_export" style="width: 30px;">Status</th>
                  <th class="sorting" tabindex="0" aria-controls="file_export" style="width: 45px;">Aksi</th>

              </tr>
          </thead>
          <tbody>
              <?php
                  $no =1 ;
                  while($row = mysqli_fetch_array($q)){
                    if($row['jk']=="P"){
                      $jk = "Perempuan";
                    }else{
                      $jk = "Laki-Laki";
                    }
                      echo '<tr role="row" class="odd">
                          <td>'.$no++.'</td>
                          <td>'.$row['nama_lengkap'].'</td>
                          <td>'.$row['NISN'].'</td>
                          <td>'.$jk.'</td>
                          <td>'.$row['tgl_lahir'].'</td>
                          <td>'.$row['alamat'].'</td>
                          <td>'.$row['status'].'</td>
                          <td><div class="btn-group" style="font-size:11px !important; padding:3px !important;">
      <a href="act/update_status.php?act=konfirm_siswa&id='.$row['id'].'" class="btn btn-info"><i class="fontello-pencil"></i>+</a>
      <a href="act/update_status.php?id='.$row['id'].'&act=tolak" class="btn btn-danger"><i class="fontello-trash-2"></i>x</a>
      </div></td>
                      </tr>';

              }
              ?>
          </tbody>

      </table>
    </div>
  </div>
</div>
<script src="assets/datables/jquery.min.js.download"></script>
<script src="assets/datables/datatables.min.js.download"></script>
<script src="assets/datables/dataTables.buttons.min.js.download"></script>
<script src="assets/datables/buttons.flash.min.js.download"></script>
<script src="assets/datables/jszip.min.js.download"></script>
<script src="assets/datables/pdfmake.min.js.download"></script>
<script src="assets/datables/vfs_fonts.js.download"></script>
<script src="assets/datables/buttons.html5.min.js.download"></script>
<script src="assets/datables/buttons.print.min.js.download"></script>
<script src="assets/datables/datatable-advanced.init.js.download"></script>
