<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
$_GET['y'];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Manage</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />




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
									<h1 class="mainTitle">Admin | GOTO </h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Unread Queries</span>
									</li>
								</ol>
							</div>
						</section>						
						<div class="container-fluid container-fullw bg-white">						

									<div class="row">
								<div class="col-md-12">
									<h5 class="over-title margin-bottom-15">Manage <span class="text-bold">Unread Queries</span></h5>
									<table class="table  table-responsive table-bordered table-hover table-striped table-condensed" id="myTable">
										<thead>
											<tr>
												<th class="center">#</th>
												<th>Months</th>
												<th>Home Fee</th>
												<th>Physical Fee</th>
												<th>Online Fee</th>
												

											</tr>
										</thead>
										<tbody>
			<?php
			$mo=$_GET['y'];
			$sql=mysqli_query($con,"select distinct month from appointment where year ='$mo'");
			while($row=mysqli_fetch_array($sql)){
				$mon = $row['month'];
$cnt=$cnt+1;
			?>

											<tr>
												<td class="center"><?php echo $cnt;?>.</td>
												<td class="hidden-xs">
													<?php echo $mon;?>
													
												</td>
												<td>
													<?php 
												$result=mysqli_query($con,"select sum(consultancyFees) from appointment where month ='$mon' AND Meeting ='Home' And year ='$mo'");
			                                 $rowfeeonline = mysqli_fetch_array($result);
			                                 $doubleofonlie = array_sum($rowfeeonline);
			                                 $finalonlinefee = $doubleofonlie/2;
												
												echo $finalonlinefee ?>
												</td>
												<td>
													<?php 
												$result=mysqli_query($con,"select sum(consultancyFees) from appointment where month ='$mon' AND Meeting ='Physical' And year ='$mo'");
			                                 $rowfeeonline = mysqli_fetch_array($result);
			                                 $doubleofonlie = array_sum($rowfeeonline);
			                                 $finalonlinefee = $doubleofonlie/2;
												
												echo $finalonlinefee ?>
												</td>
												<td>
													<?php 
												$result=mysqli_query($con,"select sum(consultancyFees) from appointment where month ='$mon' AND Meeting ='Online' And year ='$mo'");
			                                 $rowfeeonline = mysqli_fetch_array($result);
			                                 $doubleofonlie = array_sum($rowfeeonline);
			                                 $finalonlinefee = $doubleofonlie/2;
												
												echo $finalonlinefee ?>
												</td>
												<!-- <td><?php 
												$result=mysqli_query($con,"select sum(consultancyFees) from appointment where month ='$mon'");
			                                 $rowfee = mysqli_fetch_array($result);
			                                 $double = array_sum($rowfee);
			                                 $final = $double/2;
												
												echo $final ?></td> -->
												 
											</tr>


											<?php } ?>										
										</tbody>
									</table><br>
									<br>
									<div class="container text-center">
										<p style='font-size:22px; color:#212121'>Total Amount of this year : 
											<?php 
												$result=mysqli_query($con,"select sum(consultancyFees) from appointment where year ='$mo'");
			                                 $rowfee = mysqli_fetch_array($result);
			                                 $double = array_sum($rowfee);
			                                 $final = $double/2;
											

												echo "<span style='font-weight:bold;'>" .$final . "</span>"; ?></p>
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
	<?php include('include/setting.php');?>
		</div>
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>


		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css"/>
 
		<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				$("#myTable").DataTable();
			});
		</script>


	</body>
</html>
