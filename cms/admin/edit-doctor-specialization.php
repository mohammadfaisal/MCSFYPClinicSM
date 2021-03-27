<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
$id=intval($_GET['id']);// get value
if(isset($_POST['submit']))
{
$docspecialization=$_POST['doctorspecilization'];
$sql=mysqli_query($con,"update  doctorSpecilization set specilization='$docspecialization' where id='$id'");
$_SESSION['msg']="Doctor Specialization updated successfully !!";
} 

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Edit Doctor Specialization</title>
		
		<?php include('include/header-links.php'); ?>
		
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
									<h1 class="mainTitle">Admin | Edit Doctor Specialization</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Edit Doctor Specialization</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-6 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Edit Doctor Specialization</h5>
												</div>
												<div class="panel-body">
								<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
								<?php echo htmlentities($_SESSION['msg']="");?></p>

							<form role="form" name="dcotorspcl" method="post" >
										<div class="form-group">
											<label for="exampleInputEmail1">Edit Doctor Specialization</label>

							<?php 
								$id=intval($_GET['id']);
									$sql=mysqli_query($con,"select * from doctorSpecilization where id='$id'");
								while($row=mysqli_fetch_array($sql))
								{														
									?>		<input type="text" name="doctorspecilization" class="form-control" value="<?php echo $row['specilization'];?>" >
									<?php } ?>
											</div>

								<button type="submit" name="submit" class="btn btn-o btn-primary">Update</button>
							</form>
												</div>
											</div>
										</div>
											
											</div>
										</div>
											<div class="col-lg-12 col-md-12">
												<div class="panel panel-white">
																								
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
