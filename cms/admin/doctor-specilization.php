<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
if(isset($_POST['submit']))
{
$sql=mysqli_query($con,"insert into doctorSpecilization(specilization) values('".$_POST['doctorspecilization']."')");
$_SESSION['msg']="Doctor Specialization added successfully !!";
}

if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from doctorSpecilization where id = '".$_GET['id']."'");
                  $_SESSION['msg']="data deleted !!";
		  }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Doctor Specialization</title>
	
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
									<h1 class="mainTitle">Admin | Add Doctor Specialization</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Add Doctor Specialization</span>
									</li>
								</ol>
							</div>
						</section>

						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-6 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Doctor Specialization</h5>
												</div>
												<div class="panel-body">
													<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
													<?php echo htmlentities($_SESSION['msg']="");?></p>	

													<form role="form" name="dcotorspcl" method="post" >
														<div class="form-group">
															<input type="text" name="doctorspecilization" class="form-control"  placeholder="Enter Doctor Specialization" required>
														</div>
					
														<button type="submit" name="submit" class="btn btn-o btn-primary">
															Submit
														</button>
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

									<div class="row">
								<div class="col-md-12">
									<h5 class="over-title margin-bottom-15">Manage <span class="text-bold">Docter Specialization</span></h5>
									
									<table class="table table-bordered table-striped table-hover" id="myTable">
										<thead>
											<tr>
												<th class="center">#</th>
												<th>Specialization</th>
												<th class="hidden-xs">Creation Date</th>
												<th>Updation Date</th>
												<th>Action</th>
												
											</tr>
										</thead>
										<tbody>
											<?php
											$sql=mysqli_query($con,"select * from doctorSpecilization");
											$cnt=1;
											while($row=mysqli_fetch_array($sql))
											{
											?>

											<tr>
												<td class="center"><?php echo $cnt;?>.</td>
												<td class="hidden-xs"><?php echo $row['specilization'];?></td>
												<td><?php echo $row['creationDate'];?></td>
												<td><?php echo $row['updationDate'];?>
												</td>
												
												<td >
												<div class="visible-md visible-lg hidden-sm hidden-xs">
							<a href="edit-doctor-specialization.php?id=<?php echo $row['id'];?>" class="btn btn-default btn-xs" tooltip-placement="top" tooltip="Edit"><i class="fa fa-edit"></i></a>
													
	<a href="doctor-specilization.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-default btn-xs" tooltip-placement="top" tooltip="Remove"><i class="fa fa-trash"></i></a>
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
