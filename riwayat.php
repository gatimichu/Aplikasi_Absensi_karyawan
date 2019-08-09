 
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
        <div class="col-md-12">
          <div class="tile">
            
			<div class="tile-body">
              <form class="row" action='' method='GET'> 
                <div class="form-group col-md-2">
				
                  <label class="control-label">Bulan</label>
										<select class="form-control" name="bulan" required>
											<option value="">bulan</option>
										  	<option value="01">Januari</option>
										  	<option value="02">Februari</option>
										  	<option value="03">Maret</option>
										  	<option value="04">April</option>
										  	<option value="05">Mei</option>
											<option value="06">Juni</option>
											<option value="07">Juli</option>
											<option value="08">Agustus</option>
											<option value="09">September</option>
											<option value="10">Oktober</option>
											<option value="11">November</option>
											<option value="12">Desember</option>
										</select>
									</div>
									
									<div class="form-group col-md-2">
									<label class="control-label">Tahun</label>
									<select class="form-control" name="tahun" required>
					<option selected="selected" value='tahun' >tahun</option>
					<?php
					for($i=2030; $i>=1966; $i-=1){
					echo"<option value='$i'> $i </option>";
					}
					?>
					</select>
                </div>
				 <div class="form-group col-md-4 align-self-end">
                  <button class="btn btn-primary"><i class="fa fa-check-circle"></i>Tampilkan</button>
                </div>
              </form>
            </div>
		<?php if(isset($_GET['bulan'])){
$bulan = $_GET['bulan']	;
$tahun = $_GET['tahun']	;	?>
		
            <h3 class="tile-title">Riwayat</h3>
			<div class= "col-md-4" >
			  <button class="btn btn-info" type="submit" name="hadir"  onClick="print_d()"><i class="fa fa-fw fa-lg fa-check-circle"></i>Cetak</button>
                  </div>
            <table id="example" class="table table-bordered table-responsive">
              <thead>
                <tr>
                  <th>Nama</th>
				  <th>NIP</th>
				  <?php
					for($i=1; $i<=31; $i++){
					echo"<th>". $i ."</th>";
					}
					?>
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
                    <td><?php echo $nip = $data['nip']; ?></td>
					<?php
					for($i=1; $i<=31; $i++){
						if($i<10){
							$tanggal = '0'.$i;
						}else{
							$tanggal = $i;
						}
						$queryhadir = mysqli_query($koneksi,"select * from kehadiran where nip= '$nip' and tanggal='$tahun-$bulan-$tanggal'");
						$ket = mysqli_fetch_array($queryhadir);
						
						echo"<td>". $ket['ket_hadir']."</td>";
					
					}
				   }
				   }
					?>
				 <tr>
				
			  </tbody>
          	</table>
		<?php } ?>

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
    
	 <script>
  function print_d(){
   window.open("print.php?bulan=<?php echo $bulan ?>&tahun=<?php echo $tahun ?>");
  }
 </script>
 
 <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src=" https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script>
	$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );
	</script>
	
	
	
    
  </body>
</html>