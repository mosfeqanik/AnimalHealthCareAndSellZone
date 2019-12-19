
<!DOCTYPE html>
<html lang="en">

<head>
	<title>About</title>
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
	<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- font-awesome icons -->
	<!-- //Custom Theme files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Limelight" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
	    rel='stylesheet' type='text/css'>
	<!-- //web-fonts -->
</head>

<body>
	<?php 
		include'header.php';
	?>

	<!-- contact -->
		<!-- welcome -->
	<div class="welcome agileits">
		<div class="container">
			<h3 class="agileits-title">Developers</h3>
			
			<div class="welcome-w3lsrow2">
			<div class="row">	
				<div class="col-md-4 col-sm-12 team-grid">
				</div>
				<div class="col-md-4 col-sm-12 team-grid">
					<div class="flip-container tu-of-hidden">
						<div class="flipper">
							<div class="front front-width">
								<img src="images/img3.jpg" alt="" />
							</div>
							<div class="back">
								<h4>Farjana Rahman Aishy</h4>
								<p>Pet Lover</p>
								<div class="w3l-social">
									<ul>
										<li><a href="https://www.facebook.com/Farjana.Aishy"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://twitter.com/mehnazmoutushee"><i class="fa fa-twitter"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 team-grid">
				</div>
			</div>
			</div>
		</div>
	</div>
	<!-- //contact -->

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
	<!-- //copy right end here -->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!-- password-script -->
	
	<!-- //password-script -->

	<script src="js/SmoothScroll.min.js"></script>
	<!---->
	<script src="js/jquery.chocolat.js"></script>
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
	<!--light-box-files -->
	<script type="text/javascript">
		$(function () {
			$('.w3gallery-grids a').Chocolat();
		});
	</script>

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
