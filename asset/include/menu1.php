	
<?php

function country(){
$ip = $_SERVER['REMOTE_ADDR'];
//$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
return $details->country; 
}

?>
<!-- header-top start -->
				<!-- classes:  -->
				<!-- "dark": dark version of header top e.g. class="header-top dark" -->
				<!-- "colored": colored version of header top e.g. class="header-top colored" -->
				<!-- ================ -->
				<div class="header-top dark ">
					<div class="container">
						<div class="row">
							<div class="col-xs-3 col-sm-6 col-md-9">
								<!-- header-top-first start -->
								<!-- ================ -->
								<div class="header-top-first clearfix">
									<ul class="social-links circle small clearfix hidden-xs">
										<li class="twitter"><a target="_blank" href="https://twitter.com/justaiotechnolo"><i class="fa fa-twitter"></i></a></li>
										<li class="skype"><a target="_blank" href="skype:shamimul111?call"><i class="fa fa-skype"></i></a></li>
										<li class="linkedin"><a target="_blank" href="https://www.linkedin.com/pub/just-aio-techchnology/62/534/887"><i class="fa fa-linkedin"></i></a></li>
										<li class="googleplus"><a target="_blank" href="https://plus.google.com/+Justaio"><i class="fa fa-google-plus"></i></a></li>
										<li class="youtube"><a target="_blank" href="https://www.youtube.com/c/Justaio"><i class="fa fa-youtube-play"></i></a></li>
										
										<li class="facebook"><a target="_blank" href="http://www.facebook.com/justaio"><i class="fa fa-facebook"></i></a></li>
										<li class="yelp"><a target="_blank" href="http://www.yelp.com/biz/justaio-technology-maple-valley"><i class="fa fa-pinterest"></i></a></li>
									</ul>
									<div class="social-links hidden-lg hidden-md hidden-sm circle small">
										<div class="btn-group dropdown">
											<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
											<ul class="dropdown-menu dropdown-animation">
												<li class="twitter"><a target="_blank" href="https://twitter.com/justaiotechnolo"><i class="fa fa-twitter"></i></a></li>
												<li class="skype"><a target="_blank" href="skype:shamimul111?call"><i class="fa fa-skype"></i></a></li>
												<li class="linkedin"><a target="_blank" href="https://www.linkedin.com/pub/just-aio-techchnology/62/534/887"><i class="fa fa-linkedin"></i></a></li>
												<li class="googleplus"><a target="_blank" href="https://plus.google.com/+Justaio"><i class="fa fa-google-plus"></i></a></li>
												<li class="youtube"><a target="_blank" href="https://www.youtube.com/c/Justaio"><i class="fa fa-youtube-play"></i></a></li>
												
												<li class="facebook"><a target="_blank" href="http://www.facebook.com/justaio"><i class="fa fa-facebook"></i></a></li>
												<li class="pinterest"><a target="_blank" href="https://www.pinterest.com/justaio/"><i class="fa fa-pinterest"></i></a></li>
                                                                                                <li><a id="href2" target="_blank" href="http://www.2findlocal.com/b/11521784">
<img class="anchorImage" alt="just aio technology" src="http://www.2findlocal.com/Set/Images/2.png">
</a></li>

