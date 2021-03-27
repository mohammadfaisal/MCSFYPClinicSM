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

		<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>


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
									<h1 class="mainTitle">User | Suggestion</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>User</span>
									</li>
									<li class="active">
										<span>Suggestion</span>
									</li>
								</ol>
						</section>
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Suggestion</h5>
												</div>
												<div class="panel-body">
								<p style="color:red;"><?php echo htmlentities($_SESSION['msg1']);?>
								<?php echo htmlentities($_SESSION['msg1']="");?></p>

								<?php 
									$namefetch=mysqli_query($con,"select fullName from users where id='".$_SESSION['id']."'");
										$row=mysqli_fetch_array($namefetch);

										if(isset($_POST['submit']))
										{
											$user_name = $row['fullName'];
											$userid=$_SESSION['id'];
											$suggestion=$_POST['suggestion'];
										$query=mysqli_query($con,"insert into suggestion(Name,Suggestion,Date) values('$user_name','$suggestion',NOW())");
											if($query)
											{
												echo "<center><b><div  style='font-size: 20px;'>
															Your request successfully sended
													 </div></b></center><br><br>";
											}
										}

								 ?>


			<form role="form" name="book" method="post"  enctype="multipart/form-data">
			
	            <div class="form-group">
					<textarea style="resize: none;" class="form-control" type="textarea" name="suggestion" required="required" placeholder="Type Suggestion for your Doctor"></textarea>
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
			    startDate: '-3d'});
		</script>
		
		  <script type="text/javascript">
            $('#timepicker1').timepicker();</script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

		<script type="text/javascript">
			 CKEDITOR.replace('suggestion');
		</script>

	</body>
</html>
