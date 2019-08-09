 <?php 
 include('ceklogin.php');
 include('koneksi.php'); 

$username = $_SESSION['userid'];
$query_user = mysqli_query ($koneksi,"select * from login_user where username ='$username'");
$data1 = mysqli_fetch_array($query_user);



 ?>



   <aside class="app-sidebar">
      <div class="app-sidebar__user">
	  <center><img src="image/user1.png" height="55%" width="55%" alt="User Image"></center>
        <div class="profile-info">
          <p class="app-sidebar__user-name"><?php echo $_SESSION['userid']?></p>
          <p class="app-sidebar__user-designation"><?php echo $data1['nama'];?></p>
		  <p class="app-sidebar__user-designation">Admin</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="beranda.php"><i class="app-menu__icon fa fa-home"></i><span class="app-menu__label">Beranda</span></a></li>
        <li><a class="app-menu__item" href="data_karyawan.php"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Data Karyawan</span></a></li>
		<li><a class="app-menu__item" href="inputtanggal.php"><i class="app-menu__icon fa fa-address-book-o"></i><span class="app-menu__label">Daftar Hadir</span></a></li>
		<li><a class="app-menu__item" href="riwayat.php"><i class="app-menu__icon fa fa-history"></i><span class="app-menu__label">Riwayat</span></a></li>
		<li><a class="app-menu__item" href="logout.php"><i class="app-menu__icon fa fa-sign-out"></i><span class="app-menu__label">Logout</span></a></li>
      </ul>
    </aside>