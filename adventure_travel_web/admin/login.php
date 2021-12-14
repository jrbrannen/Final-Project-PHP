<?php
include "../resources/php_functions.php";
// allows access to the application session
session_start(); 

$validUser = false;     // invalid user until signed on
$errMsg = "";           // global error message variable

// Condition runs once the form has been submitted
if(isset($_POST['submit'])){

    //  Login variables
    $loginName = $_POST['loginName'];
    $loginPW = $_POST['password'];
    
    try {
        // CONNECT to the database	
        require '../resources/dbConnect.php';	
        
        // Create the SQL command string
        $sql = "SELECT vacation_user_name, ";
        $sql .= "vacation_user_password ";
        $sql .= "FROM vacation_user ";
        $sql .= "WHERE vacation_user_name=:userName ";
        $sql .= "AND vacation_user_password=:userPW";
        
        // PREPARE the SQL statement
        $stmt = $conn->prepare($sql);
            
        // BIND the values to the input parameters of the prepared statement
        $stmt->bindParam(':userName', $loginName);
        $stmt->bindParam(':userPW', $loginPW);		
        
        // EXECUTE the prepared statement
        $stmt->execute();	
        
        // PDO FETCHALL stores any valid rows in the $resultArray variable
        $resultArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Store number of matched rows in variable
        $numRows = count($resultArray);
        
        /* Condition sets user session variable and valid user variable
            to true allowing the admin options to be displayed by sending
            user to a admin home page.  Else will display an error message
            and redisplay the form.
        */
        if($numRows == 1){
            // set a session variable
            $_SESSION['validUser'] = true;
            // valid user
            $validUser = true;
            header("Location: admin_home.php");
        }else{
            // error msg displays in view if failed login attempt
            $errMsg = "Invalid user name or password. Please try again.";
        }
    }

    catch(PDOException $e)
    {
        $message = "There has been a problem. The system administrator has been contacted. Please try again later.";
        error_log($e->getMessage());			
    }
} 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatable" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		    <meta name="Author" content="Jeremy Brannen">
		    <meta charset="UTF-8">
        <meta name="description" content="Adventure Travel" keywords="Travel Vacation Login Page">
        <title>Adventure Travel | Login</title>
        <!--Assignment Final Project PHP WDV341
            Jeremy Brannen-->
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/main_style_sheet_adv.css">
        <!--jquery script-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
        <style>
        
        </style>
    </head>
    <body>

        <header>
            <!-- Main navbar -->
            <div>
                <img src="../images/banner.jpg" alt="banner" class="mx-auto d-block" width="100%">
            </div>

            <nav class="navbar navbar-expand-lg">

                <!-- Brand/logo -->
                <a class="navbar-brand">
                    <img src="../images/AT_logo.gif" alt="logo" style="width:40px">
                </a>

                <!-- Toggler/collapsible Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                      <li class="nav-item"><a class="nav-link" href="../index.php" >Home</a></li>
                      <li class="nav-item"><a class="nav-link" href="../advantages.php">The Adventure Advantages</a></li>
                      <li class="nav-item"> <a class="nav-link" href="../destinations.php">Destinations</a></li>
                      <li class="nav-item"><a class="nav-link" href="../faq.php">FAQ</a></li>    
                    </ul>    
                </div>              
            </nav>
        </header>
        <main> 
            <?php   // error msg for non valid user
                if(isset($_POST['submit']) && $validUser == false) {
                    echo "<h3 class='text-center text-danger'>$errMsg</h3>";
                }
            ?> 
                 
            <h1 class="text-center">Sign On Page</h1>
            <!--Block 2 display this block when you link to this page -->
            <div class= "jumbotron col-md-4 mx-auto border border-dark rounded-lg m-4 p-4">   
                <form method="post" action="login.php">

                    <div class="form-group">
                        <label for="loginName">User Name </label>
                        <input type="text" class="form-control form-control-sm"name="loginName" id="loginName">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control form-control-sm"name="password" id="password">
                    </div>

                    <div class="text-center">
                        <input type="submit" class="bg-primary text-light rounded-sm" name="submit" value="Sign On">
                        <input type="reset">
                    </div>
                </form>
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
        
                <img src="../images/AT_logo.gif" alt="logo" width="10%" class="mx-auto"> 

                <h6><a href="#topOfPage">Return To Top Of Page</a></h6>

                <!-- <h6><a class="pink"href ="../homework_page.html">Return to HomeWork Page</a></h6> -->

                <h6>&#169;<?php echo showYear(); ?> Adventure Travel, Inc. All rights reserved. Adventure Travel and the Adventure Travel logo are trademarks of Adventure Travel, Inc.<h6>

            </div>
        </footer>
    </body>
</html>