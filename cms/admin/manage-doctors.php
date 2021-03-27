<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();


if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from doctors where id = '".$_GET['id']."'");
                  $_SESSION['msg']="data deleted !!";
		  }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Manage Doctors</title>
		
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
									<h1 class="mainTitle">Admin | Manage Doctors</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Manage Doctors</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
						

									<div class="row">
								<div class="col-md-12">
									<h5 class="over-title margin-bottom-15">Manage <span class="text-bold">Docters</span></h5>
									<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
								<?php echo htmlentities($_SESSION['msg']="");?></p>	
									<table class="table table-hover table-striped table-bordered" id="myTable">
										<thead>
											<tr>
												<th class="center">#</th>
												<th>Specialization</th>
												<th class="hidden-xs">Doctor Name</th>
												<th class="hidden-xs">Home Fee</th>\
												<th class="hidden-xs">Physical Fee</th>
												<th class="hidden-xs">Online Fee</th>
												<th>Creation Date </th>
												<th>Action</th>
												
											</tr>
										</thead>
										<tbody>
<?php
$sql=mysqli_query($con,"select * from doctors");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>

											<tr>
												<td class="center"><?php echo $cnt;?>.</td>
												<td class="hidden-xs"><?php echo $row['specilization'];?></td>
												<td><?php echo $row['doctorName'];?></td>
												<td><?php echo $row['home_fees'];?></td>
												<td><?php echo $row['physical_fee'];?></td>
												<td><?php echo $row['online_fee'];?></td>
												<td><?php echo $row['creationDate'];?>
												</td>
												
												<td >
												<div class="visible-md visible-lg hidden-sm hidden-xs">
							<a href="edit-doctor.php?id=<?php echo $row['id'];?>" class="btn btn-default btn-xs" tooltip-placement="top" tooltip="Edit"><i class="fa fa-edit"></i></a>
													
	<a href="manage-doctors.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-default btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-trash"></i></a>
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
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
	
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<?php include('include/footer-links.php');?>

		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css"/>
 
		<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				$("#myTable").DataTable();
			});
		</script>

		<!-- end : JAVASCRIPTS -->
	</body>
</html>
