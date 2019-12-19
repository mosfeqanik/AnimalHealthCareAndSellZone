
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Foods</title>
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
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Limelight" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
	    rel='stylesheet' type='text/css'>
	<!-- //web-fonts -->


<script type="text/javascript">

      	
     function cat(){
      		var num1,res;
      		num1=Number(document.formcalc.txtnum1.value);

      		if (num1>0 && num1<=250) {
      		document.formcalc.textres.value=" 100 gm ";	
    	  	} else if (num1>250 && num1<=400) {
      		document.formcalc.textres.value=" 200 gm ";
      		}else if (num1>400 && num1<=500) {
      		document.formcalc.textres.value=" 300 gm ";
      		}else if (num1>500&& num1<=600) {
      		document.formcalc.textres.value=" 350 gm ";
      		}else if (num1>600 && num1<=900) {
      		document.formcalc.textres.value=" 500 gm ";
      		}else if (num1>900 && num1<=1300) {
      		document.formcalc.textres.value=" 550 gm ";
      		}else if (num1>1300 && num1<=1500) {
      		document.formcalc.textres.value=" 600 gm ";
      		}else if (num1>1500 && num1<=2000) {
      		document.formcalc.textres.value=" 750 gm ";
      		}else if (num1>2000 && num1<=2500) {
      		document.formcalc.textres.value=" 850 gm ";
      		}else if (num1>2500 && num1<=3000) {
      		document.formcalc.textres.value=" 850 gm ";
      		}else if (num1>3000) {
      		document.formcalc.textres.value=" Cross The age Limit ";
      		}else
      		document.formcalc.textres.value=" Wrong Input! ";		
    }

</script>





</head>

<body>
	<!-- banner -->
    <?php
    include'header.php';
    ?>



<div class="jumbotron text-center">
  <h1>SEE YOUR CATS INFORMATION</h1>
  <p>Please input your Cats weight to see Nutrition</p> 
</div>



		<div class="container">	  
			<div class="row">
			    <div class="col-sm-12"> 
			      	<div align="center" style="border: 1px solid white" >    <h3>Cats Food</h3>
			      		<img src="images/cat.jpg" class="img-responsive" alt="Cat" />
			      			<p>Please Enter Your Cat Weight (kilogram only) </p>
			      				<form name="formcalc">
			   					<input type="text" name="txtnum1"> </br></br>
	   							<input type="button" value="Suggested Feeding Amount" onclick="cat()"></br></br>		  
	   							<output type="text" name="textres"> </br></br>  </output> 
			      				</form>
			   		</div>
				</div>
		    </div>
		</div>


	

	<!-- copy rights start here -->
	<div class="copy-w3right">
			<p>© 2019 Animal Care Zone : All Rights Reserved </p>
		</div>
	</div>
	<!-- //copy right end here -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- password-script -->
	<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

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