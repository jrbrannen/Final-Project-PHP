<?php
    include "resources/php_functions.php";
    
    // Include email php files if form is submitted and honeypot is empty
    if(isset($_POST['submit'])){
        $honeypot = $_POST['company_name'];
        if(empty($honeypot)){
           include "resources/contact_email.php";
           include "resources/response_email.php";  
        }
    }
?>
<!doctype html>
<html>

	<head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="Author" content="Jeremy Brannen">
		<meta charset="UTF-8">
		<meta name="description" content="Contact" keywords="Adventure Travel Contact">
		<title>Adventure Travel | Contact Us</title>
        <!--
			PHP WDV341 Final Project 
            Jeremy Brannen
			December 13, 2021
			
        -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main_style_sheet_adv.css">
        <!--jquery script-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="scripts/validate.js"></script>
        <style>

            h3{
                text-align: center;
            }
            .l-padding{
                padding-left: 50px;
            }
            .b-margin{
                margin-bottom: 50px;
            }
            .center{
                text-align: center;
            }
            div.form-group:nth-child(5){
                display: none;
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
                    <li class="nav-item"><a class="nav-link" href="advantages.php">The Adventure Advantages</a></li>
                    <li class="nav-item"> <a class="nav-link" href="destinations.php">Destinations</a></li>
                    <li class="nav-item"><a class="nav-link" href="faq.php">FAQ</a></li>         
                  </ul>
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="admin/admin_home.php">Admin</a></span></li>
                  </ul>  
                </div>           
                
            </nav>

            <h1 class="col-md-8 mx-auto">Have Questions?  Ready To Reserve An Adventure Of A Lifetime?</h1>

        </header>
        <main class="col-12">

            <div class="col-md-6 mx-auto">
  
                <?php // submitted and hp empty - display confirmation of submitted form
                    if(isset($_POST['submit'])){
                        if(empty($honeypot)){
                ?>
                        <div class='jumbotron'>
                            <h2>Thank you for contacting us!</h2></br>
                            <h3>We have recieved your information and you should recieve an email confirmation shortly.</h3>
                        </div>
                    <?php // hp not empty
                        }else{
                    ?>
                        <!-- no form display error message -->
                        <h2>Were sorry!</h2>
                        <h3>Something went wrong and your access was denied</h3></br>
                        <h3>Click the button below to try again.</h3>
                        <!-- form button to reload contact us page -->
                        <form method="post" action="contact_us.php" style="background-color: whitesmoke;">
                            <button type="submit" class="btn btn-outline-secondary mx-auto d-block" name="redirct" value="redirct">Back To Form</button>
                        </form>
                        
                <?php
                        }   // display form
                    }else{   
                ?>
                        <!-- Page Content -->
                        <hr>  
                        <h3>Contact Us Here!</h3>
                        <hr>
                        <p class="center">Send us a message.  We would love to hear from you!</p>

                        <form class="col mx-auto border border-dark rounded-lg p-4 mb-5" id="contactForm" name="contactForm" method="post" action="contact_us.php" onsubmit="return validateContactForm();">
            
                            <legend class="text-center">Contact Information</legend>
                        
                            <hr class="border border-dark">

                            <div class="form-group">
                                <label for="first_name">First Name:</label> 
                                <input type="text" class="form-control" name="first_name" id="first_name"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="last_name">Last Name:</label> 
                                <input type="text" class="form-control" name="last_name" id="last_name"/>
                            </div>

                            <div class="form-group">
                                <label for="company_name">Company Name:</label> 
                                <input type="text" class="form-control" name="company_name" id="company_name"/>
                            </div>

                            <div class="form-group">
                                <label for="email_address">Email:</label>
                                <input type="email" class="form-control" id="email_address" name="email_address" placeholder="youremail@mail.com"/>
                            </div>

                            <div class="form-group">
                                <label for="phone_number">Phone Number:</label> 
                                <input type="tel" class="form-control" name="phone_number" id="phone_number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="555-555-5555" />
                            </div>

                            <div class="form-group">
                                <label for="reason">Reason for contact:</label>
                                <select class="form-control" name="reason" id="reason">
                                    <option value="">Please select a Topic</option>
                                    <option value="trips">Trips</option>
                                    <option value="reservations">Reservations</option>
                                    <option value="referrals">Referrals/Reviews</option>
                                </select>
                            </div>
                                <p>Please send me information on: </p>
                                <input type="checkbox" name="alberta" id="alberta" value="alberta/banff">
                                <label for="alberta">Alberta Banff Hike</label>
                                <br>

                                <input type="checkbox" name="bryce_zion" id="bryce_zion" value="bryce/zion">
                                <label for="bryce_zion">Grand Canyon To Bryce & Zion</label>
                                <br>

                                <input type="checkbox" name="glacier" id="glacier_park" value="glacier park">
                                <label for="glacier_park">Glacier National Park</label>
                                <br>

                                <input type="checkbox" name="bryce" id="bryce" value="bryce canyon">
                                <label for="bryce">Utah Bryce Canyon</label>
                                <br>

                                <input type="checkbox" name="tetons" id="tetons" value="tetons">
                                <label for="tetons">Tetons & Yellowstone</label>
                                <br>

                                <input type="checkbox" name="grand_canyon" id="grand_canyon" value="grand canyon">
                                <label for="grand_canyon">Grand Canyon National Park</label>
                                <br>

                                <input type="checkbox" name="yosemite" id="yosemite" value="yosemite">
                                <label for="yosemite">Yosemite Tour</label>
                                <br>

                                <input type="checkbox" name="arches" id="arches" value="arches">
                                <label for="arches">Arches & Canyonlands</label>
                                <br>

                                <input type="checkbox" name="all_trips" id="all_trips" value="all trips">
                                <label for="all_trips">All Of Them!</label>
                            <div>

                            </div>

                            <div class="form-group pt-3">
                                <label for="comments">Comments:</label></br>
                                <textarea class="form-control" id="comments" name="comments"></textarea>
                            </div>

                            <div class="text-center">
                                <input type="reset"  class="btn btn-secondary" style="width:150px" name="button2" id="button2" value="Reset" />
                                <input type="submit" class="btn btn-primary" style="width:150px" name="submit" id="submit" value="Submit"/>
                            </div>
                        
                        </form>        
                <?php
                    }
                ?>
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

