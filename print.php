<?php
 include "koneksi.php";
$bulan = $_GET['bulan']	;
$tahun = $_GET['tahun']	;

?>
<html>
<head>
 <title>Print Document</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
 <table border="1" width="90%" style="border-collapse:collapse;" align="center">
 
     <thead>
                <tr>
				 <th>No.</th>
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
			  
			       $no_urut = 0;
				  
				   $query = mysqli_query($koneksi,"select * from tambah_karyawan");
				   if(mysqli_num_rows($query)>0){
				   while ($data = mysqli_fetch_array($query)){
					    $no_urut++;
					   
				 ?>  
                  <tr class="table-success">
				   <td><?php echo $no_urut;?></td>
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
	   <?php ?>
    </table>
    <script>
  window.load = print_d();
  function print_d(){
   window.print("<?php echo base_url('index.php/administrator/print_laporan');?>");
  }
 </script>
</body>
</html>   