<?php
    include "resources/php_functions.php";
?>
<!doctype html>
<html>

	<head>
	
		<title>Adventure Travel | Home Page</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="Author" content="Jeremy Brannen">
		<meta charset="UTF-8">
		<meta name="description" content="Adventure Travel" keywords="Travel Vacation Home Page">
		<!-- Jeremy Brannen
        WDV341 PHP Final-->
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main_style_sheet_adv.css">
        <!--jquery script-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
        <style>

            .col-xl-12 {
                background-color: cornsilk;
            }
   
        </style>

    </head>
    
    <body class="container-fluid" id="topOfPage">

        <header>

            <div>
                <img src="images/banner.jpg" alt="banner" class="mx-auto d-block" width="100%">
            </div>

            <!-- Main navbar -->
            <nav class="navbar navbar-expand-lg">

                <!-- Brand/logo -->
                <a class="navbar-brand">
                    <img src="images/AT_logo.gif" alt="logo" style="width:40px">
                </a>

                <!-- Toggler/collapsible Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">                 
                      <li class="nav-item"><a class="nav-link" href="advantages.php">The Adventure Advantages</a></li>
                      <li class="nav-item"> <a class="nav-link" href="destinations.php">Destinations</a></li>
                      <li class="nav-item"><a class="nav-link" href="faq.php">FAQ</a></li>
                      <li class="nav-item"><a class="nav-link" href="contact_us.php">Contact Us</a></li>        
                    </ul>
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item"><a class="nav-link" href="admin/admin_home.php">Admin</a></span></li>
                    </ul>
                </div>           
                
            </nav>

            <h1>ADVENTURE TRAVEL</h1>

            <h2>ADVENTURES OF A LIFETIME START HERE</h2>    

        </header>

        <main>

            <div id="demo" class="carousel slide  mx-auto col-sm-8" data-ride="carousel">
    
                <!-- Slideshow -->
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="images/mountain_lake.jpg" alt="mountain_lake" width="100%"><!--Photo by James Wheeler on Unsplash-->
                    </div>

                    <div class="carousel-item">
                        <img src="images/bear.jpg"alt="bear" width="100%">
                    </div>

                    <div class="carousel-item">
                        <img src="images/shoes.jpg" alt="shoes" width="100%">
                    </div>

                    <div class="carousel-item">
                        <img src="images/horseshoe.jpg" alt="forest" width="100%"><!--Photo by Rafael Zamora on Unsplash-->
                    </div>

                    <div class="carousel-item">
                        <img src="images/man_hiking.jpg" alt="man_hiking" width="100%">
                    </div>
                </div>
            
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </a>

                <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                </a>
            
            </div>

            <div class="col-xl-12 col-xl-8 mx-auto row tb-margin tb-padding">

                <div class="col-xl-4 col-lg-8 my-auto mx-auto">

                    <img src="images/person_mountain.jpg" alt="person_on_mountain" width="100%">
                </div>

                <div class="col-xl-4 my-auto">
                   <p><h3>Adventure Travel is a best in class, family-owned and operated boutique international adventure travel outfitter.</h3></p> <p><h3>Our carefully curated and ultra-personalized itineraries allow guests to experience the land, the people, and the culture in the most immersive, energizing, and inspiring way possible.</h3></p><p><h3> With the decades of experience and unmatched access to our National Parks, our knowledge, credibility, and insider access offer an experience that is – simply put – unparalleled.</h3></p>

                </div>

                <div class="col-xl-4 col-lg-8 my-auto mx-auto">
                    <img src="images/mountain_bike2.jpg" alt="mountain_biking"  width="100%">
                </div>

            </div>
                         
        </main>
        <footer>

                <div class="col-xl-8 mx-auto">
                    <hr>
                    <div class="row justify-content-around">
 
                        <div class="col-lg-2">
                            <h5>Join US!</h5>
                            <br>
                            <p>Become A Member of the Adventure Travel community to get an annual discount, access exclusive trips, and discounted gear. Membership is just $40. Learn more and join us
                            </p>
                        </div>
                        <div class="col-lg-2">
                            <h5>Adventure Outfitting</h5>
                            <br>
                            <p>Need to gear up for your Adventure?
                            <br>Look at a few of our partner sites to find the gear right for you!
                            <br>
                            <a href="https://www.pingoraoutdoors.com/" target="_blank"><em>Pingora.com</em></a>
                            <br>
                            <a href="https://www.activedsm.com/brands/" target="_blank"><em>Active Endeavors.com</em></a>
                            </p>
                        </div>
                        <div class="col-lg-2">
                            <h5>Getting To Know Us</h5>
                            <br>
                            <p>At Adventure Travel, we believe that spending time in nature is time well spent. We've been sharing our enthusiasm for the outdoors for more than 35 years.</p>
                        </div>
                        <div class="col-lg-2">
                            <h5>100% Guaranteed Satisfaction</h5>
                            <br>
                            <p>Rated by National Geographic Magazine as "World's Best New Trips" on several occasions, we guarantee you’ll be 100% satisfied with Adventure Travel.</p>
                        </div>
                        <div class="col-lg-2"><h5>Expert Advise</h5>
                            <br>
                            <p>We offer over 20 years of experience to ensure your adventure is the right fit for you.  To speak with one of our adventure experts contact us<br> @(317)555-7414</p>
                            
                        </div>

                    </div>

                    <hr>

                    <img src="images/AT_logo.gif" alt="logo" width="10%" class="top-pad mx-auto"> 

                    <h6><a href="#topOfPage">Return To Top Of Page</a></h6>

                    <p class="text-center">
                        <a target="_blank"href="https://github.com/jrbrannen/Final-Project-PHP.git">GitHub Repo Link</a>
                    </p>

                    <h6><a class="pink"href ="../wdv341.php">Return to HomeWork Page</a></h6>
    
                    <h6>&#169;<?php echo showYear() ?> Adventure Travel, Inc. All rights reserved. Adventure Travel and the Adventure Travel logo are trademarks of Adventure Travel, Inc.<h6>

                </div>
        </footer>
    </body>
</html>

