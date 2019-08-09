<?php
	include('koneksi.php');
	include ('ceklogin.php');
	$nip = $_GET['nip'];
   $query = mysqli_query($koneksi,"select * from tambah_karyawan where nip ='$nip'");
	   $data=mysqli_fetch_array($query);
 ?>  
<!DOCTYPE html>
<html lang="en">
  <?php include('include/head.php'); ?>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
	<header>
   <?php include('include/header.php'); ?>
   </header>
    <!-- Sidebar menu-->
	<?php include('include/sidebar.php');?>

<main class="app-content">
<div class="page-error tile">
       <div class="form-group">
	   <center><p><h2>Detail Karyawan</h2></p></center>
          	<form method="post">
			   <table class="table table-striped">
					<tr>
						<td>NIP</td>
								<td>
									<div class="col-md-4">
									<input type ="text" name="nip" class ="form-control" placeholder="<?php echo $data['nip'];?>" readonly>
									</div>
								</td>
					</tr>
					<tr>
						<td>Nama</td>
								<td>
									<div class="col-md-6">
									<input type ="text" name="nama" class ="form-control" placeholder="<?php echo $data['nama'];?>" readonly>
									</div>
								</td>
					</tr>
					<tr>
						<td>Jabatan</td>
								<td>
									<div class="col-md-6">
									<input type ="text" name="jabatan" class ="form-control" placeholder="<?php echo $data['jabatan'];?>"readonly>
									</div>
								</td>
					</tr>
					<tr>
						<td>Agama</td>
								<td>
									<div class="col-md-3">
									<input type ="text" name="agama" class ="form-control" placeholder="<?php echo $data['agama'];?>" readonly>
									</div>
								</td>
					</tr>
					<tr>
						<td>Alamat</td>
								<td>
									<div class="col-md-6">
									<input type ="text" name="alamat" class ="form-control" placeholder="<?php echo $data['alamat'];?>" readonly>
									</div>
								</td>
					</tr>
					<tr>
						<td>No.Tlp</td>
								<td>
									<div class="col-md-6">
									<input type ="text" name="no_tlp" class ="form-control" placeholder="<?php echo $data['no_tlp'];?>" readonly>
									</div>
								</td>
					</tr>
				</table>
               <a href="data_karyawan.php"> <button type="button"class="btn btn-small btn-info"><span class="fa fa-chevron-circle-left"></span>Kembali</button></a>
				
				</form>
  
 </div>
    </main>
    <!-- Essential javascripts for application to work-->
     <?php include('include/script.php'); ?>
  </body>
</html>