<li><a id="href3" target="_blank" href="http://go.favecentral.com/11521784">
<img class="anchorImage" alt="just aio technology" src="http://www.favecentral.com/Set/Images/fc.png">
</a></li>
											</ul>
										</div>
									</div>
									<ul class="list-inline hidden-sm hidden-xs">
										
										<li><i class="fa fa-phone pr-5 pl-10"></i><?php if(country()!='BD'){echo "+1 (718) 215 0012";} Else echo '+1 (718) 215 0012'; ?></li>
										<li><i class="fa fa-envelope-o pr-5 pl-10"></i> info@aiotech.us</li>
									</ul>
								</div>
								<!-- header-top-first end -->
							</div>
							<div class="col-xs-9 col-sm-6 col-md-3">

								<!-- header-top-second start -->
								<!-- ================ -->
								<div id="header-top-second"  class="clearfix">

									<!-- header top dropdowns start -->
									<!-- ================ -->
									<div class="header-top-dropdown text-right">
										<div class="btn-group">
											<a href="billing/register.php" class="btn btn-default btn-sm"><i class="fa fa-user pr-10"></i> Sign Up</a>
										</div>
										<div class="btn-group dropdown">
											<button type="button" class="btn dropdown-toggle btn-default btn-sm" data-toggle="dropdown"><i class="fa fa-lock pr-10"></i> Login</button>
											<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
												<li>
													<form action="billing/dologin.php" method="post" class="login-form margin-clear">
														<div class="form-group has-feedback">
                                                                                                    <input type="hidden" name="token" value="7f15da8faa58d821ecddfd691737ceda1bedf283" />
															<label class="control-label">Email Address:</label>
													<input type="email" name="username" class="form-control" id="inputEmail" placeholder="Enter email" autofocus>
															<i class="fa fa-user form-control-feedback"></i>
														</div>
														<div class="form-group has-feedback">
															<label class="control-label">Password</label>
															<input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
															<i class="fa fa-lock form-control-feedback"></i>
														</div>
									<button type="submit" id="login" value="Login" class="btn btn-gray btn-sm">Log In</button>
														<span class="pl-5 pr-5">or</span>
														<a href="billing/register.php" class="btn btn-default btn-sm">Sing Up</a>
														<ul>
															<li><a href="billing/pwreset.php">Forgot your password?</a></li>
														</ul>
														<span class="text-center">Login with</span>
														<ul class="social-links circle small colored clearfix">
															<li class="facebook"><a target="_blank" href="https://www.facebook.com/justaio"><i class="fa fa-facebook"></i></a></li>
															<li class="twitter"><a target="_blank" href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
															<li class="googleplus"><a target="_blank" href="http://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
														</ul>
													</form>
												</li>
											</ul>
										</div>
									</div>
									<!--  header top dropdowns end -->
								</div>
								<!-- header-top-second end -->
							</div>
						</div>
					</div>
				</div>
				<!-- header-top end -->

				<!-- header start -->
				<!-- classes:  -->
				<!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
				<!-- "dark": dark version of header e.g. class="header dark clearfix" -->
				<!-- "full-width": mandatory class for the full-width menu layout -->
				<!-- "centered": mandatory class for the centered logo layout -->
				<!-- ================ -->
				<header class="header  fixed   clearfix">

					<div class="container">
						<div class="row">
							<div class="col-md-3">
								<!-- header-left start -->
								<!-- ================ -->
								<div class="header-left clearfix">

									<!-- logo -->
									<div id="logo" class="logo">
										<a href="index.php"><img id="logo_img" src="http://aiotech.us/images/faio-tech-logo.png" alt="AIO Technologies"></a>
									</div>

									<!-- name-and-slogan -->


								</div>
								<!-- header-left end -->

							</div>
							<div class="col-md-9">

								<!-- header-right start -->
								<!-- ================ -->
								<div class="header-right clearfix">

								<!-- main-navigation start -->
								<!-- classes: -->
								<!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
								<!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
								<!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
								<!-- ================ -->
								<div class="main-navigation  animated with-dropdown-buttons">

									<!-- navbar start -->
									<!-- ================ -->
									<nav class="navbar navbar-default" role="navigation">
										<div class="container-fluid">

											<!-- Toggle get grouped for better mobile display -->
											<div class="navbar-header">
												<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>

											</div>

											<!-- Collect the nav links, forms, and other content for toggling -->
											<div class="collapse navbar-collapse" id="navbar-collapse-1">
												<!-- main-menu -->
												<ul class="nav navbar-nav ">
													<li class="active">
														<a href="index.php">Home</a></li>
														<li class="dropdown  mega-menu">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services</a>
														<ul class="dropdown-menu">
															<li>
                                                            <div class="row">
								<div class="col-sm-3">
									<div class="image-box style-2 mb-20">
										<div class="overlay-container overlay-visible">
											<img src="images/menu/software-development.png" alt="">
											<a href="app-development.php" class="overlay-link"><i class="fa fa-link"></i></a>
											<div class="overlay-bottom hidden-xs">
												<div class="text">
													<p class="lead margin-clear text-left">App Development</p>
												</div>
											</div>
										</div>

									</div>
								</div>
								<div class="col-sm-3">
									<div class="image-box style-2 mb-20">
										<div class="overlay-container overlay-visible">
											<img src="images/menu/web-design.jpg" alt="">
											<a href="web-development-company.php" class="overlay-link"><i class="fa fa-link"></i></a>
											<div class="overlay-bottom hidden-xs">
												<div class="text">
													<p class="lead margin-clear text-left">Web Design</p>
												</div>
											</div>
										</div>

									</div>
								</div>
								<div class="col-sm-3">
									<div class="image-box style-2 mb-20">
										<div class="overlay-container overlay-visible">
											<img src="images/menu/domain-hosting.jpg" alt="">
											<a href="best-domain-hosting.php" class="overlay-link"><i class="fa fa-link"></i></a>
											<div class="overlay-bottom hidden-xs">
												<div class="text">
													<p class="lead margin-clear text-left">Domain & Hosting</p>
												</div>
											</div>
										</div>

									</div>
								</div>

                                	<div class="col-sm-3">
									<div class="image-box style-2 mb-20">
										<div class="overlay-container overlay-visible">
											<img src="images/menu/ecommerce.jpg" alt="">
											<a href="#" class="overlay-link"><i class="fa fa-link"></i></a>
											<div class="overlay-bottom hidden-xs">
												<div class="text">
													<p class="lead margin-clear text-left">E-commerce</p>
												</div>
											</div>
										</div>

									</div>
								</div>

                                	<div class="col-sm-3">
									<div class="image-box style-2 mb-20">
										<div class="overlay-container overlay-visible">
											<img src="images/menu/ppc.jpg" alt="">
											<a href="google-ad-management.php" class="overlay-link"><i class="fa fa-link"></i></a>
											<div class="overlay-bottom hidden-xs">
												<div class="text">
													<p class="lead margin-clear text-left">Ad Management</p>
												</div>
											</div>
										</div>

									</div>
								</div>
								<div class="col-sm-3">
									<div class="image-box style-2 mb-20">
										<div class="overlay-container overlay-visible">
											<img src="images/menu/seo.jpg" alt="">
											<a href="seo-service.php" class="overlay-link"><i class="fa fa-link"></i></a>
											<div class="overlay-bottom hidden-xs">
												<div class="text">
													<p class="lead margin-clear text-left">SEO Service</p>
												</div>
											</div>
										</div>

									</div>
								</div>
								<div class="col-sm-3">
									<div class="image-box style-2 mb-20">
										<div class="overlay-container overlay-visible">
											<img src="images/menu/social.jpg" alt="">
											<a href="#" class="overlay-link"><i class="fa fa-link"></i></a>
											<div class="overlay-bottom hidden-xs">
												<div class="text">
													<p class="lead margin-clear text-left">Social Media</p>
												</div>
											</div>
										</div>

									</div>
								</div>

                                	<div class="col-sm-3">
									<div class="image-box style-2 mb-20">
										<div class="overlay-container overlay-visible">
											<img src="images/menu/graphic.jpg" alt="">
											<a href="graphics-design.php" class="overlay-link"><i class="fa fa-link"></i></a>
											<div class="overlay-bottom hidden-xs">
												<div class="text">
													<p class="lead margin-clear text-left">Graphic Design</p>
												</div>
											</div>
										</div>

									</div>
								</div>
