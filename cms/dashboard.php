<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User  | Dashboard</title>
		
		<!-- HEADER LINKS -->
	<?php include('include/header-links.php'); ?>
	
	<style type="text/css">
		.custom-btn{color: #000;border: 1px solid #008fd5; border-radius: 8px}
		.custom-btn:hover{background-color: #008fd5}
	</style>

	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				
						<?php include('include/header.php');?>
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">User | Dashboard</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>User</span>
									</li>
									<li class="active">
										<span>Dashboard</span>
									</li>
								</ol>
							</div>
						</section>
							<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle">My Profile</h2>	
												<a class="btn custom-btn" href="edit-profile.php">
													Update Profile
												</a>								
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle">My Appointments</h2>
												<a class="btn custom-btn" href="appointment-history.php">
													View Appointment History
												</a>											
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"> Book My Appointment</h2>									
												<a class="btn custom-btn" href="book-appointment.php">
													Book Appointment
												</a>											
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-medkit fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"> Medical Store</h2>									
												<a class="btn custom-btn" href="medical-store.php">
													Request for Medicine
												</a>											
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-plus fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"> Medicine Request</h2>
												<a class="btn custom-btn" href="manage-medicine-request.php">
													View History of Medicine Request
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
