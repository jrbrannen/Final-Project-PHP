<?php
    include "resources/php_functions.php";
?>
<!doctype html>
<html>

	<head>
	
		<title>Adventure Travel | FAQ</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="Author" content="Jeremy Brannen">
		<meta charset="UTF-8">
		<meta name="description" content="Adventure Travel FAQ" keywords="Adventure Travel FAQ">
		<!--Jeremy Brannen
        WDV341 PHP Final-->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main_style_sheet_adv.css">
        <!--jquery script-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
        <style>
            .a{
                background-color: cornsilk;
                border-radius: 1em;
                padding: 2%;
            }
            .remove-pad{
                padding: 0;
            }
            .small-font{
                font-size: .75em;
            } 
            nav.second-bar{
                background-color: whitesmoke;
            }
            hr.a{
                margin-top: 0;
            }
            .card a{
                color: darkgreen;
            }
            .card:hover{
                box-shadow: none;
            }
            
        </style>

    </head>
    
    <body class="container-fluid" id="topOfPage">

        <header>

            <div>

                <img src="images/banner.jpg" alt="banner" class="mx-auto d-block" width="100%">
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
                            <li class="nav-item"><a class="nav-link"  href="advantages.php">The Adventure Advantages</a></li>
                            <li class="nav-item"> <a class="nav-link" href="destinations.php">Destinations</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact_us.php">Contact Us</a></li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="admin/admin_home.php">Admin</a></span></li>
                        </ul>
                    </div>           
                    
                </nav>

            </div>  

        </header>
        <main class="b-margin">
            <!-- Page content -->
            <div class="row container-fluid mx-auto remove-pad">

                <div class="col-lg-6 remove-pad">

                    <img src="images/snow.jpg" alt="snow" width="100%">

                </div>
                
                <div class="col-lg-6 my-auto">
                    
                    <div class="a">
                        <div><img src="images/AT_logo.gif" alt="logo" width="10%"></div>
                        
                        <h3>FREQUENTLY ASKED QUESTIONS</h3>
                        <h4>If you don’t find the question or answer you’re looking for below, don’t hesitate to call one of our Adventure Consultants or send us an email at any time! <br>
                        <div class="small-font">

                            <a href="">800.575.1540</a> <br><a href="contact_us.php">info@austinadventures.com.</a><br><a href="contact_us.php">Contact Us</a></h4>

                        </div> 
                            
                    </div>


                </div>

            </div>

            <!--FAQ nav bar-->
            <nav class="navbar navbar-expand-lg second-bar">
              <ul class=" col-md-8 mx-auto navbar-nav">
                  <li class="nav-item"><a href="#trip" class="nav-link">Trips FAQ</a></li>
                  <li class="nav-item"><a href="#reservations" class="nav-link">Reservations FAQ</a></li>
                  <li class="nav-item" ><a href="#reviews" class="nav-link">Review FAQ</a></li>
              </ul>
            </nav>

            <div class="col-md-8 mx-auto" id="accordion">
                
                <hr>

                <h3 id="trip">Trip FAQ</h3>

                <hr>
        
                <div class="row">

                    <!-- top left faq-->
                    <div class="col-lg-6">

                        <div class="card">

                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseOneA">WHAT’S INCLUDED IN THE PRICE?</a>
                            </div>

                            <div id="collapseOneA" class="collapse" data-parent="#accordion">

                                <div class="card-body">
                                    <p>Apart from the freedom of one meal on your own, we design our trips to be all-inclusive.  Typically, the price covers:</p>
                                    <p>
                                    Double occupancy rooms with private baths All meals and snacks except one dinner on your own Professional and first-aid certified guides and local partners and experts Bikes, kayaks, helmets and other necessary equipment.</p> 
                                    <p>Vehicle support during the trip Luggage service Austin Adventures t-shirt, water bottle, and luggage tags Detailed pre-departure and packing information.</p><p>All taxes, dining and housekeeping gratuities, local partner and expert gratuities and national park entrance and permit fees, unless noted.</p>
                                </div>

                            </div>

                        </div>

                        <div class="card">

                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseTwoA">HOW DIFFICULT AND FLEXIBLE ARE TRIP ACTIVITIES?</a>
                            </div>

                            <div id="collapseTwoA" class="collapse" data-parent="#accordion">

                                <div class="card-body">
                                    <p>You don’t have to be a fitness fanatic to enjoy our trips. A typical day consists of a personally paced 5-mile hike or 20-mile bike ride. We’re flexible, and we’ll adjust distances and levels of difficulty up or down according to your abilities and desires.</p>

                                </div>

                            </div>

                        </div>

                        <div class="card">

                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseThreeA">WHAT ABOUT SINGLE AND SOLO TRAVELERS?</a>
                            </div>

                            <div id="collapseThreeA" class="collapse" data-parent="#accordion">

                                <div class="card-body">
                                    Though our days are busy, there’s always downtime to shop, relax or visit the spa. At any time during your trip, if you feel like putting your feet up instead of opting for the day’s activities, that’s fine. This is your vacation!
                                </div>

                            </div>

                        </div>

                        <div class="card">

                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseFourA">WHAT ITEMS SHOULD I BRING WITH ME?</a>
                            </div>

                            <div id="collapseFourA" class="collapse" data-parent="#accordion">

                                <div class="card-body">
                                    All you need to bring is personal items such as clothing, hygiene, and enthusiasm.  We will provide all of the gear needed for adventures such as rafts, tents, cooking utensils and camping gear.
                                </div>

                            </div>

                        </div>

                    </div>

                    <!--top right faq-->
                    <div class="col-lg-6" id="accordion">

                        <div class="card">

                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseOneB">WHAT’S NOT INCLUDED?</a>
                            </div>

                            <div id="collapseOneB" class="collapse" data-parent="#accordion">

                                <div class="card-body">
                                    <p>Typical trip exclusions are detailed for you in our pre-trip planners, and they include:</p>
                                    <p>Gratuities to Austin Adventures guides Alcoholic beverages and related gratuities 1 dinner during the trip.</p>
                                    <p>Pre-and post-trip accommodations and associated expenses Air and land transportation to and from host cities In-country air on international itineraries (unless noted).</p><p>Airport departure taxes and some park entry fees Personal travel and medical insurance Optional activities and spa services.</p><p>Items of a personal nature</p>
                                </div>

                            </div>
                        </div>

                        <div class="card">

                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseTwoB">ARE THE HIKING AND BIKING DISTANCES THE SAME ON FAMILY TRIPS?</a>
                            </div>

                            <div id="collapseTwoB" class="collapse" data-parent="#accordion">

                                <div class="card-body">
                                    To accommodate our youngest guests, family hikes and bike rides are typically shorter and easier. Our guides are happy to keep children entertained while adults/teens opt for a challenging hike, bike ride, etc. – distances and levels of difficulty for adults and teens are easy to adjust.Apart from the freedom of one meal on your own, we design our trips to be all-inclusive.  Typically, the price covers:
                                </div>

                            </div>
                        </div>

                        <div class="card">

                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseThreeB">WHAT IS THE MAXIMUM GROUP SIZE?</a>
                            </div>

                            <div id="collapseThreeB" class="collapse" data-parent="#accordion">

                                <div class="card-body">
                                    In order to ensure all of our guest get a world class experience group sizes are limited to 18 people.
                                </div>

                            </div>
                        </div>

                        <div class="card">

                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseFourB">DO YOU HAVE AN AWARDS PROGRAM?</a>
                            </div>

                            <div id="collapseFourB" class="collapse" data-parent="#accordion">

                                <div class="card-body">
                                    Become one of our members and enjoy future discount on more adventures!
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

                <hr>

                <h3 id="reservations">Reservation FAQ</h3>    
        
                <hr>

                <div class="row">

                    <!--mid left faq-->
                    <div class="col-lg-6">

                        <div class="card">

                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseOneC">WHAT IS THE MINIMUM AGE AND DO YOU OFFER CHILD DISCOUNTS?</a>
                            </div>

                            <div id="collapseOneC" class="collapse" data-parent="#accordion">

                                <div class="card-body">
                                    On adult trips, our minimum age is 16. On designated family adventures, we accommodate children as young as 7 (age 6 for Yellowstone & age 5 on our Costa Rica Family Adventures). Children who share accommodations with one or more adults will receive discounts of 10 – 25%, depending upon the trip.
                                </div>

                            </div>

                        </div>

                        <div class="card">

                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseTwoC">HOW FAR IN ADVANCE DO I NEED TO RESERVE MY TRIP?</a>
                            </div>

                            <div id="collapseTwoC" class="collapse" data-parent="#accordion">

                                <div class="card-body">
                                    The farther in advance you book, the better selection of dates you’ll have. On most trips you’ll want to book 3 to 6 months out. For holiday trips, you’ll want to reserve 6 to 8 months out. Rest assured, though, we’re also masters at accommodating last-minute reservations!


                                </div>

                            </div>

                        </div>

                        <div class="card">

                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseThreeC">DO I NEED A PASSPORT?</a>
                            </div>

                            <div id="collapseThreeC" class="collapse" data-parent="#accordion">

                                <div class="card-body">
                                    If you reserve one of our adventures that requires travel to Cananda or out of the country, you will need a valid passport.  If you don't currently have a passport or need to renew one we can help you get the required paperwork once your trip is booked.


                                </div>

                            </div>

                        </div>

                    </div>

                    <!--mid right faq-->
                    <div class="col-lg-6">

                        <div class="card">

                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseOneD">WHAT ABOUT SINGLE AND SOLO TRAVELERS?</a>
                            </div>

                            <div id="collapseOneD" class="collapse" data-parent="#accordion">

                                <div class="card-body">
                                    Many of our guests travel solo. Solo travelers have the option of paying a single supplement for a private room throughout the trip. At your request, we will also try to match you up with a suitable roommate. If we’re unable to do so and you are forced into a private room situation, we will only charge you 50% of the customary single supplement charge (on most trips). We recommend talking to one of our Custom Trip Experts if this is something you’re interested in.
                                </div>

                            </div>
                        </div>

                        <div class="card">

                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseTwoD">WHAT FORMS OF PAYMENT DO YOU ACCEPT?</a>
                            </div>

                            <div id="collapseTwoD" class="collapse" data-parent="#accordion">

                                <div class="card-body">
                                    We accept US currency only.  Payments can be made by credit card over the phone.  We accept Visa®, Mastercard®, American Express® and Discover®.
                                </div>

                            </div>
                        </div>

                        <div class="card">

                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseThreeD">IS AIRFARE INCLUDED IN THE PRICE?</a>
                            </div>

                            <div id="collapseThreeD" class="collapse" data-parent="#accordion">

                                <div class="card-body">
                                    No.  Our prices are for guide tours only.  Airfare or other travel will be additional.
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

                <hr>

                <h3 id="reviews">Review FAQ</h3>   
                
                <hr>

                <div class="row">
                
                    <!--bottom left faq-->
                    <div class="col-lg-6">

                        <div class="card">

                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseOneE">CAN I TALK TO SOMEONE WHO’S TAKEN A TRIP WITH YOU?</a>
                            </div>

                            <div id="collapseOneE" class="collapse" data-parent="#accordion">

                                <div class="card-body">
                                    Absolutely. Our alumni are some of our best sources of information. Just give us a call and we’ll provide references for the specific trip you’re interested in.
                                </div>

                            </div>

                        </div>

                        <div class="card">

                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseTwoE">ARE ALL YOUR REVIEWS PUBLISHED?</a>
                            </div>

                            <div id="collapseTwoE" class="collapse" data-parent="#accordion">

                                <div class="card-body">
                                    We want to publish all of our reviews to give a fair evaluation, however, we not publish reviews that contain offensive and/or inappropriate language.
                                </div>

                            </div>

                        </div>

                    </div>

                    <!--Bottom right faq-->
                    <div class="col-lg-6">

                        <div class="card">

                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseOneF">DO YOU GIVE DISCOUNTS FOR GOOD REVIEWS?</a>
                            </div>

                            <div id="collapseOneF" class="collapse" data-parent="#accordion">

                                <div class="card-body">
                                    No.  We love reading reviews about how well we did however we do not offer any additional discounts for leaving reviews at this time.
                                </div>

                            </div>

                        </div>

                        <div class="card">

                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseTwoF">CAN ANYONE SUBMIT A REVIEW?</a>
                            </div>

                            <div id="collapseTwoF" class="collapse" data-parent="#accordion">

                                <div class="card-body">
                                    While we encourage all our customers to give us a review, only customers who have taken an adventure with us will be allowed to submit reviews for posting.
                                </div>

                            </div>

                        </div>

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

                <h6>&#169;<?php echo showYear() ?> Adventure Travel, Inc. All rights reserved. Adventure Travel and the Adventure Travel logo are trademarks of Adventure Travel, Inc.<h6>

            </div>
        </footer>
    </body>
</html>

