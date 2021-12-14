<?php
    include "resources/php_functions.php";
?>
<!doctype html>
<html>
	<head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="Author" content="Jeremy Brannen">
        <meta charset="UTF-8">
        <meta name="description" content="Adventure Advantages" keywords="Travel Vacation Advantages">
        <title>Adventure Travel | The Adventure Advantages</title>
        <!-- Jeremy Brannen
            PHP WDV341 Final-->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main_style_sheet_adv.css">
        <!--jquery script-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <style>
        
            .card {
                padding: 0 .5%;
                background-color: whitesmoke;
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
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"> <a class="nav-link" href="destinations.php">Destinations</a></li>
                        <li class="nav-item"><a class="nav-link" href="faq.php">FAQ</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact_us.php">Contact Us</a></li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item"><a class="nav-link" href="admin/admin_home.php">Admin</a></span></li>
                    </ul>
                </div>           
                
            </nav>

            <!-- Page Content -->
            <h1>THE ADVENTURE ADVANTAGES</h1>

            <div class="col-lg-8 mx-auto b-margin">
                <p>
                    <h3>For over 35 years, the Adventure Travel family has meticulously curated a truly unique and enriching adventure travel vacations, earning top honors from Travel + Leisure, Conde Nast Traveler, and more.</h3>
                </p>

                <p>
                    <h3>To ensure we can offer everyone that enriching and unique travel experience we keep our groups to under 18 guest per trip with our one of kind knowledgeable and experienced local guides.</h3>
                </p>
            </div>

        </header>
        <main>

            <div class="col-xl-8 mx-auto container-fluid">

                <div class="row jumbotron card-deck">
                
                    <div class="col-xl-4 card">

                        <h2 class="card-head">PAMPERED SMALL GROUPS</h2>

                        <div class="card-body">
                            <img src="images/small_grp.jpg" alt="small_group_on_cliff" width="100%">
                            <!--Image by Knipsologe from Pixabay  -->
                        </div>

                        <p class="card-body">With a maximum of 18 guests and the lowest guest-to-guide ratio (6:1) in the industry, our small groups are pampered with highly personalized, above-and-beyond service.</p>

                    </div>

                    <div class="col-xl-4 card">

                        <h2 class="card-head">EXPERT LOCAL GUIDES</h2>

                        <div class="card-body">
                            <img src="images/tour_guide.jpg" alt="people_rock_climbing" width="100%">
                            <!--Image by  getty images-->
                        </div>

                        <p class="card-body">We have very high standards. That’s why our guides are the finest local experts around – renowned for their insider’s knowledge, leadership, and ability to anticipate your every need.</p>

                    </div>

                    <div class="col-xl-4 card">

                        <h2 class="card-head">FINEST LODGING & CUISINE</h2>

                        <div class="card-body">
                            <img src="images/restaurant.jpg" alt="restaurant" width="100%">
                            <!--Image by hsojhsoj from Pixabay  -->
                        </div>

                        <p class="card-body">We go to great lengths to find the best lodging available, including hotels with a unique cultural reflection of the places we visit. And from five-star restaurants to dinner by campfire, you will enjoy the finest local cuisine.</p>

                    </div>

                </div>

            </div>
            <div class="col-lg-8 mx-auto b-margin">

                <p><h3>We offer only the finest dining and lodgings local to the area as well exquisite by the campfire meals with top notch hospitality amongst some of the worlds most breathtaking landscapes.</h3></p>

                <p><h3>Based on our previous customers satisfaction, we are confident that your Adventure Travel will be one of the most memorable experiences in your life, leaving you wanting to come back for more.  Your adventure is 100% money back guaranteed</h3></p>
            </div>

            <div class="col-xl-8 mx-auto container-fluid">

                <div class="row jumbotron card-deck mx-auto">

                    <div class="col-lg-4 card">

                        <h2 class="card-head">THRILLING WOW MOMENTS</h2>

                        <div class="card-body">
                            <img src="images/man_on_mountain.jpg" alt="man_over_looking_cliff" width="100%">
                            <!--Image by Free-Photos from Pixabay  -->
                        </div>

                        <p class="card-body">Our team relishes the opportunities to surprise and delight with our signature, over-the-top moments that create memories of a lifetime.</p> 

                    </div>

                    <div class="col-lg-4 card">

                        <h2 class="card-head">GUARANTEED DEPARTURES</h2>

                        <div class="card-body">
                            <img src="images/departure.jpg" alt="girl_at_airport" width="100%">
                            <!--Image by Jan Vašek from Pixabay  -->
                        </div>

                        <p class="card-body">When you book your vacation with Adventure Travel, rest assured that the tour will operate on the dates and itinerary as scheduled and will not be cancelled due to lack of participation.</p> 
                        
                    </div>

                    <div class="col-lg-4 card">

                        <h2 class="card-head">100% MONEY BACK GUARANTEE</h2>

                        <div class="card-body">
                            <img src="images/morning.jpg" alt="morning_sunrise" width="100%">
                            <!--Image by Avi Chomotovski from Pixabay -->
                        </div class="card-body">

                        <p class="card-body">With decades of experience, impeccable service, and unmatched access to national parks and the world’s natural wonders, we guarantee you’ll love every moment with Adventure Travel.</p>
                        
                    </div>
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
                        <a href="https://www.pingoraoutdoors.com/" target="_blank"> <em>Pingora.com</em></a>
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

                <h6>&#169;<?php echo showYear() ?> Adventure Travel, Inc. All rights reserved. Adventure Travel and the Adventure Travel logo are trademarks of Adventure Travel, Inc.<h6>

            </div>
        </footer>
    </body>
</html>

