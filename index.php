<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Pets Care Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom Theme files -->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<!-- easy-responsive-tabs -->

	<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- font-awesome icons -->
	<!-- //Custom Theme files -->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Limelight" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Junge" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
	    rel='stylesheet' type='text/css'>
	<!-- //web-fonts -->
</head>

<body>
	<!-- banner -->
	<div class="agileits-banner">
		<div class="bnr-agileinfo">
			<div class="banner-top w3layouts">
				<div class="container">
					<ul class="agile_top_section">
						<li>
							<!--<p>animal infomation zone!</p> -->
						</li>
						<li>
							<p><span class="glyphicon glyphicon-earphone"></span> +88 0173 478770 </p>
						</li>
						<li><a class="sign" data-toggle="modal" data-target="#myModal2"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a>							</li>
					</ul>
				</div>
			</div>
			
			<div class="banner-w3text w3layouts">
				<h3 class="w3ls_agile">New Helping Hand</h3>
				<h2>Animal Care Zone</h2>
			</div>
			<!-- navigation -->
			<div class="top-nav w3-agiletop">
				<div class="agile_inner_nav_w3ls">
					<div class="navbar-header w3llogo">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a href="index.php">Pets Care</a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<div class="w3menu navbar-left">
							<ul class="nav navbar">
								<li><a href="index.php" class="active">Home</a></li>
								<li><a href="Catagories.php">Medicare</a></li>
								<li><a href="Catagories.php">Catagories</a></li>
								<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-letters="Pages">Products</span><span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="foods.php">Foods</a></li>
										<li><a href="accessories.php">Accessories</a></li>
									</ul>
								</li>
								<li><a href="about.php">About</a></li>
								<li><a href="userProfile.php">User's profile</a></li>

							</ul>
						</div>
						<div class="w3ls-bnr-icons social-icon navbar-right">
							<a href="https://twitter.com/InfoanimalInfo"><i class="fa fa-twitter"></i></a>
							<a href="https://www.facebook.com/Animal-Information-zone-121638088549277/" class="social-button facebook"><i class="fa fa-facebook"></i></a>
							<a href="https://plus.google.com/u/0/" class="social-button google"><i class="fa fa-google-plus"></i></a>
							
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!-- //navigation -->
		</div>
	</div>
	<!-- //banner -->
	<!-- Modal1 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<div class="signin-form profile">
						<h3 class="agileinfo_sign">Sign In</h3>

						<div class="login-form">
							<form action="login.php" method="post">
								<div id="div_id_email" class="form-group required">
		                            	<label for="id_email" class="control-label col-md-4  requiredField"> E-mail<span class="asteriskField">*</span> </label>
			                            <div class="controls col-md-8 ">
			                                <input class="input-md emailinput form-control" id="id_email" name="email" placeholder="Your current email address" style="margin-bottom: 10px" type="email" required="" />
			                            </div>     
	                        		</div>
								<div id="div_id_password1" class="form-group required">
			                            <label for="id_password1" class="control-label col-md-4  requiredField">Password<span class="asteriskField">*</span> </label>
			                            <div class="controls col-md-8 "> 
			                                <input class="input-md textinput textInput form-control" id="id_password1" name="password1" placeholder="Give Your password" style="margin-bottom: 10px" type="password" required="" />
			                            </div>
			                        </div> 
								<div class="tp">
									<input type="submit" value="SignIn" name="submit">
								</div>
							</form>
						</div>
						<div class="login-social-grids">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
						<p><a data-toggle="modal" data-target="#myModal3"> Don't have an account?</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- Modal2 -->
	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<div class="signin-form profile">
