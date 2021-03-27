<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'd-m-Y h:i:s A', time () );
if(isset($_POST['submit']))
{
$sql=mysqli_query($con,"SELECT password FROM  users where password='".md5($_POST['cpass'])."' && id='".$_SESSION['id']."'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($con,"update users set password='".md5($_POST['npass'])."', updationDate='$currentTime' where id='".$_SESSION['id']."'");
$_SESSION['msg1']="Password Changed Successfully !!";
}
else
{
$_SESSION['msg1']="Old Password not match !!";
}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User  | change Password</title>
		
		<?php include('include/header-links.php'); ?>
		
<script type="text/javascript">
function valid()
{
if(document.chngpwd.cpass.value=="")
{
alert("Current Password Filed is Empty !!");
document.chngpwd.cpass.focus();
return false;
}
else if(document.chngpwd.npass.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.npass.focus();
return false;
}
else if(document.chngpwd.cfpass.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.cfpass.focus();
return false;
}
else if(document.chngpwd.npass.value!= document.chngpwd.cfpass.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.cfpass.focus();
return false;
}
return true;
}
</script>

	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				
						<?php include('include/header.php');?>
						
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">User | Change Password</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>User</span>
									</li>
									<li class="active">
										<span>Change Password</span>
									</li>
								</ol>
							</div>
						</section>
		
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Change Password</h5>
												</div>
												<div class="panel-body">
													<p style="color:red;"><?php echo htmlentities($_SESSION['msg1']);?>
													<?php echo htmlentities($_SESSION['msg1']="");?></p>	
													
													<form role="form" name="chngpwd" method="post" onSubmit="return valid();">
													<div class="form-group">
															<label for="exampleInputEmail1">
																Current Password
															</label>
															<input type="password" name="cpass" class="form-control"  placeholder="Enter Current Password" required="required">
													</div>

													<div class="form-group">
															<label for="exampleInputPassword1">
																New Password
															</label>
															<input type="password" name="npass" class="form-control"  placeholder="New Password" required="required">
													</div>
														
													<div class="form-group">
															<label for="exampleInputPassword1">
																Confirm Password
															</label>
															<input type="password" name="cfpass" class="form-control"  placeholder="Confirm Password" required="required">
													</div>		

										<button type="submit" name="submit" class="btn btn-o btn-primary">Submit</button>

													</form>
												</div>
											</div>
										</div>		
									</div>
								</div>									
							</div>
						</div>						
					</div>
				</div>
			</div>
		
	<?php include('include/footer.php');?>
		
		</div>
	<?php include('include/footer-links.php');?>

	</body>
</html>
