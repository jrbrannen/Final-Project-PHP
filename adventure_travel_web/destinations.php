<?php
    include "resources/php_functions.php";    // Import custom php functions
    require "resources/dbConnect.php";        // Connect to the database
    require "resources/Vacation.php";         // Import Vacation class

    $vacationObj = new Vacation();  // Create an empty vacation object

    $vacationObjArray = [];    // Create an empty array of vacation objects

    try{ // SQL select statement to get dynamic content for page from the db
        $sql = "SELECT vacation_id, ";  // SQL select statement
        $sql .= "vacation_name, ";
        $sql .= "vacation_image, ";
        $sql .= "vacation_description, ";
        $sql .= "vacation_days, ";
        $sql .= "vacation_nights, ";
        $sql .= "vacation_adult_price, ";
        $sql .= "vacation_child_price, ";
        $sql .= "vacation_group_size, ";
        $sql .= "vacation_spots_remaining, ";
        $sql .= "vacation_date_avail, ";
        $sql .= "vacation_check_in_time, ";
        $sql .= "vacation_date_inserted, ";
        $sql .= "vacation_date_updated ";
        $sql .= "FROM wdv341_vacations";
        $stmt = $conn->prepare($sql);   // Prepare the statement
        $stmt->execute();               // Execute the statement

        // Store each row from the database vacation table in a vacaton object 
        foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $row){
            $vacationObj = new Vacation();

            $vacationObj->setVacationId($row['vacation_id']);
            $vacationObj->setVacationName($row['vacation_name']);
            $vacationObj->setVacationImg($row['vacation_image']);
            $vacationObj->setVacationDescription($row['vacation_description']);
            $vacationObj->setVacationDays($row['vacation_days']);
            $vacationObj->setVacationNights($row['vacation_nights']);
            $vacationObj->setVacationAdultPrice($row['vacation_adult_price']);
            $vacationObj->setVacationChildPrice($row['vacation_child_price']);
            $vacationObj->setVacationGroupSize($row['vacation_group_size']);
            $vacationObj->setVacationSpotsRemaining($row['vacation_spots_remaining']);
            $vacationObj->setVacationDateAvailable($row['vacation_date_avail']);
            $vacationObj->setVacationCheckInTime($row['vacation_check_in_time']);
            $vacationObj->setVacationDateInserted($row['vacation_date_inserted']);
            $vacationObj->setVacationDateUpdated($row['vacation_date_updated']);

            // Store the object to an array of vacation objects
            array_push($vacationObjArray, $vacationObj);

            
        }
    }
    catch(PDOException $e){
        echo "Errors: " . $e->getMessage();
    }
