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
		<title>Admin | Manage Unread Queries</title>
		
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
									<h1 class="mainTitle">Admin | Manage Unread Queries</h1>
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
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
						

									<div class="row">
								<div class="col-md-12">
									<h5 class="over-title margin-bottom-15">Manage <span class="text-bold">Unread Queries</span></h5>
									<table class="table table-bordered table-striped table-hover" id="myTable">
										<thead>
											<tr>
												<th class="center">#</th>
												<th>Name</th>
												<th class="hidden-xs">Suggestion</th>
												<th>Date</th>
												<th>Action</th>
												
											</tr>
										</thead>
										<tbody>
												<?php
												$sql=mysqli_query($con,"select * from suggestion");
												$cnt=1;
												while($row=mysqli_fetch_array($sql))
												{
												?>

											<tr>
												<td class="center"><?php echo $cnt;?>.</td>
												<td class="hidden-xs"><?php echo $row['Name'];?></td>
												<td><?php echo $row['Suggestion'];?></td>
												<td><?php echo $row['Date'];?></td>
												
												<td >
												<div class="visible-md visible-lg hidden-sm hidden-xs">
							<a href="delete-suggestion.php?id=<?php echo $row['Id'];?>" class="btn btn-transparent btn-lg" title="View Details"><i class="fa fa-trash"></i></a>
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