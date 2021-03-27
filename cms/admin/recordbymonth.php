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

		<style type="text/css">
			.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;  
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}

.custom-links
{
	color: #666;
}
.custom-links:hover
{
	color: #212121;
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
						<div class="container-fluid container-fullw bg-white">						

									<div class="row">
								<div class="col-md-12">
									<h5 class="over-title margin-bottom-15">Manage <span class="text-bold">Unread Queries</span></h5>
									<table class="table table-hover table-bordered table-striped" id="myTable">
										<thead>
											<tr>
												<th class="center">#</th>
												<th>List by Registered Years</th>
												<th>Search</th>
												
											</tr>
										</thead>
										<tbody>
											<?php
											$query="select appointmentDate from appointment";
											$sql=mysqli_query($con,"select distinct year from appointment");
											while($yearrow=mysqli_fetch_array($sql)){
												$date = $yearrow['year'];
												$cnt=$cnt+1;
											?>

											<tr>
												<td class="center"><?php echo $cnt;?>.</td>
												<td class="hidden-xs">
													<?php 	echo $date;	?>
													
												</td>
												<td><a href="gotomonth.php?y=<?php echo $date ?>" class="custom-links">Go to Months</a></td>
												 
											</tr>											
											<?php } ?>										
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
			
	<?php include('include/setting.php');?>
			
			
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
