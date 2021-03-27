<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
if(isset($_GET['cancel']))
		  {
		          mysqli_query($con,"update appointment set userStatus='0' where id = '".$_GET['id']."'");
                  $_SESSION['msg']="Your appointment canceled !!";
		  }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User | Appointment History</title>
		
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
									<h1 class="mainTitle">User  | Appointment History</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>User </span>
									</li>
									<li class="active">
										<span>Appointment History</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
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
												<!-- <th>Specialization</th> -->
												<th>Consultancy Fee</th>
												<th>Appointment Date / Time </th>
												<th>Appointment Creation Date  </th>
												<th>Current Status</th>
												<th>Action</th>
												
											</tr>
										</thead>
										<tbody>
											<?php
											
											$sql=mysqli_query($con,"select * from appointment where userId='".$_SESSION['id']."'");
											$cnt=1;
											while($row=mysqli_fetch_array($sql))
											{
											?>

											<tr>
												<td class="center"><?php echo $cnt;?>.</td>
												<!-- <td class="hidden-xs"><?php echo $row['docname'];?></td> -->
												<td><?php echo $row['doctor'];?></td>
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
	echo "Cancel by You";
}

if(($row['userStatus']==1) && ($row['doctorStatus']==0))  
{
	echo "Cancel by Doctor";
}



												?></td>
												<td >
												<div class="visible-md visible-lg hidden-sm hidden-xs">
							<?php if(($row['userStatus']==1) && ($row['doctorStatus']==1))  
{ ?>

													
	<a href="appointment-history.php?id=<?php echo $row['id']?>&cancel=update" onClick="return confirm('Are you sure you want to cancel this appointment ?')"class="btn btn-transparent btn-xs tooltips" title="Cancel Appointment" tooltip-placement="top" tooltip="Remove">Cancel</a>
	<?php } else {

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
						
						<!-- end: BASIC EXAMPLE -->
						<!-- end: SELECT BOXES -->
						
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
