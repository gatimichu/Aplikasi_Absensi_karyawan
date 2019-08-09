<!DOCTYPE html>
<html lang="en">
    <?php
  include('include/head.php');

   ?>
   
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
	<header>
   <?php include('include/header.php'); ?>
   </header>
    <!-- Sidebar menu-->
	<?php include('include/sidebar.php');?>
	
    <main class="app-content">
      <div class="page-beranda tile">
      	<div class="form-group">
	 	<form method="GET" action="daftar_hadir.php">
		 <center><h3 class="login-head"></i>Masukan Tanggal Absen</h3></center>
								  <br>
								  <br>
			<label> Tanggal:</label>
                  <div class="col-md-12">
				  
                   <input class="form-control col-md-12" type="date" name="tanggal" placeholder="mm/dd/yy">
				   
				   </div>
				   
					<br>
					

			  <div class= "col-md-4" >
			  <button class="btn btn-info" type="submit" name="hadir"><i class="fa fa-fw fa-lg fa-check-circle"></i>Oke</button>
                  </div>
				  </form>
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