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
		<title>Reg Users | View Medical History</title>
		
	<?php include('include/header-links.php'); ?>
	</head>
	<body>
		<div id="app">		
			<?php include('include/sidebar.php');?>
					<div class="app-content">
			<?php include('include/header.php');?>
				<div class="main-content" >
				<div class="wrap-content container" id="container">
										<!-- start: PAGE TITLE -->
				<section id="page-title">
				<div class="row">
					<div class="col-sm-8">
						<h1 class="mainTitle">Users | Manage Medicine Request</h1>
					</div>
				<ol class="breadcrumb">
					<li>
						<span>Users</span>
						</li><li class="active"><span>View Medicine Request</span>
					</li>
				</ol>
				</div>
				</section>
					<div class="container-fluid container-fullw bg-white">
					<div class="row">
					<div class="col-md-12">
					<h5 class="over-title margin-bottom-15">View <span class="text-bold">Medicine Request</span></h5>
				
			<table class="table table-bordered table-striped table-hover" id="myTable">
			
			<thead>
			<tr>
				<th class="center">#</th>
				<th>Medicine Name </th>
				<th>Medicine Name</th>
				<th>Suggestion</th>
				<th>Patient</th>
				<th>Requested Date </th>
				<th>Cancel</th>
			</tr>
			</thead>

			<tbody>

				<?php 
				$id=$_SESSION['id'];
				$pnq=mysqli_query($con,"select * from users where id='$id'");
				$prow=mysqli_fetch_array($pnq);
				$name=$prow['fullName'];
				
				$sql=mysqli_query($con,"select * from medicine_request where Patient_name='$name'");
				$cnt=1;
				while($row=mysqli_fetch_array($sql))
				{
				?>
				<tr>
	 					<td class="center"><?php echo $cnt;?>.</td>
						<td class="hidden-xs"><?php echo $row['Medicine_Name'];?></td>
						<td><img class="" style="width:20%" src="assets/images/<?php echo $row['Image'];?>"></td>
						<td><?php echo $row['Doc_Suggestion'];?></td>
						<td><?php echo $row['Patient_name'];?></td>
						<td><?php echo $row['Request_Date'];?>
					</td>
				<td>

						<a href="med-req-delete.php?id=<?php echo $row['Id'];?>"><i class="fa fa-trash"></i></a>

					</td>
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
		
	</body>
</html>
