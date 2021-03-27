 <?php include('include/header-links.php') ?>

		<div class="page">
			<header class="page-header main-page sticky">
				<div class="sticky-wrapp">
					<div class="sticky-container">	
						<section id="logo" class="logo">
							<div>
								<a href="index.php"><img src="images/logo1.png" alt="Virtual Clinic"></a>
							</div>
						</section>						
						<nav class="main-nav">
							<ul>
								<li><a href="index.php" class="active"></i>Home</a></li>
					
								<li><a href="about-us.php"><i class="fa fa-plus"></i>About Us</a></li>
	
								<li><a href="contact2.php"><i class="fa fa-plus"></i>Contact Us</a></li>
							</ul>
						</nav>
						<nav id="mobile-main-nav" class="mobile-main-nav">
							<i class="fa fa-bars"></i><a href="#" class="opener">Navigation</a>
							<ul>
								<li><i></i><a href="index.php" class="active">Home</a></li>
							
								<li>
									<a href="contact2.php">Contact Us</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
			<form id="quick-search" class="quick-search">
				<fieldset>
					<legend>Quick Search:</legend>
					
					<input type="text" placeholder="Search by name" id="docname" name="docname" class="ui-autocomplete-input" autocomplete="off">
					
					<select>
						<option value="0">Speciality</option>
						<option value="1">Ophthomologist</option>
						<option value="2">Dermatologist</option>
						<option value="3">Neorologist</option>
						<option value="4">Surgeon</option>
					</select>
					
					<select>
						<option value="0">Locations</option>
						<option value="1">Primary Health Care</option>
						<option value="2">Gynaecological Clinic</option>
						<option value="3">Diagnosis With Precise</option>
						<option value="4">Cardiac Clinic</option>
						<option value="5">General Surgery</option>
					</select>
					
					
				</fieldset>				
			</form>
			<div class="slider-wrapper">
				<section class="slider" id="slider">
					<div class="ls-slide" data-ls="transition2d:9;slidedelay:7000;">					
						<img src="pic/medical-slide-1.jpg" alt="" class="ls-bg">
						
						<div class="intro ls-l" data-ls="offsetyin:top;offsetxin:0;durationin:2000;offsetyout:bottom;offsetxout:0;durationout:1000;" style="left:80%;top:35%;">
							<span class="icon fa fa-heart"></span>
							<h2><span>SYMPTOM</span>CHECKER</h2>
							<p>Vestibulum rutrum luctus porta. Maecenas elit nibh</p>
							<div class="buttons">
								<a  class="prev"><i class="fa fa-angle-left"></i></a><!--
								--><a class="button">Read More</a><!--
								--><a  class="next"><i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="ls-slide" data-ls="transition2d:40;slidedelay:7000;">				
						<img src="pic/medical-slide-2.jpg" alt="" class="ls-bg">
						
						<div class="intro ls-l" data-ls="scalexin:0.3;scaleyin:0.3;rotatexin:180;offsetxin:0;durationin:2000;durationout:2000;scalexout:2;scaleyout:2;offsetxout:0;fadeout:true;showuntil:3000;" style="left:80%;top:35%;">
							<span class="icon fa fa-comments"></span>
							<h2><span>HELP</span>ONLINE</h2>
							<p>Vestibulum rutrum luctus porta. Maecenas elit nibh</p>
							<div class="buttons">
								<a  class="prev"><i class="fa fa-angle-left"></i></a><!--
								--><a  class="button">Read More</a><!--
								--><a  class="next"><i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="ls-slide" data-ls="transition2d:11;slidedelay:7000;">
						<img src="pic/medical-slide-3.jpg" alt="" class="ls-bg">
						
						<div class="intro ls-l" data-ls="skewxin:30;skewyin:0;offsetxin:right;fadein:false;durationin:2000;durationout:1000;offsetxout:right;offsetyout:0;fadeout:true;" style="left:80%;top:35%;">
							<span class="icon fa fa-flask"></span>
							<h2><span>LAB</span>TESTING</h2>
							<p>Vestibulum rutrum luctus porta. Maecenas elit nibh</p>
							<div class="buttons">
								<a  class="prev"><i class="fa fa-angle-left"></i></a><!--
								--><a class="button">Read More</a><!--
								--><a  class="next"><i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
				</section>
			</div>		
			
			<main class="page-content">
				<div class="grid-row">			
						<section class="benefits">
						<ul>
							<li>
								<div class="pic"><i class="fa fa-heart"></i></div>
								<div class="text">
								 <h2>Patients</h2>
						  			<p>Register & Book Appointment</p>
									<a href="cms/user-login.php" class="more"></a>
								</div>
							</li>
							<li>
								<div class="pic"><i class="fa fa-flask"></i></div>
								<div class="text">
									 <h2>Doctors Login</h2>
									 <p>Docter Panel</p>
									<a href="cms/doctor/" class="more"></a>
								</div>
							</li>
							<li>
								<div class="pic"><i class="fa fa-stethoscope"></i></div>
								<div class="text">
									<h2>Admin Login</h2>
									<p>Admin Panel</p>
									<a href="cms/admin" class="more"></a>
								</div>
							</li>
							<li>
								<div class="pic"><i class="fa fa-comments-o"></i></div>
								<div class="text">
									<h2>Online Help</h2>
									<p>Contact Us</p>
									<a href="contact2.php" class="more"></a>
								</div>
							</li>
						</ul>
					</section>
				</div>

			

				<div class="grid-row">
					<!-- services -->
					<section class="services">
						<ul>
							<li>
								<a class="pic"><i class="fa fa-leaf"></i></a>
								<h2>Transplant Services</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin justo non odio molestie, sed venenatis elit laoreet. Cras pharetra dolor vitae malesuada facilisis.</p>
								
							</li>
							<li>
								<a class="pic"><i class="fa fa-user-md"></i></a>
								<div class="text">
									<h2>Qualified Doctors</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin justo non odio molestie, sed venenatis elit laoreet. Cras pharetra dolor vitae malesuada facilisis.</p>
								
								</div>
							</li>
							<li>
								<a class="pic"><i class="fa fa-clock-o"></i></a>
								<h2>24 Hours Service</h2>
								<p>Mauris consectetur, dui eget ullamcorper hendrerit, eros ligula consectetur dui, vitae adipiscing nunc enim eu justo. Donec quis mollis neque. Pellentesque facilisis.</p>
								
							</li>
							<li>
								<a class="pic"><i class="fa fa-ambulance"></i></a>
								<div class="text">
									<h2>Emergency Departments</h2>
									<p>Fusce pellentesque lectus quis placerat ultrices. Nunc malesuada est vitae urna laoreet porta. Donec cursus tellus libero, non porttitor felis luctus ut.</p>
									
								</div>
							</li>
						</ul>
					</section>
					<!--/ services -->	
				</div>
				

						<div class='grid-row'>			

	<section class='widget doctors-carousel doctors'>
	<div id='doctors-carousel' class='owl-carousel'>

			<!-- Our Doctors -->
				<?php      
				include_once('cms/include/config.php');             			
		 
									$q = "SELECT * FROM doctor_image ";
									$run = mysqli_query($con,$q);
																				
									$count = mysqli_num_rows($run);

									if($count == 0){
										echo "No Product found";
										}
										else
										{	
										while ($allValue = mysqli_fetch_assoc($run)) 
										{	
								
										$img = 	  $allValue['Doctor_Img'];
										$d_name = $allValue['Doctor_Name'];
										$d_sp   = $allValue['Doctor_Specialization'];

											

								echo "
																
										
												<div class='item'>
													<div class='pic'>
														<img src='pic/$img' width='270' height='270' alt=''>
												
													</div>
													<h3><a href=''>$d_name</a></h3>
													<p>$d_sp</p>

											<div class='links'>
												<ul>
													<li><a href='#' class='fa fa-skype'></a></li>
													<li><a href='#' class='fa fa-twitter'></a></li>
													<li><a href='' class='fa fa-facebook'></a></li>
												</ul>
											</div>	
									</div>

					
									
											
										";}}
							?>
								</div>

							</section>								
						</div>
			<!-- End Our Doctors -->

			<div class="grid-row">
					<div class="grid-col grid-col-6">
						<!-- departments -->
						<section class="widget widget-departments">
							<div class="widget-title">Departments</div>
							<dl>
								<dt><i class="fa fa-medkit"></i>Primary Health Care</dt>
								<dd>Sed purus purus, tincidunt eget malesuada et, molestie ut eros. Fusce blandit, sapien eu sollicitudin consectetur, ligula tellus.<br/></dd>

								<dt><i class="fa fa-user-md"></i>Gynaecological Clinic</dt>
								<dd>Donec lacinia suscipit magna, et pulvinar tortor facilisis quis. Donec tempor erat vel scelerisque posuere.<br/></dd>

								<dt><i class="fa fa-stethoscope"></i>Diagnosis With Precise</dt>
								<dd>Nam elementum elit eget  tellus faucibus euismod. Aliquam turpis nibh, dictum eu consequat ac, facilisis eu elit. Pellentesque pellentesque orci quam, nec tempus nibh congue ut.<br/></dd>
								<dt><i class="fa fa-heart"></i>Cardiac Clinic</dt>

								<dd>Nulla nec rutrum tortor, in fermentum nisl.accumsan pulvinar scelerisque tincidunt, adipiscing eget risus.<br/></dd>

								<dt><i class="fa fa-scissors"></i>General Surgery</dt>
								<dd>Sed purus purus, tincidunt eget malesuada et, molestie ut eros. Fusce blandit, sapien eu sollicitudin consectetur, ligula tellus pulvinar. Urna, quis facilisis magna dolor ac lacus.<br/></dd>

								<dt class="opened"><i class="fa fa-wheelchair"></i>Rehabilitation Studio</dt>
								<dd>Sed purus purus, tincidunt eget malesuada et, molestie ut eros. Fusce blandit, sapien eu sollicitudin consectetur, ligula tellus pulvinar. Urna, quis facilisis magna dolor ac lacus.<br/></dd>
							</dl>
						</section>
						<!--/ departments -->
					</div>
					
					<div class="grid-col grid-col-6">
						<!-- sevices -->
						<section class="widget widget-sevices">
							<div class="widget-title">Our Medical Services</div>
							<ul>
								<li><i class="fa fa-bookmark"></i><a>Cardiothoracic Surgery</a></li>
								<li><i class="fa fa-bookmark"></i><a>Cardiovascular Diseases</a></li>
								<li><i class="fa fa-bookmark"></i><a>Ophthalmology</a></li>
								<li><i class="fa fa-bookmark"></i><a>Dermatology</a></li>
								<li><i class="fa fa-bookmark"></i><a>General Surgery</a></li>
								<li><i class="fa fa-bookmark"></i><a>Consultative & Diagnostic</a></li>
							</ul>
						</section>
						<!--/ sevices -->
					</div>
				</div>
			</main>


			<footer class="page-footer">
				<a href="#" id="top-link" class="top-link"><i class="fa fa-angle-double-up"></i></a>
				
				<div class="grid-row">
					<div class="grid-col grid-col-4">
						<section class="widget-alt last-news">
							<div class="widget-icon"></div>
							<div class="widget-title">Virtual Clinic</div>
							<ul>
								<li>Donec quis condimentum leo, et congue dolor. Integer auctor facilisis odio. Duis vitae nibh tristique, consectetur lacus a, facilisis rutrum enim.</li>
								<li>Cras fermentum interdum dapibus. Maecenas imperdiet, consectetur adipiscing magna nec odio cursus, vitae consequat ante.</li>
							</ul>
						</section>
					</div>
					
					<div class="grid-col grid-col-4">
						<section class="widget-alt location">
							<div class="widget-icon"></div>
							<div class="widget-title">Location</div>
							<address>Aptech IIC Chundrigar Road Karachi , Pakistan</address>
							<ul>
								<li><i class="fa fa-phone"></i>+923082107445</li>
								<li><i class="fa fa-at">@</i>aptech@gmail.com</li>
								<li><i class="fa fa-skype"></i>Aptech</li>
							</ul>
							<nav>
								<a href="#" class="fa fa-twitter"></a>
								<a href="#" class="fa fa-facebook"></a>
								<a href="#" class="fa fa-instagram"></a>
							</nav>
						</section>	
					</div>
					

					
					<div class="grid-col grid-col-3">
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
					</div>
				</div>
			</footer>
			<div class="copyrights">Copyrights ©2021: Virtual Clinic </div>
		</div>
		<?php include('include/footer-links.php') ?>

	</body>

</html>