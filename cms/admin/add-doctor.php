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
		<title>Admin | Add Doctor</title>
		
		<?php include('include/header-links.php'); ?>

		<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
		<script type="text/javascript">
		function valid()
		{
		 if(document.adddoc.npass.value!= document.adddoc.cfpass.value)
		{
		alert("Password and Confirm Password Field do not match  !!");
		document.adddoc.cfpass.focus();
		return false;
		}
		return true;
		}
		</script>


<script>
function checkemailAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#docemail").val(),
type: "POST",
success:function(data){
$("#email-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>


<style type="text/css">
	.custom-btn{border: 1px solid #424242; border-radius: 8px}
	.custom-btn:hover{background-color: #e0e0e0}
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
									<h1 class="mainTitle">Admin | Add Doctor</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Add Doctor</span>
									</li>
								</ol>
							</div>
						</section>
					
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">

									<?php 
										if(isset($_POST['submit']))
										{	
											$docspecialization=$_POST['Doctorspecialization'];
											$docname=$_POST['docname'];
											$docaddress=$_POST['clinicaddress'];
											$homefees=$_POST['homefees'];
											$physicalfees=$_POST['physicalfees'];
											$onlinefees=$_POST['onlinefees'];
											$doccontactno=$_POST['doccontact'];


										$docemail = $_POST['docemail'];
										$password = $_POST['npass'];

										$sql= "INSERT INTO doctors(specilization,doctorName,address,home_fees,physical_fee,online_fee,contactno,docEmail,password) values('$docspecialization','$docname','$docaddress','$homefees','$physicalfees','$onlinefees','$doccontactno','$docemail','$password')";

											$query = mysqli_query($con, $sql);

										if($query)
										{
										echo "<center><b><div style='font-size: 20px;'>
													Doctor info added Successfully					
											</div></b></center>";

										echo "<script>window.location.href ='manage-doctors.php'</script>";

										}
										}
									
									 ?>
									
									<div class="row margin-top-30">
										<div class="col-lg-12 col-md-12">
											<div class="panel panel-white">
												
												<div class="panel-body">
									
													<form role="form" name="adddoc" method="post" onSubmit="return valid();">
														<div class="col-md-6">
															<div class="form-group">
															<label for="DoctorSpecialization">
																Doctor Specialization
															</label>
																<select name="Doctorspecialization" class="form-control" required="true">
																	<option value="">Select Specialization</option>
																		<?php $ret=mysqli_query($con,"select * from doctorspecilization");
																		while($row=mysqli_fetch_array($ret))
																		{
																		?>
																<option value="<?php echo htmlentities($row['specilization']);?>">
																	<?php echo htmlentities($row['specilization']);?>
																</option>
																<?php } ?>
																
															</select>
														</div>	
														</div>

														<div class="col-md-6">
															<div class="form-group">
															<label for="doctorname">Doctor Name</label>
															<input type="text" name="docname" class="form-control"  placeholder="Enter Doctor Name" required="true">
														</div>
														</div>

														<div class="col-md-6">
															<div class="form-group">
															<label for="fess">Doctor Home Fees</label>
															<input type="text" name="homefees" class="form-control"  placeholder="Enter Doctor Consultancy Fees" required="true">
														</div>
														</div>

														<div class="col-md-6">
															<div class="form-group">
															<label for="fess">Doctor Physical Fees</label>
															<input type="text" name="physicalfees" class="form-control"  placeholder="Enter Doctor Consultancy Fees" required="true">
														</div>
														</div>	
														
														<div class="col-md-6">
															<div class="form-group">
															<label for="fess">Doctor Online Fees</label>
															<input type="text" name="onlinefees" class="form-control"  placeholder="Enter Doctor Consultancy Fees" required="true">
														</div>
														</div>
	
														<div class="col-md-6">
															<div class="form-group">
															<label for="fess">Doctor Contact no</label>
															<input type="text" name="doccontact" class="form-control"  placeholder="Enter Doctor Contact no" required="true">
														</div>
														</div>

														<div class="col-md-6">
															<div class="form-group">
															<label for="fess">Doctor Email</label>
															<input type="email" id="docemail" name="docemail" class="form-control"  placeholder="Enter Doctor Email id" required="true" onBlur="checkemailAvailability()">
															<span id="email-availability-status"></span>
															</div>
														</div>


														<div class="col-md-6">
														<div class="form-group">
															<label for="exampleInputPassword1">Password</label>
															<input type="password" name="npass" class="form-control"  placeholder="New Password" required="required">
														</div>
														</div>

														
														<div class="col-md-12">
															<div class="form-group">
															<label for="address">Doctor Clinic Address</label>
																<textarea style="resize: none;" name="clinicaddress" class="form-control"  placeholder="Enter Doctor Clinic Address" required="true"></textarea>
															</div>

														</div>

														<div class="col-md-6">
															<button type="submit" name="submit" id="submit" 
															class="btn custom-btn">
															Add New Doctor
															</button>

													</form>
												</div>
											</div>
										</div>
											
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