</div>

															</li>
														</ul>
													</li>
													<!-- mega-menu end -->
													<li class="dropdown ">
							<a href="about-us.php" class="dropdown-toggle" data-toggle="dropdown">About Us</a>
                                                        
													</li>
													<!-- mega-menu start -->

													<!-- mega-menu end -->
													<li class="dropdown ">
		  <a href="portfolio.php" class="dropdown-toggle" data-toggle="dropdown">Portfolio</a>
				<ul class="dropdown-menu">
                   <!--<li ><a href="portfolio.php">Call Center Solution Portfolio</a></li>-->
				   <li class="dropdown "><a href="portfolio.php">Web Design Portfolio</a>
				   <ul class="dropdown-menu">
				  
				   <li ><a href="realstate.php">Real Estate</a></li>
				   <li ><a href="painters.php">Painters</a></li>
				   <li ><a href="beautysalons.php">Beauty Salons</a></li>
				   <li ><a href="roofing-services.php">Roofing Services</a></li>
				   <li ><a href="restaurants.php">Restaurants</a></li>
				   <li ><a href="doctor-dentists.php">Doctor & Dentists</a></li>
				   <li ><a href="energy-resources.php">Energy & Resources</a></li>
				   <li ><a href="agriculture.php">Agriculture</a></li>
				   <li ><a href="plumber.php">Plumber</a></li>
				   <li ><a href="car-rental.php">Car Rental</a></li>
				   <li ><a href="repair-service.php">Repair Service</a></li>
				   <li ><a href="ecommerce.php">Ecommerce</a></li>
				   <li ><a href="business.php">Business</a></li>
				   <li ><a href="child-care.php">Child Care</a></li>
				   <li ><a href="transportation-shipping.php">Transportation & Shipping</a></li>
				   <li ><a href="air-conditioning-contractors.php">Air Conditioning Contractors</a></li>
				   <li ><a href="building-construction.php">Building & Construction</a></li>
				   </ul>
				   </li>
                   <li ><a href="portfolio.php">Domain & Hosting Portfolio</a></li>
                   <li ><a href="portfolio.php">Printing Services Portfolio</a></li>
                   <li ><a href="portfolio.php">Ad Management Portfolio</a></li>
                   <li ><a href="portfolio.php">SEO Service Portfolio</a></li>
                    <li ><a href="portfolio.php">Social Media Portfolio</a></li>
                   <li ><a href="portfolio.php">Graphic Design Portfolio</a></li>
                 </ul>
