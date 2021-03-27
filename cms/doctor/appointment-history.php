<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
if(isset($_GET['cancel']))
		  {
mysqli_query($con,"update appointment set doctorStatus='0' where id ='".$_GET['id']."'");
                  $_SESSION['msg']="Appointment canceled !!";
		  }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctor | Appointment History</title>
		
			<?php include('include/header-links.php');?>

<style type="text/css">
	input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}



.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>

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
									<h1 class="mainTitle">Doctor  | Appointment History</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Doctor </span>
									</li>
									<li class="active">
										<span>Appointment History</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
						

									<div class="row">
								<div class="col-md-12">
									
									<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
								<?php echo htmlentities($_SESSION['msg']="");?></p>	
									<table class="table table-bordered table-striped table-hover" id="myTable">
										<thead>
											<tr>
												<th class="center">#</th>
												<th class="hidden-xs">Patient  Name</th>
												<th>Meeting Status</th>
												<th>Consultancy Fee</th>
												<th>Appointment Date / Time </th>
												<th>Appointment Creation Date  </th>
												<th>Generate Meeting</th>
												<th>Current Status</th>
												<th>Action</th>
												
											</tr>
										</thead>
										<tbody>
											<?php
											$sql=mysqli_query($con,"select users.fullName as fname,appointment.*  from appointment join users on users.id=appointment.userId");

											$cnt=1;
											while($row=mysqli_fetch_array($sql))
											{$dname=$row['doctor'];
											$uid=$row['userId'];
											?>

											<tr>
												<td class="center"><?php echo $cnt;?>.</td>
												<td class="hidden-xs"><?php echo $row['fname'];?></td>
												<td><?php echo $row['Meeting'];?></td>
												<td><?php echo $row['consultancyFees'];?></td>
												<td><?php echo $row['appointmentDate'];?> / <?php echo
												 $row['appointmentTime'];?>
												</td>
												<td><?php echo $row['postingDate'];?></td>
												<td><?php if ($row['Meeting'] == 'Online'){ 
													
												?>
												<button class="btn btn-primary" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Zoom</button>
												<?php

												}?></td>
												<td><?php 
												if(($row['userStatus']==1) && ($row['doctorStatus']==1))  
												{
													echo "Active";
												}
												if(($row['userStatus']==0) && ($row['doctorStatus']==1))  
												{
													echo "Cancel by Patient";
												}
												if(($row['userStatus']==1) && ($row['doctorStatus']==0))  
												{
													echo "Cancel by you";
												}
												?></td>
												<td >
												<div class="visible-md visible-lg hidden-sm hidden-xs">
													<?php if(($row['userStatus']==1) && ($row['doctorStatus']==1)) 
													{ ?>
														<a href="appointment-history.php?id=<?php echo $row['id']?>&cancel=update" onClick="return confirm('Are you sure you want to cancel this appointment ?')"class="btn btn-transparent btn-xs tooltips" title="Cancel Appointment" tooltip-placement="top" tooltip="Remove">Cancel</a>
													<?php } else {
														echo "Canceled";
													} ?>
												</div>
												</td>
											</tr>
											
											<?php 
											$cnt=$cnt+1;
											 }?>
											<script type="text/javascript">
													var name = document.getElementById('meeting');
													document.getElementById("zoom").value=input.innerHTML;
												</script>
										</tbody>
									</table>
								</div>
							</div>
								</div>
						<div id="id01" class="modal">
  
  <form class="modal-content animate" action="../mail.php" method="post">


    <div class="container">
      <label for="uname"><b>Zoom ID</b></label>
      <input type="text" placeholder="Enter Zoom ID" name="zid" required>

      <label for="psw"><b>Zoom Password</b></label>
      <input type="password" placeholder="Enter Zoom Password" name="zpass" required>
      
       <label for="link"><b>Zoom Link</b></label>
      <input type="text" placeholder="Enter Zoom Link" name="zlink" required>
        <input type="hidden" value="<?php echo $dname ?>" name="doctor" hidden>
      <input type="hidden" value="<?php echo $uid ?>" name="userId">

      <button class="btn btn-primary" name="send" type="submit">Send</button>
  
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

	<script>
	// Get the modal
	var modal = document.getElementById('id01');

	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display1 = "none";
	    }
	}
	</script>
						
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
