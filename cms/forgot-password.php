<?php
session_start();
error_reporting(0);
include("include/config.php");
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Pateint  Password Recovery</title>
		
		<?php include('include/header-links.php'); ?>
	</head>
	<body class="login">
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
				<a href="../index.php"><h2> VC | Patient Password Recovery</h2></a>
				</div>

				<div class="box-login">
					<form class="form-login" method="post">

						<?php 
							if(isset($_POST['submit'])){
								$name=$_POST['fullname'];
								$email=$_POST['email'];
								$query=mysqli_query($con,"select id from  users where fullName='$name' and email='$email'");
								$row=mysqli_num_rows($query);
								if($row>0){
								$_SESSION['name']=$name;
								$_SESSION['email']=$email;
								header('location:reset-password.php');
								} else {
								echo "<center><b><div  style='font-size: 20px;'>
										Invalid details. Please try with valid details							
									</div></b></center><br><br>";
								}
							}
						 ?>
						 
						<fieldset>
							<legend>
								Patient Password Recovery
							</legend>
							<p>
								Please enter your Email and password to recover your password.<br />
					
							</p>

							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="text" class="form-control" required="required" name="fullname" placeholder="Registred Full Name">
									<i class="fa fa-lock"></i>
									 </span>
							</div>

							<div class="form-group">
								<span class="input-icon">
									<input type="email" required="required" class="form-control" name="email" placeholder="Registred Email">
									<i class="fa fa-user"></i> </span>
							</div>

							<div class="form-actions">
								
								<button type="submit" class="btn btn-primary pull-right" name="submit">
									Reset <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
							<div class="new-account">
								Already have an account? 
								<a href="user-login.php">
									Log-in
								</a>
							</div>
						</fieldset>
					</form>

					<div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> VC</span>. <span>All rights reserved</span>
					</div>		
				</div>
			</div>
		</div>

		<?php include('include/footer-links.php');?>
	
	</body>
</html>