?>
<!doctype html>
<html>

	<head>
	
		<title>Adventure Travel | Destinations</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="Author" content="Jeremy Brannen">
		<meta charset="UTF-8">
		<meta name="description" content="Adventure Travel Final Project" keywords="Travel Vacation Destinations">
		<!--
			Assignment Final Project PHP Jeremy Brannen
			December 14, 2021
    -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main_style_sheet_adv.css">
        <!--jquery script-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
        <style>
            .card-head{
                max-height: 25%;
                min-height: 25%;
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
                    <ul class="navbar-nav sticky-top"> 
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="advantages.php">The Adventure Advantages</a></li>
                        <li class="nav-item"><a class="nav-link" href="faq.php">FAQ</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact_us.php">Contact Us</a></li>         
                    </ul>
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item"><a class="nav-link" href="admin/admin_home.php">Admin</a></span></li>
                    </ul>
                </div>           
                
            </nav>

            <h1>Destinations</h1>
        </header>
        <main>
            <!-- Page Content -->
            <h2 class="col-sm-8 mx-auto b-margin">Explore More with Our All-Inclusive National Park Vacations</h2>
            <div class="col-sm-8 mx-auto b-margin">

                <p>
                   <h3>For over 35 years, family-owned and operated Adventure Travel has created exhilarating national park vacations, twice earning the distinction as the World’s Best Tour Operator by Travel + Leisure magazine.</h3>
                </p
                
                ><p>
                    <h3>Our all-inclusive adventure vacations offer the most intimate, meaningful, and memorable adventure travel experience imaginable. Discover the wild west on horseback outside Yellowstone or the dramatic soaring peaks of Grand Teton National Park.</h3>
                </p> 
                <p>
                    <h3>Bring the kids along on our exciting Arizona adventure to the breathtaking Grand Canyon or head over to California’s Yosemite National Park and stand in awe below the famous granite cliffs of El Capitan and Half-dome. Our national park vacation packages include iconic sites and hidden gems to delight every traveler!</h3> 
  
            </div>

            <div class="col-lg-8 col-sm-12 mx-auto container-fluid">         
                    <?php
                        // Loop will create Jumbortron/card deck and two vacation object cards if there are vacation objects
                        // left in the vacation object array. 
                        $i = 0;
                        while($i < count($vacationObjArray)) {
                    ?>
                    <div class="row jumbotron card-deck">
                        <!-- Card -->
                        <div class="col-xl-4 col-sm-12 card mx-auto">

                            <p class="card-body font-weight-bold">
                                <?php  // display name
                                    echo $vacationObjArray[$i]->getVacationName() ?>
                            </p>

                            <div class="card-body">
                                <?php //display image
                                    echo "<img src='images/" . $vacationObjArray[$i]->getVacationImg() . 
                                         "'" . "alt='" . $vacationObjArray[$i]->getVacationImg() . "' width='100%'>";
                                ?>
                            </div>

                            <p class="card-body">
                                <?php   // display card content
                                    echo  $vacationObjArray[$i]->getVacationDays() . " Days/" . 
                                          $vacationObjArray[$i]->getVacationNights() . " Nights<br>" .  
                                          $vacationObjArray[$i]->getVacationDescription() . "<br>" .
                                          "Average Cost <br> $" . 
                                          $vacationObjArray[$i]->getVacationAdultPrice() . 
                                          " / Adult<br> $" . 
                                          $vacationObjArray[$i]->getVacationChildPrice() . " / Child<br>" .
                                          "Date Available: " . conDateSQLToUS($vacationObjArray[$i]->getVacationDateAvailable()) . "<br>" .
                                          "Check In Time: " . date_format(date_create($vacationObjArray[$i]->getVacationCheckInTime()), "g:iA") . "<br>" .
                                          "Group Size: " . $vacationObjArray[$i]->getVacationGroupSize() . "<br>" . 
                                          "Spots Remaining: " . $vacationObjArray[$i]->getVacationSpotsRemaining();
                                    $i++;
                                ?>             
                            </p>
                        </div>
                        <?php 
                            // checks to see if cards created matches how many objects were in the array
                            // if not matched create another card
                            if($i < count($vacationObjArray)) { 
                        ?>
                        <div class="col-xl-4 col-sm-12 card mx-auto">
                            <!-- Card -->
                            <p class="card-body font-weight-bold">
                                <?php  // display name
                                    echo $vacationObjArray[$i]->getVacationName() 
                                ?>
                            </p>

                            <div class="card-body">
                                <?php // diplay image
                                    echo "<img src='images/" . $vacationObjArray[$i]->getVacationImg() . 
                                        "'" . "alt='" . $vacationObjArray[$i]->getVacationImg() . "' width='100%'>";
                                ?>
                            </div>

                            <p class="card-body">
                                <?php // display content
                                    echo  $vacationObjArray[$i]->getVacationDays() . " Days/" . 
                                          $vacationObjArray[$i]->getVacationNights() . " Nights<br>" .  
                                          $vacationObjArray[$i]->getVacationDescription() . "<br>" .
                                          "Average Cost <br> $" . 
                                          $vacationObjArray[$i]->getVacationAdultPrice() . 
                                          " / Adult<br> $" . 
                                          $vacationObjArray[$i]->getVacationChildPrice() . " / Child<br>" .
                                          "Date Available: " . conDateSQLToUS($vacationObjArray[$i]->getVacationDateAvailable()) . "<br>" .
                                          "Check In Time: " . date_format(date_create($vacationObjArray[$i]->getVacationCheckInTime()), "g:iA") . "<br>" .
                                          "Group Size: " . $vacationObjArray[$i]->getVacationGroupSize() . "<br>" . 
                                          "Spots Remaining: " . $vacationObjArray[$i]->getVacationSpotsRemaining();
                                    $i++;
                                ?>            
                            </p>
                            </div> 
                        <?php
                            }
                        ?>
                    </div>
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

