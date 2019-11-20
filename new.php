<?php
session_start();
error_reporting(0);
include('Login/config.php');
if(strlen($_SESSION['username'])==0)
{   
    header('location:Login/index.php');
}
else{
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
<!--        <meta charset="UTF-8">-->
        <title>TimeLine</title>
		<link rel="stylesheet" type="text/css" href="style.css">
 <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">

        
        <style>
            
/*
            body{background: #f09433; 
background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); 
background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888',GradientType=1 );
                background-repeat: no-repeat;
            }    
*/
            .header{
                width: 100%;
                height: 130px;
            }
            .body{
                margin-left: 200px;
                margin-right: 200px;
                margin-bottom: 10px;
                background-image: url("hero2.png");
                background-size: contain;
            }
     .button{
  background-color: #f5640f;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
         transition: 0.5s; 
}
            .button:hover{
                background-color: #f1f1f1;
                color:black;
            }
            
            
            
.button4 {border-radius: 12px;}
</style>
		
    </head>

    <body>

        <div class="header">
        <center><IMG SRC="log.png" ALT="some text" WIDTH=200 HEIGHT=100></center>
        </div>
            
        <div class="body">
        <center><h2 style="color:#f9f9f9">Welcome to Receiver Portal<br><br><br><br>Select the item</h2>

   <button class="button button4" onclick=" window.open('Time/new1.php','_blank')">FOOD</button><br>
  

   <button class="button button4" onclick=" window.open('Time/new2.php','_blank')">CLOTHES</button><br>
   
   
   <button class="button button4" onclick=" window.open('Time/new3.php','_blank')">BOOKS</button><br>
  

   <button class="button button4" onclick=" window.open('Time/new4.php','_blank')">OTHERS</button><br>	
 
            </center></div>
 

        <div class="log">
            <a href="Time/logout.php">  <button class="button" style="vertical-align:middle" ><span>Logout </span></button></a>

            <a href="Time/Change.php">  <button class="button" style="vertical-align:middle" ><span>Change Password </span></button></a>
        </div>

    <a id = "contact"></a>
    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="foot-about">
                            <h2><a class="foot-logo" href="#"><img src="log.png" width="220px" alt="logo"></a></h2>

                            <p>AlmStock is a volunteer based, zero-funds organization that works to get surplus food, clothes, books etc. from the community to serve less fortunate people with the help of other Non Goverment Organizations.</p>

                            <ul class="d-flex flex-wrap align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <h2>Useful Links</h2>

                        <ul>
                            <li><a href="#">Privacy Polticy</a></li>
                            <li><a href="#">Become  a Volunteer</a></li>
                            <li><a href="#">Donate</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Causes</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-latest-news">
                            <h2>Latest News</h2>

                            <ul>
                                <li>
                                    <h3><a href="#">A new cause to help</a></h3>
                                    <div class="posted-date">MArch 12, 2018</div>
                                </li>

                                <li>
                                    <h3><a href="#">We love to help people</a></h3>
                                    <div class="posted-date">MArch 12, 2018</div>
                                </li>

                                <li>
                                    <h3><a href="#">The new ideas for helping</a></h3>
                                    <div class="posted-date">MArch 12, 2018</div>
                                </li>
                            </ul>
                        </div><!-- .foot-latest-news -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contact</h2>

                            <ul>
                                <li><i class="fa fa-phone"></i><span>+91 844 443 1122</span></li>
                                <li><i class="fa fa-envelope"></i><span>almstockfoundation@gmail.com</span></li>
                                <li><i class="fa fa-map-marker"></i><span>Main Str. no 45-46, b3, 56832, New Delhi, India</span></li>
                            </ul>
                        </div><!-- .foot-contact -->

                        <div class="subscribe-form">
                            <form class="d-flex flex-wrap align-items-center">
                                <input type="email" placeholder="Your email">
                                <input type="submit" value="send">
                            </form><!-- .flex -->
                        </div><!-- .search-widget -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->
    </footer>
    
    
    </body>


    </html>
<?php } ?>