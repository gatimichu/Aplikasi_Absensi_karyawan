<!DOCTYPE html>
<html lang="en">
  <?php include('include/head.php');
   if (isset($_POST['hadir'])){
			$nama = $_POST['nama'];
			$nip = $_POST['nip'];
			$jabatan = $_POST['jabatan'];
			$query1 = mysqli_query($koneksi,"INSERT into `kehadiran` (`nip`,`nama`,`jabatan`) VALUES ('$nip','$nama','$jabatan')");
			if($query1){
				
				echo '<script>alert("berhasil.");window.location.assign("keterangan_hadir.php");</script>';
				
			}
			else{
				echo '<script>alert("Gagal!! Nip Sudah Ada.");window.location.assign("daftar_hadir.php");</script>';
			}
			}
			
			
			?>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
	<header>
   <?php include('include/header.php'); ?>
   </header>
    <!-- Sidebar menu-->
	<?php include('include/sidebar.php');?>
	
<main class="app-content">
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>

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
                  <tr>
                    <td><?php echo $data['nama'];?></td>
                    <td><?php echo $data['nip']; ?></td>
                    <td><?php echo $data['jabatan']; ?></td>
                    <td><center>
					<form method="POST">
					
				<button class="btn btn-primary" type="submit" name="hadir">Hadir</button></a>
				<button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#keterangan">Tidak Hadir</button>
				<!-- modal static -->
			<div class="modal fade" id="keterangan" tabindex="-1" role="dialog" aria-labelledby="keteranganLabel" aria-hidden="true"
			 data-backdrop="static">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="keteranganLabel">Keterangan</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body" style="text-align: left;">
						<div class="animated-radio-button">
							<label>
								<input type="radio"><span class="label-text">Sakit</span>
							</label>
						 </div>
						 <div class="animated-radio-button">
							<label>
								<input type="radio"><span class="label-text">Izin</span>
							</label>
							</div>
							<div class="animated-radio-button">
							<label>
								<input type="radio"><span class="label-text">Tanpa Keterangan</span>
							</label>
						
						</div>
				
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-primary">Confirm</button>
						</div>
					</div>
				</div>
			</div>
			<!-- end modal static -->
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
	<div style="text-align: right;">Tanggal: <strong class="weight-600"><?php echo date('d-m-Y');?></strong></div>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>