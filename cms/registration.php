<?php
include_once('include/config.php');
if(isset($_POST['submit']))
	{
		$fname=$_POST['full_name'];
		$address=$_POST['address'];
		$cont=$_POST['contact'];
		$gender=$_POST['gender'];


		$email=$_POST['email'];
		$password=$_POST['password'];

		$SQL = "INSERT INTO users(fullname,address,contact,gender,email,password) values('$fname','$address','$cont','$gender','$email','$password')";

		$query = mysqli_query($con,$SQL);

		if($query)
		{
			echo "<center><b><div  style='font-size: 20px;'>
						Successfully Registered. You can login now									
				  </div></b></center><br><br>";
			header('location:user-login.php');
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<title>User Registration</title>
		
		<?php include('include/header-links.php'); ?>
		
		<script type="text/javascript">
				function valid()
				{
				 if(document.registration.password.value!= document.registration.password_again.value)
				{
				alert("Password and Confirm Password Field do not match  !!");
				document.registration.password_again.focus();
				return false;
				}
				return true;
				}
	</script>
		

	</head>

	<body class="login">
		<!-- start: REGISTRATION -->
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
				<a href="../index.php"><h2>Virtual Clinic | Patient Registration</h2></a>
				</div>
				<div class="box-register">
					<form name="registration" id="registration"  method="post" onSubmit="return valid();">
						<fieldset>
							<legend>
								Sign Up
							</legend>
							<p>
								Enter your personal details below:
							</p>
							<div class="form-group">
								<input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="address" placeholder="Address" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="contact" placeholder="Contact" required>
							</div>
							<div class="form-group">
								<label class="block">
									Gender
								</label>
								<div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="gender" value="female" required="required">
									<label for="rg-female">
										Female
									</label>
									<input type="radio" id="rg-male" name="gender" value="male" required="required">
									<label for="rg-male">
										Male
									</label>
								</div>
							</div>
							<p>
								Enter your account details below:
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="email" class="form-control" name="email" id="email" onBlur="userAvailability()"  placeholder="Email" required="required">
									<i class="fa fa-envelope"></i> </span>
									 <span id="user-availability-status1" style="font-size:12px;"></span>
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control" id="password" name="password" placeholder="Password" required="required">
									<i class="fa fa-lock"></i> </span>
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control"  id="password_again" name="password_again" placeholder="Password Again" required="required">
									<i class="fa fa-lock"></i> </span>
							</div>
							<div class="form-actions">
								<p>
									Already have an account?
									<a href="user-login.php">
										Log-in
									</a>
								</p>

										<div class="new-account">
								Go Back Home
								<a href="../index.php">
									Home
								</a>
							</div>
								<button type="submit" class="btn btn-primary pull-right" id="submit" name="submit">
									Submit <i class="fa fa-arrow-circle-right"></i>
								</button>
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
	
	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>	
		
	</body>
</html>