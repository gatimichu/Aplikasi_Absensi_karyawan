
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
    	<div class="page-beranda tile">
		<br>
    		<img src="image/l.png" alt="">
    		<br>
    		<br>
          <div class="col-lg-12">
          	 <div class="row">
          <div class="col-lg-4">
            <div class="bs-component">
              <div class="card mb-3 text-white bg-primary">
                <div class="card-body">
                  <blockquote class="card-blockquote">
                    <p class="text-black"><font face="hobo std" size="5">Perusahaan sukses selalu memiliki ciri, seperti: disiplin, ambisi, kerja keras, dan komitmen.</font></p></p>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bs-component">
				<div class="card mb-3 text-white bg-primary">
                <div class="card-body">
                  <blockquote class="card-blockquote">
                    <p class="text-black"><font face="hobo std" size="5">Kedisiplinan kerja merupakan syarat mutlak bagi berkembangnya perusahaan. </font></p></p>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
		            <div class="col-lg-4">
            <div class="bs-component">
                <div class="card mb-3 text-white bg-primary">
                <div class="card-body">
                  <blockquote class="card-blockquote">
                    <p class="text-black"><font face="hobo std" size="5">Tak ada seorang pun yang mencapai kesuksesannya tanpa melalui Kerja Keras dan ambisi yang besar. </font></p></p>
                  </blockquote>
                </div>
              </div>

            </div>
          </div>

        </div>
            <br>
            <br>
            <br>
		    <div class="bs-component">
              <div class="progress mb-2">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
              </div>
            </div>
			<div class="bs-component">
              <div class="progress mb-2">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
              </div>
            </div>
            <div class="bs-component">
              <div class="progress mb-2">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
              </div>
            </div>
			<br>
			<br>
			<center><p class="text-black"><font face="hobo std" size="5">Happy Work & Good Luck</font></p></p></center>
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
    <script>
      $('.bs-component [data-toggle="popover"]').popover();
      $('.bs-component [data-toggle="tooltip"]').tooltip();
    </script>
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