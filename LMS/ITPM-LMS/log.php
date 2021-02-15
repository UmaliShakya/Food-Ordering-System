

<?php
require ("connection.php");

session_start();

date_default_timezone_set("Asia/Colombo");
$time =  date("H:i:sa");
$date = date("Y-m-d");

$_SESSION['id']=null;
$_SESSION['login']=0;

$log_req = "SELECT * FROM `log` WHERE date = '{$date}'";
$res_log = mysqli_query($connection, $log_req);
$log = mysqli_fetch_array($res_log);


if(isset($_POST['sch'])){

    $date1 = $_POST['date'];

    $log_req = "SELECT * FROM `log` WHERE date = '{$date1}'";
    $res_log = mysqli_query($connection, $log_req);
    $log = mysqli_fetch_array($res_log);


    if (empty($date1)){
        $log_req = "SELECT * FROM `log` WHERE date = '{$date}'";
        $res_log = mysqli_query($connection, $log_req);
        $log = mysqli_fetch_array($res_log);
    }

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Course</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Course Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/login.css">
</head>
<body>

<div class="super_container">

    <!-- Header -->

    <?php require_once ('main.php')?>

    <!-- Menu -->

    <div class="container-fluid" style="margin-top: 200px" >
       <h3 class="text-center">SYSTEM LOG</h3>
        <div class="container  ">
            <div class="container-fluid">

                <form action="log.php" method="post">
                    <input type="date"  name="date">
                    <input type="submit"  value="search" name="sch">
                </form>

            </div>

            <div class="list-group-item mt-3 mb-5">
                <?php echo $log['status']?>
            </div>
        </div>
    </div>

</div>


<!-- Footer -->

<footer class="footer">
    <div class="container">

        <!-- Newsletter -->

        <div class="newsletter">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>Subscribe to newsletter</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col text-center">
                    <div class="newsletter_form_container mx-auto">
                        <form action="post">
                            <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
                                <input id="newsletter_email" class="newsletter_email" type="email" placeholder="Email Address" required="required" data-error="Valid email is required.">
                                <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <!-- Footer Content -->

        <div class="footer_content">
            <div class="row">

                <!-- Footer Column - About -->
                <div class="col-lg-3 footer_col">

                    <!-- Logo -->
                    <div class="logo_container">
                        <div class="logo">
                            <img src="images/logo.png" alt="">
                            <span>course</span>
                        </div>
                    </div>

                    <p class="footer_about_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum, tempor lacus.</p>

                </div>

                <!-- Footer Column - Menu -->

                <div class="col-lg-3 footer_col">
                    <div class="footer_column_title">Menu</div>
                    <div class="footer_column_content">
                        <ul>
                            <li class="footer_list_item"><a href="#">Home</a></li>
                            <li class="footer_list_item"><a href="#">About Us</a></li>
                            <li class="footer_list_item"><a href="courses.html">Courses</a></li>
                            <li class="footer_list_item"><a href="news.html">News</a></li>
                            <li class="footer_list_item"><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Column - Usefull Links -->

                <div class="col-lg-3 footer_col">
                    <div class="footer_column_title">Usefull Links</div>
                    <div class="footer_column_content">
                        <ul>
                            <li class="footer_list_item"><a href="#">Testimonials</a></li>
                            <li class="footer_list_item"><a href="#">FAQ</a></li>
                            <li class="footer_list_item"><a href="#">Community</a></li>
                            <li class="footer_list_item"><a href="#">Campus Pictures</a></li>
                            <li class="footer_list_item"><a href="#">Tuitions</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Column - Contact -->

                <div class="col-lg-3 footer_col">
                    <div class="footer_column_title">Contact</div>
                    <div class="footer_column_content">
                        <ul>
                            <li class="footer_contact_item">
                                <div class="footer_contact_icon">
                                    <img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                </div>
                                Blvd Libertad, 34 m05200 Arévalo
                            </li>
                            <li class="footer_contact_item">
                                <div class="footer_contact_icon">
                                    <img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                </div>
                                0034 37483 2445 322
                            </li>
                            <li class="footer_contact_item">
                                <div class="footer_contact_icon">
                                    <img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                </div>hello@company.com
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer Copyright -->

        <div class="footer_bar d-flex flex-column flex-sm-row align-items-center">


        </div>
        <div class="footer_social ml-sm-auto">
            <ul class="menu_social">
                <li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                <li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
            </ul>
        </div>
    </div>


</footer>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>
</html>