</li>
													<li class="dropdown ">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Plan & Pricing</a>
				<ul class="dropdown-menu">
                   <!--<li ><a href="call-center-software-price.php">Call Center Solution Price</a></li>-->
				   <li ><a href="web-development-pricing-plans.php">Web Design Price</a></li>
                   <li ><a href="hosting-price.php">Domain & Hosting Price</a></li>
                   
                   
                   <li ><a href="seo-service-price.php">SEO Service Price</a></li>
                  
                 </ul>
</li>
													<li class="dropdown ">
														<a href="opportunities.php" class="dropdown-toggle" data-toggle="dropdown">Career</a>
														<ul class="dropdown-menu">

															<li ><a href="opportunities.php">Opportunities</a></li>
															<li ><a href="apply-now.php">Apply Online</a></li>

														</ul>
													</li>
												</ul>
												<!-- main-menu end -->

													<!-- header buttons -->
												<div class="header-dropdown-buttons">
													<a href="contact-us.php" class="btn btn-sm hidden-xs btn-default">Contact Us <i class="fa fa-envelope-o pl-5"></i></a>
													<a href="contact-us.php" class="btn btn-lg visible-xs btn-block btn-default">Contact Us <i class="fa fa-envelope-o pl-5"></i></a>
												</div>
												<!-- header buttons end-->

											</div>

										</div>
									</nav>
									<!-- navbar end -->

								</div>
								<!-- main-navigation end -->
								</div>
								<!-- header-right end -->

							</div>
						</div>
					</div>

				</header>
				<!-- header end -->