<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin  | Dashboard</title>
		
	<?php include('include/header-links.php'); ?>

<style type="text/css">
	.custom-btn{color: #000;border: 1px solid #008fd5; border-radius: 8px}
	.custom-btn:hover{background-color: #008fd5}

	.
	{
		  border: 1px solid;
		  margin-bottom: 2%;
		  padding: 10px;
		  box-shadow: 1px 3px 3px 1px #888888; border-radius:4%;
	}

</style>
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
									<h1 class="mainTitle">Admin | Dashboard</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Dashboard</span>
									</li>
								</ol>
							</div>
						</section>
					
							<div class="container-fluid container-fullw  bg-white ">
							<div class="row">
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle">Manage Users</h2>
							
												<a class="btn custom-btn" href="manage-users.php">
												<?php $result = mysqli_query($con,"SELECT * FROM users ");
												$num_rows = mysqli_num_rows($result);
												{
													?>
											Total Users :<?php echo htmlentities($num_rows);  } ?>		
												</a>
											</button>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle">Manage Doctors</h2>

												<a class="btn custom-btn" href="manage-doctors.php">
												<?php $result1 = mysqli_query($con,"SELECT * FROM doctors ");
													$num_rows1 = mysqli_num_rows($result1);
													{
													?>
											Total Doctors :<?php echo htmlentities($num_rows1);  } ?>		
												</a>
											
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"> Appointments</h2>
									
											<!-- <a  href="book-appointment.php"> -->
													<a class="btn custom-btn" href="appointment-history.php">
												<?php $sql= mysqli_query($con,"SELECT * FROM appointment");
														$num_rows2 = mysqli_num_rows($sql);
														{
														?>
											Total Appointments :<?php echo htmlentities($num_rows2);  } ?>	
												</a>
										</div>
									</div>
								</div>

								<div class="col-sm-4 ">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle">Manage Patients</h2>
										
												<a class="btn custom-btn" href="manage-patient.php">
													<?php $result = mysqli_query($con,"SELECT * FROM tblpatient ");
														$num_rows = mysqli_num_rows($result);
														{
														?>
														Total Patients :<?php echo htmlentities($num_rows);  
													} ?>		
												</a>
										</div>
									</div>
								</div>





								<div class="col-sm-4 ">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="ti-files fa-1x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"> New Queries</h2>

													<a class="btn custom-btn" href="unread-queries.php">
												<?php 
													$sql= mysqli_query($con,"SELECT * FROM tblcontactus where  IsRead is null");
													$num_rows22 = mysqli_num_rows($sql);
												?>
											Total New Queries :<?php echo htmlentities($num_rows22);   ?>	
												</a>
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
