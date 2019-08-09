	<?php
	include('koneksi.php');

			if (isset($_POST['login'])){
			$username = $_POST['username'];
			$password =$_POST['password'];
			$query = mysqli_query($koneksi,"select * from login where username='$username' and password='$password'");
				if(mysqli_num_rows($query)>0){
					session_start();
					$_SESSION['userid'] = $username;
					$_SESSION['sid_user'] = session_id();
					$_SESSION['login_type'] = "user";
					
					echo '<script>window.location.assign("beranda.php");</script>';
					
				}
				else{
					echo '<script>alert("Username/Password Yang anda masukan Salah.");</script>';
				}
			}

		?>
		
<!DOCTYPE html>
<html>
  <head>
    <?php include('include/head.php'); ?>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="login-box">
        <form class="login-form" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>LOGIN ADMIN</h3>
          <div class="form-group">
            <label class="control-label">Username</label>
            <input class="form-control" type="text" name="username" placeholder="Username" required>
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <input class="form-control" type="password" name="password" placeholder="Password" required>
          </div>
         
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" name="login" type="submit" ><i class="fa fa-sign-in fa-lg fa-fw"></i>LOGIN</button>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>