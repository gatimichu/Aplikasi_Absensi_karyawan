<!DOCTYPE html>
<html lang="en">
  <?php
  include('include/head.php');
  include('koneksi.php');
  include ('ceklogin.php');
	$date = $_GET['tanggal'];
	
   if (isset($_POST['hadir'])){
			$nip =  $_POST['nip'];
			$ket_hadir = $_POST['hadir'];
			$date = $_POST['tanggal'];
			$query1 = mysqli_query($koneksi,"select * from kehadiran where tanggal = '$date' and nip = '$nip'");
			if(mysqli_num_rows($query1)>0){
				$insert = mysqli_query($koneksi,"UPDATE `kehadiran` set ket_hadir = '$ket_hadir' where tanggal = '$date' and nip = '$nip'");
			}else{
				$insert = mysqli_query($koneksi,"INSERT INTO `kehadiran` (`tanggal`, `nip`, `ket_hadir`) VALUES ('$date', '$nip', '$ket_hadir')");
			}
			if($insert){
				header("Location:daftar_hadir.php?tanggal=".$date."");
				exit;
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
			
			<label> Tanggal: <?php echo $date ;?></label>
				   <br>
				
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr class="table-success">
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Jabatan</th>
					<th>Ket</th>
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
                   <td><?php echo  $data['nama'];?></td>
                     <td><?php echo $nip = $data['nip']; ?></td>
                     <td><?php echo $data['jabatan']; ?></td>
					 <td><?php $query1 = mysqli_query($koneksi,"select * from kehadiran where nip = '$nip' and tanggal = '$date'"); 
					 $data1=mysqli_fetch_array($query1);
					 echo $data1['ket_hadir']?></td>
                     <td><center>
					 <form method ="POST">
					 <input type="hidden" name="tanggal" value="<?php echo $date; ?>">
					 <input type="hidden" name="nip" value="<?php echo $data['nip']; ?>">
					 <button class="btn btn-success"  type="submit" name="hadir" value = "H">Hadir</button></a>
					 <button class="btn btn-info" type="submit" name="hadir" value = "S">Sakit</button></a>
					 <button class="btn btn-warning" type="submit" name="hadir" value = "I">Izin</button></a>
					 <button class="btn btn-danger btn-xs" type="submit" name="hadir" value = "A">Alpha</button></a>					
					 </form>
					 </center></td>
                  </tr>
				  
						<?php
				}
					}
   
				?>
						
                </tbody>
              </table>
            </div>
          </div>
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