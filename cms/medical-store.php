<?php
session_start();
include('include/config.php');
include('include/checklogin.php');
check_login();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User  | Medical Store</title>
	
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
									<h1 class="mainTitle">User | Medical Store</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>User</span>
									</li>
									<li class="active">
										<span>Medical Store</span>
									</li>
								</ol>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">

													<?php
													$namefetch=mysqli_query($con,"select fullName from users where id='".$_SESSION['id']."'");

															$row=mysqli_fetch_array($namefetch);
				
														if(isset($_POST['submit']))
														{
															$user_name = $row['fullName'];
															$userid=$_SESSION['id'];
															$tablet=$_POST['tablet'];
															$pic=$_FILES['pic']['name'];
															$pic_temp=$_FILES['pic']['tmp_name'];
															move_uploaded_file($pic_temp,"assets/images/$pic");
														$query=mysqli_query($con,"insert into medicine_request(Medicine_Name,Image,Patient_name,Request_Date) values('$tablet','$pic','$user_name',NOW())");
															if($query)
															{
																echo "<center><b><div  style='font-size: 20px;'>
																			Your medicine request successfully sended
																	  </div></b></center>";
															}
														}
													?>
													<h5 class="panel-title">Request For Medicine</h5>
												</div>
												<div class="panel-body">
								<p style="color:red;"><?php echo htmlentities($_SESSION['msg1']);?>
								<?php echo htmlentities($_SESSION['msg1']="");?></p>
								<form role="form" name="book" method="post"  enctype="multipart/form-data">
														
								
					
				<div class="form-group">
					<label for="MedicalStore">Medicine Name</label>
					<input class="form-control" type="text" name="tablet" required="required" placeholder="Type Tablet Name"><br>
					<input class="input-group" value="" type="file" name="pic" required="required"/>Select Image for Medicine
	            </div>
	            
			<button type="submit" name="submit" class="btn btn-o btn-primary">
			Submit</button>
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
    startDate: '-3d'
});
		</script>
		
		  <script type="text/javascript">
            $('#timepicker1').timepicker();</script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

	</body>
</html>
