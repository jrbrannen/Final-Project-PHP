<?php
// join session
session_start();

// allow access by making sure validUser session variable isset 
// and validUser session variable is valid
if(isset($_SESSION['validUser']) && $_SESSION['validUser']){
  
}else{
    // deny access if false and redirect to the login form page
    header("Location: login.php");
}

// validation & custom function files
include "../resources/validations.php";
include "../resources/php_functions.php";

// error msg variables
$validform = true;
$required = "";
$errName = "";
$errImage = "";
$errDescription = "";
$errDays = "";
$errNights = "";
$errAdultPrice = "";
$errChildPrice = "";
$errGroupSize = "";
$errSpotsRemaining = "";
$errDateAvail = "";
$errCheckInTime = "";

// sticky variables to populate form
$vacationName = "";
$vacationImage = "";
$vacationDescription = "";
$vacationDays = "";
$vacationNights = "";		
$vacationAdultPrice = "";	
$vacationChildPrice = "";		
$vacationGroupSize = "";		
$vacationSpotsRemaining = "";
$vacationDateAvail = "";
$vacationCheckInTime = "";

// form read only variables
$dateInserted = currentDateUSFormat();
$dateUpdated = currentDateUSFormat();

if(isset($_POST['submit'])){

    // honeypot validation
    $host = $_POST['vacation_host'];
    if(!empty($host)){
        header("refresh:0");    // refreshes page if text field is not empty
    }else{
        $vacationName = strtoupper($_POST['vacation_name']);  // makes the vacations name all upper case
        $vacationImage = $_POST['vacation_image'];
        $vacationDescription = $_POST['vacation_description'];
        $vacationDays = $_POST['vacation_days'];
        $vacationNights = $_POST['vacation_nights'];		
        $vacationAdultPrice = $_POST['vacation_adult_price'];	
        $vacationChildPrice = $_POST['vacation_child_price'];		
        $vacationGroupSize = $_POST['vacation_group_size'];;		
        $vacationSpotsRemaining = $_POST['vacation_spots_remaining'];
        $vacationDateAvail = $_POST['vacation_date_avail'];
        $vacationCheckInTime = $_POST['vacation_check_in_time'];
        $vacationDateInserted = currentDateSqlFormat();
        $vacationDateUpdated = currentDateSqlFormat();
        
        // validate all fields have values
        // sets $validform to false if a field is empty
        if(!valVacationName($vacationName)){
            global $validform, $errName;
            $validform = false;
            $errName = "*";
        }
        if(!valVacationImage($vacationImage)){
            global $validform, $errImage;
            $validform = false;
            $errImage = "*";
        }
        if(!valVacationDescription($vacationDescription)){
            global $validform, $errDescription;
            $validform = false;
            $errDescription = "*";
        }
        if(!valVacationDays($vacationDays)){
            global $validform, $errDays;
            $validform = false;
            $errDays = "*";
        }
        if(!valVacationNights($vacationNights)){
            global $validform, $errNights;
            $validform = false;
            $errNights = "*";
        }
        if(!valVacationAdultPrice($vacationAdultPrice)){
            global $validform, $errAdultPrice;
            $validform = false;
            $errAdultPrice = "*";
        }
        if(!valVacationChildPrice($vacationChildPrice)){
            global $validform, $errChildPrice;
            $validform = false;
            $errChildPrice = "*";
        }
        if(!valVacationGroupSize($vacationGroupSize)){
            global $validform, $errGroupSize;
            $validform = false;
            $errGroupSize = "*";
        }
        if(!valVacationSpotsRemaining($vacationSpotsRemaining)){
            global $validform, $errSpotsRemaining;
            $validform = false;
            $errSpotsRemaining = "*";
        }
        if(!valVacationDateAvail($vacationDateAvail)){
            global $validform, $errDateAvail;
            $validform = false;
            $errDateAvail = "*";
        }
        if(!valVacationCheckInTime($vacationCheckInTime)){
            global $validform, $errCheckInTime;
            $validform = false;
            $errCheckInTime = "*";
        }
        
        if($validform){
            try {       
                require '../resources/dbConnect.php';	//CONNECT to the database
                
                //Create the SQL command string
                $sql = "INSERT INTO wdv341_vacations (";   // db table columns
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
                $sql .= "vacation_date_updated";
                $sql .= ") VALUES (";                   // values for columns
                $sql .= ":vacationName, ";
                $sql .= ":vacationImage, ";
                $sql .= ":vacationDescription, ";
                $sql .= ":vacationDays, ";
                $sql .= ":vacationNights, ";
                $sql .= ":vacationAdultPrice, ";
                $sql .= ":vacationChildPrice, ";
                $sql .= ":vacationGroupSize, ";
                $sql .= ":vacationSpotsRemaining, ";
                $sql .= ":vacationDateAvail, ";
                $sql .= ":vacationCheckInTime, ";
                $sql .= ":vacationDateInserted, ";
                $sql .= ":vacationDateUpdated)";
                
                //PREPARE the SQL statement
                $stmt = $conn->prepare($sql);
                
                //BIND the values to the input parameters of the prepared statement
                $stmt->bindParam(':vacationName', $vacationName);
                $stmt->bindParam(':vacationImage', $vacationImage);
                $stmt->bindParam(':vacationDescription', $vacationDescription);		
                $stmt->bindParam(':vacationDays', $vacationDays);		
                $stmt->bindParam(':vacationNights', $vacationNights);		
                $stmt->bindParam(':vacationAdultPrice', $vacationAdultPrice);		
                $stmt->bindParam(':vacationChildPrice', $vacationChildPrice);		
                $stmt->bindParam(':vacationGroupSize', $vacationGroupSize);		
                $stmt->bindParam(':vacationSpotsRemaining', $vacationSpotsRemaining);		
                $stmt->bindParam(':vacationDateAvail', $vacationDateAvail);		
                $stmt->bindParam(':vacationCheckInTime', $vacationCheckInTime);
                $stmt->bindParam(':vacationDateInserted', $vacationDateInserted);
                $stmt->bindParam(':vacationDateUpdated', $vacationDateUpdated);		
                
                //EXECUTE the prepared statement
                $stmt->execute();
                    
            }
            
            catch(PDOException $e)
            {
                $message = "There has been a problem. The system administrator has been contacted. Please try again later.";
                error_log($e->getMessage());			//Delivers a developer defined error message to the PHP log file at c:\xampp/php\logs\php_error_log
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatable" content="IE=edge">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>Admin | Insert Form</title>
        <!--Jeremy Brannen
            WDV341 PHP Final-->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/main_style_sheet_adv.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
        <script src="../scripts/validate.js"></script>
        <style>
            div.form-group:nth-child(4){
                display: none;
            }
        </style>
    </head>

    <body id="topOfPage">
        
        <header class="admin">
            <div class="d-flex col align-items-center">
                <img src="../images/AT_logo.gif" alt="logo" width="10%" class="my-auto"> 
                <h3 class="ml-5">Adventure Travel Administrator Area</h3>
            </div>
            
            <!-- main navbar -->
            <nav class="navbar navbar-expand-lg mb-0">

                <!-- Brand/logo -->
                <a class="navbar-brand">
                    <img src="../images/AT_logo.gif" alt="logo" style="width:40px">
                </a>

                <!-- Toggler/collapsible Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="../index.php" >Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="../advantages.php">The Adventure Advantages</a></li>
                        <li class="nav-item"> <a class="nav-link" href="../destinations.php">Destinations</a></li>
                        <li class="nav-item"><a class="nav-link" href="../faq.php">FAQ</a></li>    
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="admin_home.php">Admin</a></li>
                    </ul>
                </div>           
                
            </nav>
        </header class="row">
        <main class="row">
            <!-- admin navbar -->
            <div>
                <nav class="navbar h-100 d-inline-block bg-secondary">
                <!-- Links -->
                <ul class="navbar-nav sticky-top adminBar">
                    <li class="nav-item">
                    <a class="nav-link" href="view_all_vacations.php">View All</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="insert_vacation.php">Add New</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="view_all_vacations.php">Update/Delete</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="file_upload.php">Upload Images</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
                </nav>
            </div>

            <div class="col">
                <?php   // confirmation msg
                if(isset($_POST['submit']) && empty($host) && $validform){
                ?>   
                <h3 class="text-primary text-center mt-2">New Vacation Was Saved In The Database</h3>
                <?php   // required field missing error msg
                }else if(isset($_POST['submit']) && empty($host) && !$validform){
                ?>
                    <h3 class="text-danger text-center mt-2"> There Was A Problem.  Required Field Is Missing.</h3>
                <?php
                }
                ?>
                <!-- Page content -->
                <h1 class="text-center mt-5">Add A Vacation</h1>
                
                <div class= "jumbotron col-md-6 mx-auto border border-dark rounded-lg m-4 p-4">
                    
                    <form name="insert_vacation" id="insert_vacation" method="post" action="insert_vacation.php" onsubmit="return validateInsertForm();">
                        <?php // displays error msgs for missing fields on form
                            if(isset($_POST['submit']) && empty($host) && !$validform){
                        ?>
                                <span class="text-danger text-center">* Required Fields</span>
                        <?php
                            }
                        ?>
                        <div class="form-group">
                            <span class="error"><?php echo $errName ?></span>
                            <label for="vacation_name">Vacation Name: </label>
                            <input type="text" class="form-control form-control-sm" name="vacation_name" id="vacation_name" value="<?php echo $vacationName;?>">
                        </div>

                        <div class="form-group">
                            <span class="error"><?php echo $errImage ?></span>
                            <label for="vacation_image">Vacation Image: </label>
                            <input type="text" class="form-control form-control-sm" name="vacation_image" id="vacation_image" value="<?php echo $vacationImage;?>">
                        </div>

                        <div class="form-group">
                            <span class="error"><?php  echo $errDescription ?></span>
                            <label for="vacation_description">Vacation Description: </label>
                            <input type="text" class="form-control form-control-sm" name="vacation_description" id="vacation_description" value="<?php echo $vacationDescription;?>">
                        </div>

                        <div class="form-group">
                            <span class="error"><?php ?></span>
                            <label for="vacation_host">Vacation Host: </label>
                            <input type="text" class="form-control form-control-sm" name="vacation_host" id="vacation_host" value="<?php ?>">
                        </div> 

                        <div class="form-group">
                            <span class="error"><?php echo $errDays ?></span>
                            <label for="vacation_days">Vacation Days: </label>
                            <input type="text" class="form-control form-control-sm" name="vacation_days" id="vacation_days" value="<?php echo $vacationDays; ?>"> 
                        </div>

                        <div class="form-group">
                            <span class="error"><?php echo $errNights ?></span> 
                            <label for="vacation_nights">Vacation Nights: </label>
                            <input type="text" class="form-control form-control-sm" name="vacation_nights" id="vacation_nights" value="<?php echo $vacationNights;?>"> 
                        </div>

                        <div class="form-group">
                            <span class="error"><?php echo $errAdultPrice ?></span> 
                            <label for="vacation_adult_price">Vacation Adult Price: </label>
                            <input type="text" class="form-control form-control-sm" name="vacation_adult_price" id="vacation_adult_price" value="<?php echo $vacationAdultPrice;?>"> 
                        </div>

                        <div class="form-group">
                            <span class="error"><?php echo $errChildPrice ?></span> 
                            <label for="vacation_child_price">Vacation Child Price: </label>
                            <input type="text" class="form-control form-control-sm" name="vacation_child_price" id="vacation_child_price" value="<?php echo $vacationChildPrice;?>"> 
                        </div>

                        <div class="form-group">
                            <span class="error"><?php echo $errGroupSize ?></span>
                            <label for="vacation_group_size">Vacation Group Size: </label>
                            <input type="text" class="form-control form-control-sm" name="vacation_group_size" id="vacation_group_size" value="<?php echo $vacationGroupSize;?>"> 
                        </div>

                        <div class="form-group">
                            <span class="error"><?php echo $errSpotsRemaining ?></span>
                            <label for="vacation_spots_remaining">Vacation Spots Reamaining: </label>
                            <input type="text" class="form-control form-control-sm" name="vacation_spots_remaining" id="vacation_spots_remaining" value="<?php echo $vacationSpotsRemaining;?>">
                        </div>
        
                        <div class="form-group">
                            <span class="error"><?php echo $errDateAvail ?></span>
                            <label for="vacation_date_avail">Vacation Date Available: </label>
                            <input type="date" class="form-control form-control-sm" name="vacation_date_avail" id="vacation_date_avail" value="<?php echo $vacationDateAvail;?>"> 
                        </div>
                            
                        <div class="form-group">
                            <span class="error"><?php echo $errCheckInTime ?></span>
                            <label for="vacation_check_in_time">Vacation Check In Time: </label>
                            <input type="time" class="form-control form-control-sm" name="vacation_check_in_time" id="vacation_check_in_time" value="<?php echo $vacationCheckInTime;?>"> 
                        </div>
                            
                        <div class="form-group">
                            <span class="error"><?php ?></span>
                            <label for="vacation_date_inserted">Vacation Date Inserted: </label>
                            <input type="text" class="form-control form-control-sm" name="vacation_date_inserted" id="vacation_date_inserted" value="<?php echo $dateInserted ?>" readonly> 
                        </div>

                        <div class="form-group">
                            <span class="error"><?php ?></span>
                            <label for="vacation_updated_date">Vacation Date Updated: </label>
                            <input type="text" class="form-control form-control-sm" name="vacation_updated_date" id="vacation_updated_date" value="<?php echo $dateUpdated ?>" readonly> 
                        </div>
                            
                        <div class="text-center">
                            <input type="submit" class="bg-primary text-light rounded-sm" name="submit" id="submit" value="Add Vacation">
                            <input type="reset" name="Reset" id="button" value="Clear Form">
                        </div>
                    </form>
                </div>
            </div>
        </main>  
      <footer>

              <div class="col-xl-8 mx-auto">
                  
                  <img src="../images/AT_logo.gif" alt="logo" width="10%" class="mx-auto"> 

                  <h6><a href="#topOfPage">Return To Top Of Page</a></h6>

                  <h6>&#169;<?php echo showYear(); ?> Adventure Travel, Inc. All rights reserved. Adventure Travel and the Adventure Travel logo are trademarks of Adventure Travel, Inc.<h6>

              </div>
      </footer>
    </body>
</html>
