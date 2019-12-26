
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



        function Goatscore(){
            var age,weight,ress;

            age=Number(document.formc.txtnum2.value);
            weight=Number(document.formc.txtnum3.value);

            if (age>0 && age<=3) {
                if (weight==2) {
                    document.formc.textres.value=" Body Condition Score : 5 out of 5.  weight is perfect!  Suggested Feeding Calories: 3000 gm ";
                }else if (weight>2) {
                    document.formc.textres.value=" Body Condition Score : 4 out of 5.  Over Weighted!  Suggested Feeding Calories: 2500 gm ";
                }else
                    document.formc.textres.value=" Body Condition Score : 4 out of 5. Under Weighted! Suggested Feeding Calories: 3500 gm ";
            }else if (age>3 && age<=6) {
                if (weight==4) {
                    document.formc.textres.value=" Body Condition Score : 5 out of 5. weight is perfect! Suggested Feeding Calories: 4000 gm ";
                }else if (weight>4) {
                    document.formc.textres.value=" Body Condition Score : 4 out of 5.  Over Weighted!  Suggested Feeding Calories: 3500 gm ";
                }else
                    document.formc.textres.value=" Body Condition Score : 4 out of 5. Under Weighted! Suggested Feeding Calories: 4500 gm ";
            }else if (age>6 && age<=9) {
                if (weight==6) {
                    document.formc.textres.value=" Body Condition Score : 5 out of 5. weight is perfect! Suggested Feeding Calories: 5000 gm ";
                }else if (weight>6) {
                    document.formc.textres.value=" Body Condition Score : 4 out of 5.  Over Weighted!  Suggested Feeding Calories: 4500 gm ";
                }else
                    document.formc.textres.value=" Body Condition Score : 4 out of 5. Under Weighted! Suggested Feeding Calories: 5500 gm ";
            }else if (age>9 && age<=12) {
                if (weight==8) {
                    document.formc.textres.value=" Body Condition Score : 5 out of 5. weight is perfect! Suggested Feeding Calories: 6000 gm ";
                }else if (weight>8) {
                    document.formc.textres.value=" Body Condition Score : 4 out of 5.  Over Weighted!  Suggested Feeding Calories: 5500 gm ";
                }else
                    document.formc.textres.value=" Body Condition Score : 4 out of 5. Under Weighted! Suggested Feeding Calories: 6500 gm ";
            }else if (age>12 && age<=15) {
                if (weight==10) {
                    document.formc.textres.value=" Body Condition Score : 5 out of 5. weight is perfect! Suggested Feeding Calories: 7000 gm ";
                }else if (weight>10) {
                    document.formc.textres.value=" Body Condition Score : 4 out of 5.  Over Weighted!  Suggested Feeding Calories: 6500 gm ";
                }else
                    document.formc.textres.value=" Body Condition Score : 4 out of 5. Under Weighted! Suggested Feeding Calories: 7500 gm ";
            }else if(age>15 && age<0){
                document.formc.textres.value="Age out of Range!";
            }else if (weight>20 && weight<0) {
                document.formc.textres.value="Weight out of Range!";
            }else
                document.formc.textres.value="Weight out of Range!";


        }



    </script>

</head>



<body>

<?php
include'header.php';
?>

<div class="jumbotron text-center">
    <h1>SEE YOUR GoatS INFORMATION</h1>
    <p>Please input your Goats Age to see Nutrition</p>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div align="center" style="border: 1px solid white" >    <h3>Goat</h3>
                <img src="images/Goat2.jpg" class="img-responsive" alt="Goat" style="width:450px;height: 600px;" />
                <p>Please Enter Your Goats Age and Weight for knowing Body Condition (Out of 5) and Calories! </p>
                <form name="formc">
                    <p>Age</p>
                    <input type="text" name="txtnum2"> </br></br>
                    <p>Weight</p>
                    <input type="text" name="txtnum3"> </br></br>

                    <input type="button" value="See Body Condition and needed Calories" onclick="Goatscore()"></br></br>
                    <output type="text" name="textres"> </br></br>  </output>
                </form>

            </div>
        </div>

    </div>
</div>


<!-- copy rights start here -->
<div class="copy-w3right">
    <p>© 2019 Animal Care Zone : All Rights Reserved</p>
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