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
		<title>Patients | Appointment History</title>
		
		<?php include('include/header-links.php'); ?>

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
									<h1 class="mainTitle">Patients  | Appointment History</h1>
								</div>
								<ol class="breadcrumb">
									<li>
										<span>Patients </span>
									</li>
									<li class="active">
										<span>Appointment History</span>
									</li>
								</ol>
							</div>
						</section>
						<div class="container-fluid container-fullw bg-white">
						

									<div class="row">
								<div class="col-md-12">
									
									<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
								<?php echo htmlentities($_SESSION['msg']="");?></p>	
									<table class="table table-bordered table-striped table-hover" id="myTable">
										<thead>
											<tr>
												<th class="center">#</th>
												<th class="hidden-xs">Doctor Name</th>
												<th>Patient Name</th>
												<th>Consultancy Fee</th>
												<th>Appointment Date / Time </th>
												<th>Appointment Creation Date  </th>
												<th>Current Status</th>
												<th>Action</th>
												
											</tr>
										</thead>
										<tbody>
												<?php
												$sql=mysqli_query($con,"select *  from appointment");
												$cnt=1;
												while($row=mysqli_fetch_array($sql))
												{
												?>

											<tr>
												<td class="center"><?php echo $cnt;?>.</td>
												<td class="hidden-xs"><?php echo $row['doctor'];?></td>
												<?php 
													$namefetch=mysqli_query($con,"select fullName from users where id='".$row['userId']."'");
													$rown=mysqli_fetch_array($namefetch);
												 ?>
												<td class="hidden-xs"><?php echo $rown['fullName'];;?></td>
												<td><?php echo $row['consultancyFees'];?></td>
												<td><?php echo $row['appointmentDate'];?> / <?php echo
												 $row['appointmentTime'];?>
												</td>
												<td><?php echo $row['postingDate'];?></td>
												<td>
<?php if(($row['userStatus']==1) && ($row['doctorStatus']==1))  
{
	echo "Active";
}
if(($row['userStatus']==0) && ($row['doctorStatus']==1))  
{
	echo "Cancel by Patient";
}

if(($row['userStatus']==1) && ($row['doctorStatus']==0))  
{
	echo "Cancel by Doctor";
}



												?></td>
												<td >
												<div class="visible-md visible-lg hidden-sm hidden-xs">
			<?php if(($row['userStatus']==1) && ($row['doctorStatus']==1)){
				echo "No Action yet";
			} else {
				echo "Canceled";
			} ?>
												</div>
												<div class="visible-xs visible-sm hidden-md hidden-lg">
													<div class="btn-group" dropdown is-open="status.isopen">
														<button type="button" class="btn btn-primary btn-o btn-sm dropdown-toggle" dropdown-toggle>
															<i class="fa fa-cog"></i>&nbsp;<span class="caret"></span>
														</button>
														<ul class="dropdown-menu pull-right dropdown-light" role="menu">
															<li>
																<a href="#">
																	Edit
																</a>
															</li>
															<li>
																<a href="#">
																	Share
																</a>
															</li>
															<li>
																<a href="#">
																	Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											
											<?php 
												$cnt=$cnt+1;
											 }?>
											
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
	<?php include('include/footer.php');?>
	
		</div>

		<?php include('include/footer-links.php');?>

		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css"/>
 
		<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				$("#myTable").DataTable();
			});
		</script>
	</body>
</html>
