<?php


//session_start();


?>

<header class="header d-flex flex-row">
            <div class="header_content d-flex flex-row align-items-center">
                <!-- Logo -->
                <div class="logo_container">
                    <div class="logo">
                        <img src="images/logo.png" alt="">
                        <span>ABC</span>
                    </div>
                </div>






<!-- Main Navigation -->
        <nav class="main_nav_container">
            <div class="main_nav">
                <ul class="main_nav_list">
                    <li class="main_nav_item" style="display: inline"><a href="#" >home</a></li>
                    <li class="main_nav_item"><a href="#">about us</a></li>
                    <li class="main_nav_item"><a href="Courses.php">courses</a></li>
                    <?php
                    if ($_SESSION['user_id'] == -1) {
                        echo '<li class="main_nav_item"><a href="LMS/Add_Courses.php">Add courses</a></li>';
                    }

                    ?>
                    <li class="main_nav_item"><a href="elements.html">elements</a></li>
                    <li class="main_nav_item"><a href="contact.html">contact</a></li>
                    <?php


                    if (empty($_SESSION['user_id'])){
                        echo "<li class=\"main_nav_item\"><a href=\"login.php\">Login</a></li>";
                    }else{
                        echo' <li class="main_nav_item"><a href="logout.php">log out</a></li>';

                        if ($_SESSION['user_id'] == -1) {
                            echo' <li class="main_nav_item"><a href="log.php">log</a></li>';
                        }

                    }

                  //  echo' <li class="main_nav_item"><a href="contact.html">log out</a></li>';

                    ?>

                </ul>
            </div>
        </nav>
    </div>
    <div class="header_side d-flex flex-row justify-content-center align-items-center">
        <img src="images/phone-call.svg" alt="">
        <span>+43 4566 7788 2457</span>
    </div>

    <!-- Hamburger -->
    <div class="hamburger_container">
        <i class="fas fa-bars trans_200"></i>
    </div>

</header>

