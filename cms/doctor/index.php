<?php
session_start();
include("include/config.php");
error_reporting(0);

session_regenerate_id(true);

if(isset($_POST['submit']))
{

	$email =$_POST['username'];
	$pass =$_POST['password'];

	$SQL = "SELECT * FROM doctors WHERE docEmail='$email' AND password='$pass'";

	$ret = mysqli_query($con,$SQL) or die('Query Fail');


$num=mysqli_fetch_array($ret);
if($num>0)
{
	$extra="dashboard.php";
	$_SESSION['dlogin']=$_POST['username'];
	$_SESSION['id']=$num['id'];
	$uip=$_SERVER['REMOTE_ADDR'];
	$status=1;
	$log=mysqli_query($con,"insert into doctorslog(uid,username,userip,status) values('".$_SESSION['id']."','".$_SESSION['dlogin']."','$uip','$status')");
	$host=$_SERVER['HTTP_HOST'];
	$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
	header("location:http://$host$uri/$extra");
	exit();
	}
	else
	{
	$host  = $_SERVER['HTTP_HOST'];
	$_SESSION['dlogin']=$_POST['username'];
	$uip=$_SERVER['REMOTE_ADDR'];
	$status=0;
	mysqli_query($con,"insert into doctorslog(username,userip,status) values('".$_SESSION['dlogin']."','$uip','$status')");
	$_SESSION['errmsg']="Invalid username or password";
	$extra="index.php";
	$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
	header("location:http://$host$uri/$extra");
	exit();
}
}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctor Login</title>
		<?php  include("include/header-links.php"); ?>

	</head>
	<body class="login">
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
				<a href="../../index.php">	<h2> Virtual Clinic | Doctor Login</h2></a>
				</div>

				<div class="box-login">
					<form class="form-login" method="post">
						<fieldset>
							<legend>
								Sign in to your account
							</legend>
							<p>
								Please enter your name and password to log in.<br />
								<span style="color:red;"><?php echo $_SESSION['errmsg']; ?><?php echo $_SESSION['errmsg']="";?></span>
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="username" placeholder="Username">
									<i class="fa fa-user"></i> </span>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control password" name="password" placeholder="Password">
									<i class="fa fa-lock"></i>
									 </span>
									 <a href="forgot-password.php">
									Forgot Password ?
								</a>
							</div>
							<div class="form-actions">
								
								<button type="submit" class="btn btn-primary pull-right" name="submit">
									Login <i class="fa fa-arrow-circle-right"></i>
								</button>

								<div class="new-account">
										Go Back Home
									<a href="../../index.php">
										Home
									</a>
								</div>
							</div>


							
						
						</fieldset>
					</form>

					<div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> VC</span>. <span>All rights reserved</span>
					</div>
			
				</div>

			</div>
		</div>
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
	
		<script src="assets/js/main.js"></script>

		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	
	</body>
</html>