<!--   sign up-->	<h3 class="agileinfo_sign">Sign Up</h3>
						<div class="login-form">
							<form action="View/register.php" method="post">
								<div id="div_id_select" class="form-group required">
									<label for="id_select"  class="control-label col-md-4  requiredField"> Select As
										<span class="asteriskField">*</span> 
									</label>
									<div class="controls col-md-8 "  style="margin-bottom: 10px">
										<label class="radio-inline">
		                                	<input type="radio" checked="checked" name="usertype" id="id_select_1" value="Vet"  style="margin-bottom: 10px">VET
		                                </label>
		                                <label class="radio-inline"> 
		                                	<input type="radio" name="usertype" id="id_select_2" value="Owner"  style="margin-bottom: 10px">OWNER
		                                </label>
									</div>	
								</div>
		                        <div id="div_id_username" class="form-group required">
		                        	<label for="id_username" class="control-label col-md-4  requiredField"> Username
		                            	<span class="asteriskField">*</span> 
		                            </label>
		                            <div class="controls col-md-8 ">
		                            	<input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="username" placeholder="Choose your username" style="margin-bottom: 10px" type="text" />
		                            </div>
		                        </div>
		                        <div id="div_id_email" class="form-group required">
		                        	<label for="id_email" class="control-label col-md-4  requiredField"> E-mail
		                            	<span class="asteriskField">*</span> 
		                            </label>
		                            <div class="controls col-md-8 ">
		                                <input class="input-md emailinput form-control" id="id_email" name="email" placeholder="Your current email address" style="margin-bottom: 10px" type="email" />
		                            </div>
		                        </div>
		                        <div id="div_id_password" class="form-group required">
		                        	<label for="id_password" class="control-label col-md-4  requiredField">Password
		                        		<span class="asteriskField">*</span> 
		                        	</label>
		                            <div class="controls col-md-8 "> 
		                                <input class="input-md textinput textInput form-control" id="id_password" name="p" placeholder="Create a password" style="margin-bottom: 10px" type="password" />
		                            </div>
		                        </div>
		                        <div id="div_id_password" class="form-group required">
		                        	<label for="id_password" class="control-label col-md-4  requiredField">Confirm Password
		                        		<span class="asteriskField">*</span> 
		                        	</label>
		                            <div class="controls col-md-8 "> 
		                                <input class="input-md textinput textInput form-control" id="id_password" name="c" placeholder="Create a password" style="margin-bottom: 10px" type="password" />
		                            </div>
		                        </div>
		                        <div id="div_id_name" class="form-group required"> 
		                        	<label for="id_name" class="control-label col-md-4  requiredField"> Full name
		                        		<span class="asteriskField">*</span> 
		                            </label> 
		                            <div class="controls col-md-8 "> 
		                                <input class="input-md textinput textInput form-control" id="id_name" name="name" placeholder="Your Frist name and Last name" style="margin-bottom: 10px" type="text" />
		                            </div>
								</div>
		                        <div id="div_id_gender" class="form-group required">
		                        	<label for="id_gender"  class="control-label col-md-4  requiredField"> Gender
		                        		<span class="asteriskField">*</span> 
		                        	</label>
		                        	<div class="controls col-md-8 "  style="margin-bottom: 10px">
		                                 <label class="radio-inline"> 
		                                 	<input type="radio" name="gender" id="id_gender_1" value="Male"  style="margin-bottom: 10px">Male
		                                 </label>
		                                 <label class="radio-inline"> 
		                                 	<input type="radio" name="gender" id="id_gender_2" value="Female"  style="margin-bottom: 10px">Female 
		                                 </label>
		                            </div>
		                        </div>
		                        <div id="div_id_company" class="form-group required"> 
		                        	<label for="id_company" class="control-label col-md-4  requiredField"> Company name
		                            		<span class="asteriskField">*</span> 
		                            	 /Profession<span class="asteriskField">*</span> 
		                            	</label>
		                            <div class="controls col-md-8 "> 
		                                 <input class="input-md textinput textInput form-control" id="id_company" name="profession" placeholder="Your company name" style="margin-bottom: 10px" type="text" />
		                            </div>
		                        </div>
		                        <div id="div_id_number" class="form-group required">
		                             <label for="id_number" class="control-label col-md-4  requiredField"> Contact Number
		                             	<span class="asteriskField">*</span> 
		                             </label>
		                             <div class="controls col-md-8 ">
		                                 <input class="input-md textinput textInput form-control" id="id_number" name="contractnumber" placeholder="provide your number" style="margin-bottom: 10px" type="text" />
		                            </div> 
		                        </div>
		                        <div id="div_id_location" class="form-group required">
		                            <label for="id_location" class="control-label col-md-4  requiredField"> Your Location
		                            	<span class="asteriskField">*</span> 
		                            </label>
		                            <div class="controls col-md-8 ">
		                                <input class="input-md textinput textInput form-control" id="id_location" name="location" placeholder="Your Pincode and City" style="margin-bottom: 10px" type="text" />
		                            </div> 
		                        </div>
		                        <input type="submit" value="SignUp" name="submit" id="signup">
							</form>
						</div>
						<p><a href="#"> By clicking register, I agree to your terms</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //welcome -->
	

	<!-- about -->
	<div class="services">
		<div class="container">

			<div class="row">
    			<div class="col-sm-4" >
					<div class="csi-single-tab">
                        <div class="menu-thumb">
                        <a><img src="images/coverpic1.jpeg" alt=""></a>
                    	</div>
                    </div>
   				</div>
	   			
	    			<div class="col-sm-4" >
						<div class="csi-single-tab">
	                        <div class="menu-thumb">    
	                        <a><img src="images/coverpic2.jpeg" alt=""></a>       
							<p  style="text-align: justify;">Pets are humanizing . they remind us we have an obligation and responsibility to preserve and nurture and care for all life.<br>
							Every animal has his or her story , his or her thoughts, daydreams and interests and fear joy and love. All deserve that the human animal afford them the respect of being cared for with glyphicon-arrow-righteat consideration for those interests or left in peace.</p>
		                	</div>
	   					</div>
					</div>

					<div class="col-sm-4" >
						<div class="csi-single-tab">
							<div class="menu-thumb">
							<a><img src="images/coverpic3.jpeg" alt=""></a>	
							</div>
						</div>
					</div>
				
			</div>


			<h3 class="agileits-title">Need More Services?</h3>
			<div class="top_tabs_agile">
				<div id="horizontalTab" class="top_tabs_agile">
					<ul class="resp-tabs-list">
						<li>
							<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>Dog Health Care
						</li>
						<li>
							<i class="fa fa-random" aria-hidden="true"></i> Pet Vaccinations
						</li>
						<li>
							<i class="fa fa-cogs" aria-hidden="true"></i> Support Adoption
						</li>
						<li>
							<i class="fa fa-shield" aria-hidden="true"></i>Pet Barber Service
						</li>
					</ul>
					<div class="resp-tabs-container">
						<div class="tab1">
							<div class="services-right-agileits">
								<h4>Dog Health Care</h4>
								<p class="para-agileits-w3layouts">“Dogs do speak, but only to those who know how to listen.”– Orhan Pamuk</p>
								<a href="medicare.php" class="button button-isi"><span>Read More </span><i class="icon glyphicon glyphicon-arrow-right"></i></a>
							</div>
						</div>

						<div class="tab2">
							<div class="services-right-agileits bar-grids bargrids-left">
								<h4>Pet Vaccinations </h4>
								<h6>Vaccination 1 <span> 80% </span></h6>
								<div class="progress">
									<div class="progress-bar progress-bar-striped active" style="width: 80%">
									</div>
								</div>
								<h6>Vaccination 2 <span> 70% </span></h6>
								<div class="progress  w3-agile">
									<div class="progress-bar progress-bar-striped active" style="width: 70%">
									</div>
								</div>
								<h6>Vaccination 3<span>90% </span></h6>
								<div class="progress  w3-agile">
									<div class="progress-bar progress-bar-striped active" style="width: 90%">
									</div>
								</div>
								<h6>Vaccination 4<span> 75% </span></h6>
								<div class="progress  w3-agile prgs-w3agile-last">
									<div class="progress-bar progress-bar-striped active" style="width: 75%">
									</div>
								</div>
							</div>

						</div>
						<div class="tab3">
							<div class="services-right-agileits img-top">
								<h4>Support Adoption</h4>
								<p class="para-agileits-w3layouts">dog is dog.</p>
								<a href="medicare.php" class="button button-isi"><span>Read More </span> <i class="icon glyphicon glyphicon-arrow-right"></i></a>
							</div>
						</div>
						<div class="tab4">
							<div class="services-right-agileits">
								<h4>Pet Barber Service</h4>
								<p class="para-agileits-w3layouts">Pet care zone</p>
								<a href="medicare.php" class="button button-isi"><span>Read More </span> <i class="icon glyphicon glyphicon-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<!-- w3-agilesale -->
	<div class="w3-agilesale welcome">
		<div class="container">
			<h3 class="agileits-title two">Pet Adoption. Be Part of <span> Something Beautiful!</span></h3>
			<a href="about.php" class="button button-isi"><span>Contact Us </span><i class="icon glyphicon glyphicon-arrow-right"></i></a>
		</div>
	</div>
	<!-- //w3-agilesale -->
	<!-- subscribe -->
	
	<!-- //subscribe -->
	<!-- copy rights start here -->
	<div class="copy-w3right">
		<div class="container">
			<div class="top-nav bottom-w3lnav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="medicare.php">Medicare</a></li>
					<li><a href="catagories.php">Catagories</a></li>
					<li><a href="foods.php">Foods</a></li>
					<li><a href="accessories.php">Accessories</a></li>
					<li><a href="about.php">About</a></li>
				</ul>
			</div>
			<p>© 2019 Animal Care Zone : All Rights Reserved</p>
		</div>
	</div>
	<!-- text-effect -->
	<script type="text/javascript" src="js/jquery.transit.js"></script>
	<script type="text/javascript" src="js/jquery.textFx.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('.w3ls_agile').textFx({
				type: 'fadeIn',
				iChar: 100,
				iAnim: 1000
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('.w3_text').textFx({
				type: 'fadeIn',
				iChar: 100,
				iAnim: 1000
			});
		});
	</script>

	<!-- script for responsive tabs -->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!-- script for responsive tabs -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/bootstrap.js"></script>
</body>

</html>