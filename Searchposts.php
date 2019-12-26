<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search POST and Comment </title>
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
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box;}

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
        .blogShort{ border-bottom:8px solid #ddd;
            padding-bottom:8px; }
        .btn-blog {
            color: #ffffff;
            background-color: #37d980;
            border-color: #37d980;
            border-radius:0;
            margin-bottom:10px
        }
        .btn-blog:hover,
        .btn-blog:focus,
        .btn-blog:active,
        .btn-blog.active,
        .open .dropdown-toggle.btn-blog {
            color: white;
            background-color:#34ca78;
            border-color: #34ca78;
        }
        h2{color:#34ca78;}
        .margin10{margin-bottom:10px; margin-right:10px;}
        .container {
            border-radius: 5px;
            padding: 20px;
        }
        /* Styles for wrapping the search box */

        .main {
            width: 50%;
            margin: 50px auto;
        }

        /* Bootstrap 3 text input with search icon */

        .has-search .form-control-feedback {
            right: initial;
            left: 0;
            color: #ccc;
        }

        .has-search .form-control {
            padding-right: 12px;
            padding-left: 34px;
        }

    </style>
    <!-- font-awesome icons -->
    <!-- //Custom Theme files -->

    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Limelight" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>
    <!-- //web-fonts -->
</head>
<?php

include"header.php";
include "Src/Database.php";
$postandCommentdata= new Database();
$allPostsAndComment=$postandCommentdata->readcommentdata();

?>

<div class="search">
    <div class="container">
        <div class="row">
            <div class="main">
            <!-- Actual search box -->
                <div class="form-group has-feedback has-search">
                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                    <input type="text" class="form-control" placeholder="Search" id="search">
                </div>
            </div>
            <br>
            <br>

        </div>
    </div>
</div>
<!-- //gallery -->
<div class="posts">
    <div class="container">
            <div class="row">
                <div class="col-md-10 blogShort" id="feedback" >

                </div>
            </div>
    </div>
</div>

<!-- /services -->
<div class="agile_secives " id="services">
    <div class="container">
        <h3 class="agileits-title two" style="color: #000;font-family: Arial; ">What we Do</h3>
        <div class="markets-grids">
            <div class="col-md-4 w3ls-markets-grid">
                <div class="agileits-icon-grid">
                    <div class="icon-left">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </div>
                    <div class="icon-right" >
                        <h5 style="color: #000;font-family: Arial; ">Dog Walking</h5>
                        <p style="color: #292727ab"> Give traingin how to dog waking ...</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4 w3ls-markets-grid">
                <div class="agileits-icon-grid">
                    <div class="icon-left">
                        <i class="fa fa-ambulance" aria-hidden="true"></i>
                    </div>
                    <div class="icon-right" style="color: #000">
                        <h5 style="color: #000;font-family: Arial; ">Pet Grooming</h5>
                        <p style="color: #292727ab">Feeding, Breading etc...</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4 w3ls-markets-grid">
                <div class="agileits-icon-grid">
                    <div class="icon-left">
                        <i class="fa fa-medkit" aria-hidden="true"></i>
                    </div>
                    <div class="icon-right">
                        <h5 style="color: #000;font-family: Arial; ">Pet Sitting</h5>
                        <p style="color: #292727ab">Training how to seatting and so on...</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4 w3ls-markets-grid">
                <div class="agileits-icon-grid">
                    <div class="icon-left">
                        <i class="fa fa-flask" aria-hidden="true"></i>
                    </div>
                    <div class="icon-right">
                        <h5 style="color: #000;font-family: Arial; ">Pet Daycare</h5>
                        <p style="color: #292727ab">Take care of your pets. Emergency services!...</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4 w3ls-markets-grid">
                <div class="agileits-icon-grid">
                    <div class="icon-left">
                        <i class="fa fa-line-chart" aria-hidden="true"></i>
                    </div>
                    <div class="icon-right">
                        <h5 style="color: #000;font-family: Arial; " >Veterinary Help</h5>
                        <p style="color: #292727ab">All kind of veterinary are avialable!...</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4 w3ls-markets-grid">
                <div class="agileits-icon-grid">
                    <div class="icon-left">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                    </div>
                    <div class="icon-right">
                        <h5 style="color: #000;font-family: Arial; ">Visiting Hours</h5>
                        <p style="color: #292727ab">Everyday at 9.00AM to 5.00 PM... </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //services -->

<!-- //Vet -->
<div class="container">

    <h1 class="jumbotron text-center" style="color: red;"> Vet Name & Address!</h1>

    <h2 align="center" style="color: green; padding-bottom: 20px;"> Vets in Dhaka </h2>
    <div class="row" style="padding-bottom: 20px;">

        <div class="col-sm-4">
            <div align="center" style="border: 1px solid red; padding-top: 35px;" >
                <h3>Dr.Siamak</h3>
                <p>**He attends house calls.<br>
                    Phone # 8917249;<br>
                    Cell # 01711561155<br>
                    Residence come chamber : H- 56, R- 9/B, Sector : 5, Uttara.<br>
                    .<br>
                    .<br>
                    .<br>
                    .<br>
                    .<br>
                    .<br>
                </p>
            </div>
        </div>

        <div class="col-sm-4">
            <div align="center" style="border: 1px solid red; padding-top: 35px;" >
                <h3>Dr. Motahar Hossain </h3>
                <p>  **He attends house calls.<br>
                    Enlisted vet of USA embassy<br>
                    Cell # 01711541070 <br>
                    Gulshan 2 Dcc Market, 2nd floor.<br>
                    Visitng House : 10/11 to 2pm (call the vet before going)
                    .<br>
                    .<br>
                    .<br>
                    .<br>
                    .<br>
                    .<br>
                </p>
            </div>
        </div>

        <div class="col-sm-4">
            <div align="center" style="border: 1px solid red;padding-top: 35px;" >
                <h3>Dr. K. B. M. Saiful Islam</h3>
                <p>** Home calls (on request)<br>
                    Vet & Pet Care<br>
                    https://www.facebook.com/vetnpet.care<br> 
                    Hotline: 01674-173-844;<br>
                    01711-120-108<br>
                    Sher-e-Bangla Agricultural University<br>
                    Sheikh Kamal Onushod Bhobon<br>
                    **Visiting hour: 5.30 Pm to 9 Pm<br>
                    ** Tele/Online Consultation (free).<br>
                    .<br>
                </p>
            </div>
        </div>
    </div>

    <div class="row" style="padding-bottom: 20px;">

        <div class="col-sm-4">
            <div align="center" style="border: 1px solid red; padding-top: 35px;" >
                <h3>Dr. Md. Luthfor Rahman</h3>
                <p>**He attends house Calls.<br>
                    Cell # 01552457085, 01731492093<br>
                    Central Veterinary Hospital<br>
                    48,Kazi Alauddin Road, Dhaka-1000<br>
                    Email: luthfor75@gmail.com<br>
                    Residene: Nikunja-2, Khilkhet, Dhaka..<br>
                    .<br>
                    .<br>
                    .<br>
                </p>
            </div>
        </div>

        <div class="col-sm-4">
            <div align="center" style="border: 1px solid red;padding-top: 35px;" >
                <h3>Dr.Azmat Ali</h3>
                <p>**He attends House calls<br>
                    Phone: 9883486, 01912-013615, 01715-078434<br>
                    Address: Gulshan Pet-Animal Clinic<br>
                    (A-Z Pet Animal Solution in Dhaka)<br>
                    4-5 DCC Super Market<br>
                    Gulshan-2, Dhaka-1212<br>
                    Visiting Hours: Call the vet before going.<br>
                    .<br>
                    .<br>
                </p>
            </div>
        </div>

        <div class="col-sm-4">
            <div align="center" style="border: 1px solid red;padding-top: 35px;" >
                <h3>Dr.Md.Shahidul Islam</h3>
                <p>Cell#01711364651<br>
                    Central Veterinary Hospital<br>
                    48,Kazi Alauddin Road, Dhaka-1000<br>
                    Another chamber : Gulshan 2 DCC market.<br>
                    .<br>
                    .<br>
                    .<br>
                    .<br>
                    .<br>
                </p>
            </div>
        </div>
    </div>

    <div class="row" style="padding-bottom: 20px;">

        <div class="col-sm-4">
            <div align="center" style="border: 1px solid red; padding-top: 35px;" >
                <h3>Dr.Kazi Mujibur Rahman</h3>
                <p>Ex-Chief vet of Central Veterinary Hospital,Dhaka<br>
                    Cell #01715016218</p>
            </div>
        </div>

        <div class="col-sm-4">
            <div align="center" style="border: 1px solid red; padding-top: 35px;" >
                <h3>Dr. Abdullah-Al-Mujahid</h3>
                <p> 01715728760.<br>
                    .<br>
                    .<br>
                </p>
            </div>
        </div>

        <div class="col-sm-4">
            <div align="center" style="border: 1px solid red; padding-top: 35px;" >
                <h3> Dr.Mohammad Shariful Haque</h3>
                <p> Phone # 8619706; Cell # 0173046585<br>
                    ElephantRoad. .<br>
                    .<br>
                </p>
            </div>
        </div>
    </div>

    <div class="row" style="padding-bottom: 20px;">

        <div class="col-sm-4">
            <div align="center" style="border: 1px solid red;padding-top: 35px;" >
                <h3>Dr. Lf. Col Shahjada </h3>
                <p>Cell # 01711123288 Bangladesh Army (vet)</p>
            </div>
        </div>

        <div class="col-sm-4">
            <div align="center" style="border: 1px solid red;padding-top: 35px;" >
                <h3>Dr. Aravinda</h3>
                <p> Cell # 01936617437
                    .<br>
                    .<br>
                </p>
            </div>
        </div>

    </div>



    <h2 align="center" style="color: green; padding-bottom: 20px; padding-top: 50px;"> Vets in Chittagong </h2>


    <div class="row" style="padding-bottom: 20px;">

        <div class="col-sm-4">
            <div align="center" style="border: 1px solid blue; padding-top: 35px;">
                <h3>Chittagaong Vetenary and Animal Science University</h3>
                <p>zakir hossain road, khulshi. ctg-4202</p>
            </div>
        </div>

        <div class="col-sm-4">
            <div align="center" style="border: 1px solid blue; padding-top: 35px;">
                <h3>Dr. Bibek Chandra</h3>
                <p>Cell # 01711057533 sutradhar
                    .<br>
                    .<br>
                    .<br>
                </p>
            </div>
        </div>

        <div class="col-sm-4">
            <div align="center" style="border: 1px solid blue;   padding-top: 35px">
                <h3>Dr.Monowar sayeed</h3>
                <p>Cell # 01736930901 pallab.<br>
                    .<br>
                    .<br>

                </p>
            </div>
        </div>

    </div>


    <div class="row" style="padding-bottom: 20px;">

        <div class="col-sm-4">
            <div align="center" style="border: 1px solid blue;padding-top: 35px">
                <h3>Dr. Morshed</h3>
                <p>Cell # 01192046813</p>
            </div>
        </div>

        <div class="col-sm-4">
            <div align="center" style="border: 1px solid blue;padding-top: 35px">
                <h3>Dr. Farhad</h3>
                <p>Cell # 01711172139</p>
            </div>
        </div>

    </div>


    <h2 align="center" style="color: green; padding-bottom: 20px; padding-top: 50px;"> Vets in Sylhet </h2>

    <div class="row" style="padding-bottom: 20px;">

        <div class="col-sm-4">
            <div align="center" style="border: 1px solid blue;padding-top: 35px">
                <h3>Dr. A T M Mahbub E Elahi</h3>
                <p>Professor, Dept of Microbiology, SAU<br>
                    Cell # 01711301042<br>
                    Email: atm.mahbub.elahi@gmail.com</p>
            </div>
        </div>

        <div class="col-sm-4">
            <div align="center" style="border: 1px solid blue;padding-top: 35px">
                <h3>Dr. Syed Sayem Uddin Ahmed</h3>
                <p>Dept of Public Health<br>
                    Cell # 01947706956<br>
                    Email: sayeem_2000@yahoo.com</p>
            </div>
        </div>

        <div class="col-sm-4">
            <div align="center" style="border: 1px solid blue;padding-top: 35px">
                <h3>DR. Animesh Roy</h3>
                <p>VS, SAU Vet Clinics<br>
                    Cell # 01717896167<br>
                    Email: royanimeshvet@yahoo.com.<br>
                    .<br>
                </p>
            </div>
        </div>

    </div>

    <div class="row" style="padding-bottom: 20px;">

        <div class="col-sm-4">
            <div align="center" style="border: 1px solid blue;padding-top: 35px">
                <h3>DR. Mahbub</h3>
                <p>VS, District Vet. Hospital, Sylhet<br>
                    Cell # 01711287533
                    .<br>
                    .<br>
                </p>
            </div>
        </div>

        <div class="col-sm-4">
            <div align="center" style="border: 1px solid blue;padding-top: 35px">
                <h3>Dr. Rofiqul Islam</h3>
                <p>Dept of Medicine,SAU <br>
                    Cell # 01199008496
                    Email : dr.rafiqsau@yahoo.com</p>
            </div>
        </div>

    </div>

</div>



<?php
include "footer.php";
?>
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
<!-- js -->
<script src="js/jquery.js"></script>
<script src="js/custom.js"></script>
<!-- //js -->
<script src="js/bootstrap.js"></script>

</body>

</html>
