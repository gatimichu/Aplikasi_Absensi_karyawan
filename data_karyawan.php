  <?php
	include('koneksi.php');
	include ('ceklogin.php');
	
            
			if (isset($_POST['simpan'])){
			$nip = $_POST['nip'];
			$nama = $_POST['nama'];
			$jabatan = $_POST['jabatan'];
			$agama = $_POST['agama'];
			$alamat = $_POST['alamat'];
			$no_tlp = $_POST['no_tlp'];
			$no_urut++;
			$query = mysqli_query($koneksi,"INSERT into `tambah_karyawan` (`nip`,`nama`,`jabatan`,`agama`,`alamat`,`no_tlp`) VALUES ('$nip','$nama','$jabatan','$agama','$alamat','$no_tlp')");
			if($query){
				
				echo '<script>alert("berhasil.");window.location.assign("data_karyawan.php");</script>';
				
			}
			else{
				echo '<script>alert("Gagal!! Nip Sudah Ada.");window.location.assign("data_karyawan.php");</script>';
			}
			}

     if (isset($_POST['hapus'])){
		$nip = $_POST['nip'];
		$query1 = mysqli_query($koneksi, "DELETE from tambah_karyawan where nip ='$nip'");
	if($query1){
				
				echo '<script>alert("berhasil.");window.location.assign("data_karyawan.php");</script>';
				
			}else{
				echo '<script>alert("Gagal Menghapus.");window.location.assign("data_karyawan.php");</script>';
			
			
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
	   <div class="bs-component">
              <button  class="btn btn-primary" data-toggle="modal" data-target="#mediumModal" type="button"><span class="fa fa-plus fa-fw"></span>Tambah Karyawan</button>
			    <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Input Data Karyawan</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
				        </div>
          <div class="form-group">
          	<form method="post">
			   <table class="table table-striped">
					<tr>
						<td>NIP</td>
								<td>
									<div class="col-md-4">
									<input type ="text" id="nama_barang" name="nip" class ="form-control" value="" required>
									</div>
								</td>
					</tr>
					<tr>
						<td>Nama</td>
								<td>
									<div class="col-md-6">
									<input type ="text" id="nama_barang" name="nama" class ="form-control" value="" required>
									</div>
								</td>
					</tr>
					<tr>
						<td>Jabatan</td>
								<td>
									<div class="col-md-6">
									<input type ="text" id="nama_barang" name="jabatan" class ="form-control" value="" required>
									</div>
								</td>
					</tr>
					<tr>
						<td>Agama</td>
								<td>
									 <div class="col-md-4">
										<select class="form-control" name="agama" id="id_jenis" required>
											<option value="">--Pilih--</option>
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
									<input type ="text" id="nama_barang" name="alamat" class ="form-control" value="" required>
									</div>
								</td>
					</tr>
					<tr>
						<td>No.Tlp</td>
								<td>
									<div class="col-md-6">
									<input type ="text" id="nama_barang" name="no_tlp" class ="form-control" value="" required>
									</div>
								</td>
					</tr>
				</table>
				<button class="btn btn-info" type="submit" name="simpan"><i class="fa fa-save"></i>Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
							
						
				</form>
		   </div>
				  </div>
				</div>
		       </div>
	
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr class="table-success">

                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Jabatan</th>
                    <th><center>Aksi</center></th>
                  </tr>
                </thead>
                <tbody>
			 <?php
   $query = mysqli_query($koneksi,"select * from tambah_karyawan");
   if(mysqli_num_rows($query)>0){
while ($data = mysqli_fetch_array($query)){
 ?>  
                  <tr class="table-success">
                    <td><?php echo $data['nama'];?></td>
                    <td><?php echo $data['nip']; ?></td>
                    <td><?php echo $data['jabatan']; ?></td>
                    <td><center>
					<form method="POST">
					
				<a href="edit_karyawan.php?nip=<?php echo $data['nip']; ?>"><button class="btn btn-warning btn-xs" type="button"><span class="fa fa-edit fa-fw"></span>Edit</button></a>
                <a href="detail.php?nip=<?php echo $data['nip']; ?>"><button class="btn btn-info btn-xs" type="button"><span class="fa fa-search fa-fw"></span>Detail</button></a>
	            <input type="text" name="nip" value="<?php echo $data['nip']; ?>">
				<button class="btn btn-danger btn-xs" type="submit" name="hapus"><span class="fa fa-trash fa-fw"></span>Hapus</button>
				</form>
				<?php
				}
					}
   
				?>
				  </div>
				</div>
		       </div>
			   </div>
				</center>
			  </td>
		 </tr>
		 </tbody>
				  </div>
				</div>
    </main>
	

	 <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>

    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/bootstrap-notify.min.js"></script>
    <script type="text/javascript" src="js/plugins/sweetalert.min.js"></script>
    <script type="text/javascript">
      $('#demoNotify').click(function(){
      	$.notify({
      		title: "Update Complete : ",
      		message: "Something cool is just updated!",
      		icon: 'fa fa-check' 
      	},{
      		type: "info"
      	});
      });
      $('#demoSwal').click(function(){
      	swal({
      		title: "Are you sure?",
      		text: "You will not be able to recover this imaginary file!",
      		type: "warning",
      		showCancelButton: true,
      		confirmButtonText: "Yes, delete it!",
      		cancelButtonText: "No, cancel plx!",
      		closeOnConfirm: false,
      		closeOnCancel: false
      	}, function(isConfirm) {
      		if (isConfirm) {
      			swal("Deleted!", "Your imaginary file has been deleted.", "success");
      		} else {
      			swal("Cancelled", "Your imaginary file is safe :)", "error");
      		}
      	});
      });
    </script>
  </body>
</html>