 <?php
	include('koneksi.php');
	include ('ceklogin.php');
	$nip = $_GET['nip'];
   $query = mysqli_query($koneksi,"select * from tambah_karyawan where nip = '$nip'");
	   $data=mysqli_fetch_array($query);

 if (isset($_POST['edit'])){
            $nip = $_POST['nip'];
			$nama = $_POST['nama'];
			$jabatan = $_POST['jabatan'];
			$agama = $_POST['agama'];
			$alamat = $_POST['alamat'];
			$no_tlp = $_POST['no_tlp'];
$query2 = mysqli_query($koneksi, "UPDATE `tambah_karyawan` SET `nip` = '$nip' , `nama` = '$nama' , `jabatan` = '$jabatan' , `agama` = '$agama' , `alamat` = '$alamat' , `no_tlp` = '$no_tlp' WHERE `tambah_karyawan`.`nip` ='$nip'"); 
if($query2){
      
      echo '<script>alert("berhasil.");window.location.assign("data_karyawan.php");</script>';
      
}
else{
      echo '<script>alert("gagal.");window.location.assign("data_karyawan.php");</script>';
}
}
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
<div class="page tile">
       <div class="form-group">
	   <center><p><h2>Detail Karyawan</h2></p></center>
          	<form method="post">
			   <table class="table table-striped">
					<tr>
						<td>NIP</td>
								<td>
									<div class="col-md-4">
									<input type ="text" name="nip" class ="form-control" value="<?php echo $data['nip'];?>" readonly>
									</div>
								</td>
					</tr>
					<tr>
						<td>Nama</td>
								<td>
									<div class="col-md-6">
									<input type ="text" name="nama" class ="form-control" value="<?php echo $data['nama'];?>" >
									</div>
								</td>
					</tr>
					<tr>
						<td>Jabatan</td>
								<td>
									<div class="col-md-6">
									<input type ="text" name="jabatan" class ="form-control" value="<?php echo $data['jabatan'];?>">
									</div>
								</td>
					</tr>
					<tr>
						<td>Agama</td>
								<td>
									 <div class="col-md-4">
										<select class="form-control" name="agama">
											<option value=""><?php echo $data['agama'];?></option>
										  	<option value="islam">Islam</option>
										  	<option value="kristen">Kristen</option>
										  	<option value="katolik">Katolik</option>
										  	<option value="hindu">Hindu</option>
										  	<option value="budha">Budha</option>
										</select>
									 </div>
								</td>
					</tr>
					<tr>
						<td>Alamat</td>
								<td>
									<div class="col-md-6">
									<input type ="text" name="alamat" class ="form-control" value="<?php echo $data['alamat'];?>" >
									</div>
								</td>
					</tr>
					<tr>
						<td>No.Tlp</td>
								<td>
									<div class="col-md-6">
									<input type ="text" name="no_tlp" class ="form-control" value="<?php echo $data['no_tlp'];?>" >
									</div>
								</td>
					</tr>
				</table>
				               <a href="data_karyawan.php"><button type="button"class="btn btn-small btn-info"><span class="fa fa-chevron-circle-left"></span>Kembali</button></a>
							   <button type="submit" class="btn btn-warning btn-xs" name="edit"><span class="fa fa-edit fa-fw"></span>Edit</button></a>
				
				</form>
 
 </div>
    </main>
    <!-- Essential javascripts for application to work-->
     <?php include('include/script.php'); ?>
  </body>
</html>