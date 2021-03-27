<?php
session_start();
include('include/config.php');
include('include/checklogin.php');
check_login();


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User  | Book Appointment</title>
	
	<?php include('include/header-links.php'); ?>



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
									<h1 class="mainTitle">User | Book Appointment</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>User</span>
									</li>
									<li class="active">
										<span>Book Appointment</span>
									</li>
								</ol>
						</section>
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
				<?php
					if(isset($_POST['submit']))
						{
						$doctor	=$_POST['doctor_name'];
						$userid=$_SESSION['id'];
						$fees=$_POST['fees'];
						$meeting_name=$_POST['meeting_name'];
						$appdate=$_POST['appdate'];
						$time=$_POST['apptime'];
						$userstatus=1;
						$month= date("m");
						$year= date("Y");

							$month_name = date("F", mktime(0, 0, 0, $month, 10));

							$docstatus=1;
							$query=mysqli_query($con,"insert into appointment(doctor,userId,consultancyFees,Meeting,appointmentDate,month,year,appointmentTime,userStatus,doctorStatus) values('$doctor','$userid','$fees','$meeting_name','$appdate','$month_name','$year','$time','$userstatus','$docstatus')");
						if($query)
							{							
								echo "<center><b><div  style='font-size: 20px;'>
										 Your appointment successfully booked
										</div></b></center>";
							}
						}
				?>
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-body">
								<p style="color:red;"><?php echo htmlentities($_SESSION['msg1']);?>
								<?php echo htmlentities($_SESSION['msg1']="");?></p>
								<form role="form" name="book" method="post"  enctype="multipart/form-data">		

							<div class="col-md-6">		
								<div class="form-group">
											<label for="doctor">
												Doctors
											</label>
								<select name="doctor_name" class="form-control" id="doc" onchange="getDoc()"  required="required">
											<option value="">Select Doctor</option>
										<?php $ret=mysqli_query($con,"select * from doctors");
											while($row=mysqli_fetch_array($ret))
											{$dname=$row['doctorName'];
											?>
										<option value="<?php echo htmlentities($row['doctorName']);?>">
											<?php echo htmlentities($row['doctorName']);?>
										</option>
												<?php } ?>																
								</select>
															<script type="text/javascript">
																function getDoc(){
																	var docname=document.getElementById('doc').value;
																	document.getElementById("myText").innerHTML = docname;

																}
															</script>
							</div></div>

			

			<div class="col-md-6">
				<div class="form-group">
					<label for="meeting_name">
					Confirm Meeting By:
				</label>
				<select name="meeting_name" class="form-control"  required="required">
					<option value="">Select Meeting Status</option>
					<option value="Home">Home</option>
					<option value="Physical">Physical</option>
					<option value="Online">Online</option>
				</select>
					</div>
				</div>

			<div class="col-md-6">
				<div class="form-group">
					<label for="AppointmentDate">Date</label>
					<input class="form-control datepicker" name="appdate" required="required" data-date-format="yyyy-mm-dd">
	            </div>
	        </div>

	        <div class="col-md-6">
	            <div class="form-group">
	            	<label for="Appointmenttime">Time</label>
			<input class="form-control" name="apptime" id="timepicker1" required="required">eg : 10:00 PM</div></div>

					<div class="col-md-12">
					<div class="form-group">
						<label for="consultancyfees">
						Consultancy Fees 
					</label><br>
					<?php 
						 $name=$dname;
					 	$dnam=$name;
						$feequery=mysqli_query($con,"select * from doctors where doctorName='$name'");
						$feerow=mysqli_fetch_array($feequery);
						$hfee=$feerow['home_fees']; 
						$pfee=$feerow['physical_fee']; 
						$ofee=$feerow['online_fee'];
						?>
					<input type="radio" name="fees" value="<?php echo $hfee; ?>" class="" />  Home = <?php echo $hfee; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio" name="fees" value="<?php echo $pfee; ?>" class="" />  Physical = <?php echo $pfee; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio" name="fees" value="<?php echo $ofee; ?>" class="" />  Online = <?php echo $ofee; ?><br>
				</div>

			<button type="submit" name="submit" class="btn btn-o btn-primary">
			Submit</button></div>
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
	<?php include('include/footer.php');?>
		</div>
	<?php include('include/footer-links.php');?>
	<script>
		$('.datepicker').datepicker({
	    format: 'yyyy-mm-dd',
	    startDate: '-3d'});
		</script>

		  <script type="text/javascript">
            $('#timepicker1').timepicker();
        </script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

	</body>
</html>
