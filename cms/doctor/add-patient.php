<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{	
	$docid=$_SESSION['id'];
	$patname=$_POST['patname'];
	$patcontact=$_POST['patcontact'];
	$patemail=$_POST['patemail'];
	$gender=$_POST['gender'];
	$pataddress=$_POST['pataddress'];
	$patage=$_POST['patage'];
	$medhis=$_POST['medhis'];

		$sql=mysqli_query($con,"insert into tblpatient(Docid,PatientName,PatientContno,PatientEmail,PatientGender,PatientAdd,PatientAge,PatientMedhis) values('$docid','$patname','$patcontact','$patemail','$gender','$pataddress','$patage','$medhis')");
if($sql)
	{
		echo "<center><b><div style='font-size:20px;'>Patient info added Successfully</div></b></center>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctor | Add Patient</title>
		
		<?php include('include/header-links.php');?>

		<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#patemail").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
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
<h1 class="mainTitle">Patient | Add Patient</h1>
</div>
<ol class="breadcrumb">
<li>
<span>Patient</span>
</li>
<li class="active">
<span>Add Patient</span>
</li>
</ol>
</div>
</section>
<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
<div class="row margin-top-30">
<div class="col-lg-8 col-md-12">
<div class="panel panel-white">
<div class="panel-heading">
<h5 class="panel-title">Add Patient</h5>
</div>
<div class="panel-body">
		<form role="form" name="" method="post">

			<div class="col-md-6">
				<div class="form-group">
					<label for="doctorname">Patient Name</label>
					<input type="text" name="patname" class="form-control"  placeholder="Enter Patient Name" required="true">
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
				<label for="fess">Patient Contact</label>
				<input type="text" name="patcontact" class="form-control"  placeholder="Enter Patient Contact no" required="true" maxlength="10" pattern="[0-9]+">
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label for="fess">Patient Email</label>
					<input type="email" id="patemail" name="patemail" class="form-control"  placeholder="Enter Patient Email id" required="true" onBlur="userAvailability()">
					<span id="user-availability-status1" style="font-size:12px;"></span>
				</div>
			</div>

			<div class="col-md-6">	
				<div class="form-group"><label for="fess">Patient Age</label>
					<input type="text" name="patage" class="form-control"  placeholder="Enter Patient Age" required="true">
				</div>
			</div>


			<div class="col-md-6">
				<div class="form-group">
					<label for="address">Patient Address</label>
					<textarea style="resize: none;" name="pataddress" class="form-control"  placeholder="Enter Patient Address" required="true"></textarea>
				</div>
			</div>

		

			<div class="col-md-6">
				<div class="form-group">
					<label for="fess">Medical History</label>
					<textarea style="resize: none;" type="text" name="medhis" class="form-control"  placeholder="Enter Patient Medical History(if any)" required="true"></textarea>
				</div>	


			<div class="col-md-12">
				<div class="form-group">
					<label class="block">Gender</label>
					<div class="clip-radio radio-primary">
						<input type="radio" id="rg-female" name="gender" value="female"  required="required">
						<label for="rg-female">Female</label>
						<input type="radio" id="rg-male" name="gender" value="male" required="required">
						<label for="rg-male">Male</label>
					</div>
				</div>
				<button type="submit" name="submit" id="submit" class="btn btn-o btn-primary">Add</button>
			</div>
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
</div>
</div>
</div>				
</div>
</div>
</div>
		
	<?php include('include/footer.php');?>
		
		</div>
    <?php include('include/footer-links.php');?>

		<script type="text/javascript">
			 CKEDITOR.replace('clinicaddress');
		</script>
	</body>
</html>
