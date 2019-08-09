<?php 
error_reporting(0);
session_start();
if($_SESSION['sid_user']==session_id())
	{
		if($_SESSION['login_type']=="user")	{
			
		}else{
				echo '<script>alert("Access Denied");window.location.assign("index.php");</script>';
				
			}
	}
	else{
		        echo '<script>alert("Access Denied");window.location.assign("index.php");</script>';
		}

?>