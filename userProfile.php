
<!DOCTYPE html>
<html lang="en">

<head>
	<title>user profile</title>
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
</head>


	<?php

	include"header.php";
	?>

<body>
    <div class="userList">
        <div class="container">
            <div class="row">
                <div class="profile-user-info " style="margin: 30px">
                    <div class="profile-info-row">
                        <div class="profile-info-name" style="font-size:30px;"> User's list </div>
                    </div>
                    <?php
                    include 'Src/Database.php';
                    $show = new Database();
                    $userdata= $show->readUserdata();
                    foreach ($userdata as $data) {
                        ?>
                        <div class="profile-info-row">
                            <div class="profile-info-name" style="font-size:18px;"><a href="userProfile.php?user_id=<?php  echo $data['user_id'];?>"><?php echo $data['username'];?></a></div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php
    if(isset($_GET["user_id"]))
    {
    $id=$_GET["user_id"];
    $userdata=$show->ShowById($id);

    }
    ?>
	<div class="user-profile">
		<div class="container">
			<div id="user-profile-2" class="user-profile">
		<div class="tabbable">
			<ul class="nav nav-tabs padding-18" style="margin-bottom: 1em;font-size: 45px;padding: 20px;">
				<li class="active">
					<a data-toggle="tab" href="#home">
						<i class="ace-icon fa fa-user bigger-120" ></i>
						Profile
					</a>
				</li>

			</ul>
			<div class="tab-content no-border padding-24">
				<div id="home" class="tab-pane in active">
					<div class="row">
						<div class="col-xs-12 col-sm-3 center">
							<span class="profile-picture">
								<img class="editable img-responsive" alt=" Avatar" id="avatar2" src="http://bootdey.com/img/Content/avatar/avatar6.png">
							</span>

							<div class="space space-4"></div>

							<a href="#" class="btn btn-sm btn-block btn-success" style="margin-top: 20px;">
								<i class="ace-icon fa fa-plus-circle bigger-120"></i>
								<span class="bigger-110" >Update Your Info</span>
							</a>

							<a href="#" class="btn btn-sm btn-block btn-primary">
								<i class="ace-icon fa fa-envelope-o bigger-110"></i>
								<span class="bigger-110">Send a message</span>
							</a>
						</div><!-- /.col -->
                        <?php
                        foreach ($userdata as $data){


                        ?>
                        <div class="col-xs-12 col-sm-9">
                            <h4 class="blue">

                                <span class="middle" style="    font-size: 54px;"><?php echo $data['username'];?></span>

                                <span class="label label-purple arrowed-in-right">
									<i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
									online
								</span>
                            </h4>

                            <div class="profile-user-info">
                                <div class="profile-info-row">
                                    <div class="profile-info-name" style="font-size:18px;"> Type</div>
                                    <div class="profile-info-value" style="margin: 5px;">
                                        <span><?php echo $data['usertype'];?></span>
                                    </div>
                                </div>
                                <div class="profile-info-row">
                                    <div class="profile-info-name" style="font-size:18px;"> E-mail</div>
                                    <div class="profile-info-value" style="margin: 5px;">
                                        <span><?php echo $data['email'];?></span>
                                    </div>
                                </div>
                                <div class="profile-info-row">
                                    <div class="profile-info-name" style="font-size:18px;"> Gender</div>
                                    <div class="profile-info-value" style="margin: 5px;">
                                        <span><?php $data['gender'];?></span>
                                    </div>
                                </div>
                                <div class="profile-info-row">
                                    <div class="profile-info-name" style="font-size:18px;"> Company</div>
                                    <div class="profile-info-value" style="margin: 5px;">
                                        <span><?php $data['profession'];?></span>
                                    </div>
                                </div>
                                <div class="profile-info-row">
                                    <div class="profile-info-name" style="font-size:18px;"> Contract Number</div>

                                    <div class="profile-info-value" style="margin: 5px;">
                                        <i class="fa fa-map-marker light-orange bigger-110"></i>
                                        <span><?php $data['contractnumber'];?></span>
                                    </div>
                                </div>
                                <div class="profile-info-row">
                                    <div class="profile-info-name" style="font-size:18px;"> Location</div>

                                    <div class="profile-info-value" style="margin: 5px;">
                                        <i class="fa fa-map-marker light-orange bigger-110"></i>
                                        <span><?php echo $data['location'];?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="hr hr-8 dotted"></div>

                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <div class="space-20"></div>

                    <div class="row">
                        <div class="col-xs-2"></div>
                        <div class="col-xs-10 ">
                            <div class="widget-box transparent" style="margin: 36px;">
                                <div class="widget-header widget-header-small">
                                    <h4 class="widget-title smaller" style="font-size: 33px;">
                                        <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                                        About Me
                                    </h4>
                                </div>

                                <div class="widget-body">
                                    <div class="widget-main">
                                        <p>
                                            <?php echo $data['about'];?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                        ?>
				</div><!-- /#home -->

			</div>
		</div>
	</div>
		</div>
	</div>




    <?php
    include "footer.php";
    ?>
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