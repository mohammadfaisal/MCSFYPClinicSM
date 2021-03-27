<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
	if(isset($_POST['submit']))
	{
		$id=$_SESSION['id'];
		$docspecialization=$_POST['Doctorspecialization'];
		$docname=$_POST['docname'];
		$docaddress=$_POST['clinicaddress'];
		$dochomefees=$_POST['dochomefees'];
		$docphysicalfees=$_POST['docphysicalfees'];
		$doconlinefees=$_POST['doconlinefees'];
		$doccontactno=$_POST['doccontact'];
		$docemail=$_POST['docemail'];
		$sql=mysqli_query($con,"Update doctors set specilization='$docspecialization',doctorName='$docname',address='$docaddress',home_fees='$dochomefees',physical_fee='$docphysicalfees',online_fee='$doconlinefees',contactno='$doccontactno' where id='".$_SESSION['id']."'");
	if($sql)
		{
		echo "<center><b><div style='font-size:20px;'>Doctor Details updated Successfully</div></b></center>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctor | Edit Doctor Details <?php echo $id; ?></title>
		
		<?php include('include/header-links.php');?>


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
									<h1 class="mainTitle">Doctor | Edit Doctor Details</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Doctor</span>
									</li>
									<li class="active">
										<span>Edit Doctor Details</span>
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
													<h5 class="panel-title">Edit Doctor</h5>
												</div>
												<div class="panel-body">
									<?php $sql=mysqli_query($con,"select * from doctors where docEmail='".$_SESSION['dlogin']."'");
										while($data=mysqli_fetch_array($sql))
										{
										?>
										<h4><?php echo htmlentities($data['doctorName']);?>'s Profile</h4>
										<p><b>Profile Reg. Date: </b><?php echo htmlentities($data['creationDate']);?></p>
										<?php if($data['updationDate']){?>
										<p><b>Profile Last Updation Date: </b><?php echo htmlentities($data['updationDate']);?></p>
										<?php } ?>
										<hr />

					<form role="form" name="adddoc" method="post" onSubmit="return valid();">

								<div class="form-group">
									<label for="DoctorSpecialization">Doctor Specialization</label>
							<select name="Doctorspecialization" class="form-control" required="required">
								<option value="<?php echo htmlentities($data['specilization']);?>">
								<?php echo htmlentities($data['specilization']);?></option>

								<?php $ret=mysqli_query($con,"select * from doctorspecilization");
								while($row=mysqli_fetch_array($ret))
									{
								?>
										<option value="<?php echo htmlentities($row['specilization']);?>">
											<?php echo htmlentities($row['specilization']);?></option>
																			<?php } ?>
																
							</select>
						</div>


							<div class="form-group">
								<label for="doctorname">Doctor Name</label>
								<input type="text" name="docname" class="form-control" value="<?php echo htmlentities($data['doctorName']);?>" >
							</div>



							<div class="form-group">
								<label for="address">Doctor Clinic Address</label>
								<textarea name="clinicaddress" class="form-control"><?php echo htmlentities($data['address']);?></textarea>
							</div>

							<div class="form-group">
								<label for="fess">Doctor Home Fees</label>
								<input type="text" name="dochomefees" class="form-control" required="required"  value="<?php echo htmlentities($data['home_fees']);?>" >
							</div>

							<div class="form-group">
								<label for="fess">Doctor Physical Fees</label>
								<input type="text" name="docphysicalfees" class="form-control" required="required"  value="<?php echo htmlentities($data['physical_fee']);?>" >
							</div>

							<div class="form-group">
								<label for="fess">Doctor Online Fees</label>
								<input type="text" name="doconlinefees" class="form-control" required="required"  value="<?php echo htmlentities($data['online_fee']);?>" >
							</div>

							<div class="form-group">
									<label for="fess">Doctor Contact no</label>
									<input type="text" name="doccontact" class="form-control" required="required"  value="<?php echo htmlentities($data['contactno']);?>">
							</div>

							<div class="form-group">
									<label for="fess">Doctor Email</label>
								<input type="email" name="docemail" class="form-control"  readonly="readonly"  value="<?php echo htmlentities($data['docEmail']);?>">
							</div>
										<?php } ?>	

							<button type="submit" name="submit" class="btn btn-o btn-primary">Update</button>
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
		
	<?php include('include/footer.php');?>
	
		</div>
    <?php include('include/footer-links.php');?>
	</body>
</html>
