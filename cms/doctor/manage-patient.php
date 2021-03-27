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
		<title>Doctor | Manage Patients</title>

	<?php include('include/header-links.php');?>

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
		<h1 class="mainTitle">Doctor | Manage Patients</h1>
		</div>
		<ol class="breadcrumb">
			<li>
			<span>Doctor</span>
			</li>
			<li class="active">
				<span>Manage Patients</span>
			</li>
		</ol>
	</div>
</section>

<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
<h5 class="over-title margin-bottom-15">Manage <span class="text-bold">Patients</span></h5>
	
<table class="table table-hover" id="sample-table-1">
<thead>
	<tr>
		<th class="center">#</th>
		<th>Patient Name</th>
		<th>Patient Contact Number</th>
		<th>Patient Gender </th>
		<th>Creation Date </th>
		<th>Updation Date </th>
		<th>Action</th>
	</tr>
</thead>
<tbody>
<?php
$docid=$_SESSION['id'];
$sql=mysqli_query($con,"select * from tblpatient where Docid='$docid' ");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
<tr>
<td class="center"><?php echo $cnt;?>.</td>
<td class="hidden-xs"><?php echo $row['PatientName'];?></td>
<td><?php echo $row['PatientContno'];?></td>
<td><?php echo $row['PatientGender'];?></td>
<td><?php echo $row['CreationDate'];?></td>
<td><?php echo $row['UpdationDate'];?>
</td>
<td>

<a href="edit-patient.php?editid=<?php echo $row['ID'];?>"><i class="fa fa-edit"></i></a> || <a href="view-patient.php?viewid=<?php echo $row['ID'];?>"><i class="fa fa-eye"></i></a>

</td>
</tr>
<?php 
$cnt=$cnt+1;
 }?></tbody>
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
	</body>
</html>
