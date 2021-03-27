<?php
include_once('cms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='contact2.php'</script>";

}


?>

<!-- start Header -->
<?php include('include/header-links.php') ?>
<!-- end Header -->

		<div class="page">

			<!-- page header -->
			<header class="page-header main-page sticky">
				<div class="sticky-wrapp">
					<div class="sticky-container">
						<!-- logo -->
						<section id="logo" class="logo">
							<div>
								<a href="index.php"><img src="img/blue/logo.png" width="190" height="50" alt="Clinico"></a>
							</div>
						</section>
						<!--/ logo -->
						
						<!-- main nav -->
						<nav class="main-nav">
							<ul>
								<li>
									<a href="index.php"><i class="fa fa-plus"></i>Home</a>
									
								</li>
								<li>
									<a href="services.html"><i class="fa fa-plus"></i>Services</a>
								</li>
								
								
						
						
								<li>
									<a href="contact2.php" class="active"><i class="fa fa-plus"></i>Contact Us</a>
								</li>
							</ul>
						</nav>
						<!--/ main nav -->
						
						<!-- mobile nav -->
						<nav id="mobile-main-nav" class="mobile-main-nav">
							<i class="fa fa-bars"></i><a href="#" class="opener">Navigation</a>
							<ul>
								<li>
									<i></i><a href="index-2.html" class="active">Home</a>
							
								</li>
								<li>
									<a href="services.html">Servives</a>
								</li>
							
							
							
								<li>
									<a href="contact2.php">Contact Us</a>
								</li>
							</ul>
						</nav>
						<!--/ mobile nav -->
					</div>
				</div>
			</header>
			<!--/ page header -->
			

	

			<!-- page title -->
			<section class="page-title">
				<div class="grid-row clearfix">
					<h1>Contacts</h1>
					
					<nav class="bread-crumbs">
						<a href="index.php">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="#">Contacts</a>
					</nav>
				</div>
			</section>
			<!--/ page title -->
			
			<!-- page content -->
			<main class="page-content">
				<div class="grid-row">
					<!-- map -->
					<section class="map">
						<div class="widget-title">Our Locations</div>
						<div id="map" class="google-map"></div>
					</section>
					<!--/ map -->
				</div>
				
				<div class="grid-row">
					<div class="grid-col grid-col-9">
						<!-- feedback -->
						<article class="feedback">
							<div class="widget-title">Get in touch by filling the form below</div>
										
							<p>Donec lacinia suscipit magna, et pulvinar tortor facilisis quis. Donec tempor erat vel scelerisque posuere. Nam elementum elit eget tellus faucibus euismod. Aliquam turpis nibh, dictum eu consequat ac, facilisis eu elit. Pellentesque pellentesque orci quam, nec tempus nibh congue ut. Pellentesque tempus vehicula lectus eget tempor. Donec suscipit enim dui, ut sagittis orci rhoncus id.</p>
							
							<form method="POST">
								<fieldset>
									<div class="clearfix">
										<div class="input">
											<label>Your Name:</label>
											<input type="text" name="fullname" required="true">
										</div>
										<div class="input">
											<label>Your Email:</label>
											<input type="email" name="emailid" required="true">
										</div>
									</div>
									<div class="clearfix">
										<div class="input">
											<label>Contact:</label>
											<input type="text" name="mobileno" required="true">
										</div>
									
									</div>
									<label>Message:</label>
									<textarea rows="6" name="description" required="true"></textarea>
								<!-- 	<div class="clearfix captcha">
											<div class="captcha-wrapper">
												<iframe src="php/capcha.html" class="capcha-frame" name="capcha_image_frame" marginwidth="0" marginheight="0" frameborder="0"></iframe>

												<input class="verify" type="text" id="verify" name="verify" />
											</div> -->
											<button type="submit" name="submit" class="button" value="Submit">Submit</button>
											
									<!-- </div> -->
								</fieldset>
							</form>							
						</article>
						<!--/ feedback -->
					</div>
					
					<div class="grid-col grid-col-3">						
						<!-- contacts -->
						<section class="widget widget-contacts">
							<div class="widget-title">Contact Details</div>
							<dl>
								<dt class="opened">Adolescent Gynecology</dt>
								<dd>
									<ul>
										<li><i class="fa fa-map-marker"></i>365 Montauk Avenue</li>
										<li><i class="fa fa-phone"></i>Call us: 203-284-2818</li>
										<li><i class="fa fa-envelope"></i>E-mail: clinico@domain.com</li>
									</ul>
								</dd>

							</dl>
						</section>
						<!--/ contacts -->
						
						<!-- follow -->
						<section class="widget widget-follow">
							<ul>
								<li><a href="#"><i class="fa fa-rss"></i>150<br>Subscribers</a></li>
								<li><a href="#"><i class="fa fa-facebook"></i>5560<br>Fans</a></li>
								<li><a href="#"><i class="fa fa-twitter"></i>2300<br>Followers</a></li>
							</ul>
						</section>
						<!--/ follow -->
					</div>
				</div>
			</main>
			<!--/ page content -->

			<!-- page footer -->
			<footer class="page-footer">
				<a href="#" id="top-link" class="top-link"><i class="fa fa-angle-double-up"></i></a>
				
				<div class="grid-row">
					<div class="grid-col grid-col-3">
						<!-- last news -->
						<section class="widget-alt last-news">
							<div class="widget-icon"></div>
							<div class="widget-title">Clinico</div>
							<ul>
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin justo non odio molestie, sed venenatis elit, consectetur adipiscing.</li>
								<li>Donec quis condimentum leo, et congue dolor. Integer auctor facilisis odio. Duis vitae nibh tristique, consectetur lacus a, facilisis rutrum enim.</li>
								<li>Cras fermentum interdum dapibus. Maecenas imperdiet, consectetur adipiscing magna nec odio cursus, vitae consequat ante.</li>
							</ul>
						</section>
						<!--/ last news -->
					</div>
					
					<div class="grid-col grid-col-3">
						<!-- location -->
						<section class="widget-alt location">
							<div class="widget-icon"></div>
							<div class="widget-title">Location</div>
							<address>Address will be appear here, some details here City Name, Country.</address>
							<ul>
								<li><i class="fa fa-phone"></i>(907) 555-55555</li>
								<li><i class="fa fa-at">@</i>company@youremail.com</li>
								<li><i class="fa fa-skype"></i>Medical Skype Name</li>
							</ul>
							<nav>
								<a href="#" class="fa fa-twitter"></a>
								<a href="#" class="fa fa-facebook"></a>
								<a href="#" class="fa fa-instagram"></a>
							</nav>
						</section>
						<!--/ location -->	
					</div>
					
					<div class="grid-col grid-col-3">
						<!-- last news -->
						<section class="widget-alt recent-posts">
							<div class="widget-icon"></div>
							<div class="widget-title">Recent Posts</div>
							<ul>
								<li>
									<a href="#"><img src="pic/post/1.png" width="80" height="80" alt=""></a>
									<p><a href="#">New study links lutein with eye health benefits, consectetur adipiscing</a><br>5 months ago</p>
								</li>
								<li>
									<a href="#"><img src="pic/post/2.png" width="80" height="80" alt=""></a>
									<p><a href="#">Pets may reduce risk of heart disease, et congue dolor heart</a><br>8 months ago</p>
								</li>
								<li>
									<a href="#"><img src="pic/post/3.png" width="80" height="80" alt=""></a>
									<p><a href="#">Discoveries offer a new explanation for diabetes, consectetur</a><br>10 months ago</p>
								</li>
							</ul>
						</section>
						<!--/ last news -->						
					</div>
					
					<div class="grid-col grid-col-3">
						<!-- work time -->
						<section class="widget-alt work-time">
							<div class="widget-icon"></div>
							<dl>
								<dt>Mon</dt>
								<dd>08:00 am - 12:00 pm</dd>
								<dt>Tue</dt>
								<dd>01:00 am - 05:00 pm</dd>
								<dt>Wed</dt>
								<dd>Free day</dd>
								<dt>Thu</dt>
								<dd>08:00 am - 12:00 pm</dd>
								<dt>Fri</dt>
								<dd>08:00 am - 12:00 pm</dd>
								<dt>Sat</dt>
								<dd>08:00 am - 12:00 pm</dd>
								<dt>Sun</dt>
								<dd>Free day</dd>
							</dl>
							<a href="cms/user-login.php" class="button">Make an Appointment</a>
						</section>
						<!--/ work time -->							
					</div>
				</div>
			</footer>
			<!--/ page footer -->
			
			<!-- copyrights -->
			<div class="copyrights">Copyrights ©2021: Clinico - Medical and Health </div>
			<!--/ copyrights -->

		</div>
		
<!-- start Javascript -->
<?php include('include/footer-links.php') ?>
<!-- end Javascript -->

		
		
	</body>

</html>