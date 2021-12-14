<?php
// Join session
session_start();

// Validation files and variables
include "../resources/validations.php";
include "../resources/php_functions.php";
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

// Get id variable from url
$updateId = $_GET['vacationId'];

// Allow access by making sure validUser session variable isset 
// and validUser session variable is valid
if(isset($_SESSION['validUser']) && $_SESSION['validUser']){
  
}else{
    // Deny access if false and redirect to the login form page
    header("Location: login.php");
}

//$dateInserted = currentDateUSFormat();
$dateUpdated = currentDateUSFormat();

if(isset($_POST['submit'])){

    // honeypot validation
    $host = $_POST['vacation_host'];
    if(!empty($host)){
        header("refresh:0");    // refreshes page if text field is not empty
    }else{
        $updateId = $_GET['vacationId'];
        $vacationName = strtoupper($_POST['vacation_name']);  // make the vacations name all upper case
        $vacationImage = $_POST['vacation_image'];
        $vacationDescription = $_POST['vacation_description'];
        $vacationDays = $_POST['vacation_days'];
        $vacationNights = $_POST['vacation_nights'];		
        $vacationAdultPrice = $_POST['vacation_adult_price'];;		
        $vacationChildPrice = $_POST['vacation_child_price'];;		
        $vacationGroupSize = $_POST['vacation_group_size'];;		
        $vacationSpotsRemaining = $_POST['vacation_spots_remaining'];;
        $vacationDateAvail = $_POST['vacation_date_avail'];
        $vacationCheckInTime = $_POST['vacation_check_in_time'];
        $vacationDateInserted = $_POST['vacation_date_inserted'];
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
                
                //CREATE the SQL command string
                $sql = "UPDATE wdv341_vacations SET ";   // SQL update
                $sql .= "vacation_name =:vacationName, ";
                $sql .= "vacation_image =:vacationImage, ";
                $sql .= "vacation_description =:vacationDescription, ";
                $sql .= "vacation_days =:vacationDays, ";
                $sql .= "vacation_nights =:vacationNights, ";
                $sql .= "vacation_adult_price =:vacationAdultPrice, ";
                $sql .= "vacation_child_price =:vacationChildPrice, ";
                $sql .= "vacation_group_size =:vacationGroupSize, ";
                $sql .= "vacation_spots_remaining =:vacationSpotsRemaining, ";
                $sql .= "vacation_date_avail =:vacationDateAvail, ";
                $sql .= "vacation_check_in_time =:vacationCheckInTime, ";
                $sql .= "vacation_date_inserted =:vacationDateInserted, ";
                $sql .= "vacation_date_updated =:vacationDateUpdated ";
                $sql .= "WHERE vacation_id =:vacationId";                  
                
                //PREPARE the SQL statement
                $stmt = $conn->prepare($sql);
                
                //BIND the values to the input parameters of the prepared statement
                $stmt->bindParam(':vacationId', $updateId);
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
                
                //send user to "a response page" to display to the customer that everything worked sends id & name vars
                header('Location: view_all_vacations.php?vacationId=' . $updateId . '&vacationName=' . $vacationName);     
            }
            
            catch(PDOException $e)
            {
                $message = "There has been a problem. The system administrator has been contacted. Please try again later.";
                error_log($e->getMessage());			// Delivers a developer defined error message to the PHP log file at c:\xampp/php\logs\php_error_log
            }
        }
    }
}
    // Gets database information from selected id and displays in in the update form
    try{
        require "../resources/dbConnect.php";
        
        $sql = "SELECT * FROM wdv341_vacations ";   // SQL command
        $sql .= "WHERE vacation_id =:vacationId";   
        $stmt = $conn->prepare($sql);               // PREPARE the statement
        $stmt->bindParam(':vacationId', $updateId); // BIND parameters
        $stmt->execute();                           // EXECUTE

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    catch(PDOException $e)
    {
        $message = "There has been a problem. The system administrator has been contacted. Please try again later.";
        error_log($e->getMessage());			// Delivers a developer defined error message to the PHP log file at c:\xampp/php\logs\php_error_log
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatable" content="IE=edge">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>Admin | Update Form</title>
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
            
            <!-- Main navbar -->
            <nav class="navbar navbar-expand-lg mb-0">

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
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item"><a class="nav-link" href="admin_home.php">Admin</a></li>
                    </ul>
                </div>           
                
            </nav>
        </header>
        <main class="row">
            <div>
                <!-- Admin navbar -->
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
                <?php // error msg for missing field
                    if(isset($_POST['submit']) && empty($host) && !$validform){
                ?>
                    <h3 class="text-danger text-center mt-2"> There Was A Problem.  Required Field Is Missing.</h3>
                <?php
                    }
                ?>
                <!-- Page Content -->
                <h1 class="text-center mt-5">Add A Vacation</h1>
                
                <div class= "jumbotron col-md-6 mx-auto border border-dark rounded-lg m-4 p-4">
                    <!-- Update form -->
                    <form name="update_vacation" id="update_vacation" method="post" action="update_vacation.php?vacationId=<?php echo $updateId; ?>" onsubmit="return validateUpdateForm();">
                        <?php // error msg for missing fields
                            if(isset($_POST['submit']) && empty($host) && !$validform){
                        ?>
                                <span class="text-danger text-center">* Required Fields</span>
                        <?php
                            }
                        ?>
                        <div class="form-group">
                            <span class="error"><?php echo $errName ?></span>
                            <label for="vacation_name">Vacation Name: </label>
                            <input type="text" class="form-control form-control-sm" name="vacation_name" id="vacation_name" value="<?php echo $result['vacation_name']; ?>">
                        </div>

                        <div class="form-group">
                            <span class="error"><?php echo $errImage ?></span>
                            <label for="vacation_image">Vacation Image: </label>
                            <input type="text" class="form-control form-control-sm" name="vacation_image" id="vacation_image" value="<?php echo $result['vacation_image']; ?>">
                        </div>

                        <div class="form-group">
                            <span class="error"><?php echo $errDescription?></span>
                            <label for="vacation_description">Vacation Description: </label>
                            <input type="text" class="form-control form-control-sm" name="vacation_description" id="vacation_description" value="<?php echo $result['vacation_description']; ?>">
                        </div>

                        <div class="form-group">
                            <span class="error"><?php ?></span>
                            <label for="vacation_host">Vacation Host: </label>
                            <input type="text" class="form-control form-control-sm" name="vacation_host" id="vacation_host">
                        </div> 

                        <div class="form-group">
                            <span class="error"><?php echo $errDays ?></span>
                            <label for="vacation_days">Vacation Days: </label>
                            <input type="text" class="form-control form-control-sm" name="vacation_days" id="vacation_days" value="<?php echo $result['vacation_days']; ?>"> 
                        </div>

                        <div class="form-group">
                            <span class="error"><?php echo $errNights ?></span>
                            <label for="vacation_nights">Vacation Nights: </label>
                            <input type="text" class="form-control form-control-sm" name="vacation_nights" id="vacation_nights" value="<?php echo $result['vacation_nights']; ?>"> 
                        </div>

                        <div class="form-group">
                            <span class="error"><?php echo $errAdultPrice ?></span>
                            <label for="vacation_adult_price">Vacation Adult Price: </label>
                            <input type="text" class="form-control form-control-sm" name="vacation_adult_price" id="vacation_adult_price" value="<?php echo $result['vacation_adult_price']; ?>"> 
                        </div>

                        <div class="form-group">
                            <span class="error"><?php echo $errChildPrice ?></span>
                            <label for="vacation_child_price">Vacation Child Price: </label>
                            <input type="text" class="form-control form-control-sm" name="vacation_child_price" id="vacation_child_price" value="<?php echo $result['vacation_child_price']; ?>"> 
                        </div>

                        <div class="form-group">
                            <span class="error"><?php echo $errGroupSize ?></span>
                            <label for="vacation_group_size">Vacation Group Size: </label>
                            <input type="text" class="form-control form-control-sm" name="vacation_group_size" id="vacation_group_size" value="<?php echo $result['vacation_group_size']; ?>"> 
                        </div>

                        <div class="form-group">
                            <span class="error"><?php echo $errSpotsRemaining ?></span>
                            <label for="vacation_spots_remaining">Vacation Spots Reamaining: </label>
                            <input type="text" class="form-control form-control-sm" name="vacation_spots_remaining" id="vacation_spots_remaining" value="<?php echo $result['vacation_spots_remaining']; ?>">
                        </div>
        
                        <div class="form-group">
                            <span class="error"><?php echo $errDateAvail ?></span>
                            <label for="vacation_date_avail">Vacation Date Available: </label>
                            <input type="date" class="form-control form-control-sm" name="vacation_date_avail" id="vacation_date_avail" value="<?php echo $result['vacation_date_avail']; ?>"> 
                        </div>
                            
                        <div class="form-group">
                            <span class="error"><?php echo $errCheckInTime ?></span>
                            <label for="vacation_check_in_time">Vacation Check In Time: </label>
                            <input type="time" class="form-control form-control-sm" name="vacation_check_in_time" id="vacation_check_in_time" value="<?php echo $result['vacation_check_in_time']; ?>"> 
                        </div>
                            
                        <div class="form-group">
                            <span class="error"><?php ?></span>
                            <label for="vacation_date_inserted">Vacation Date Inserted: </label>
                            <input type="text" class="form-control form-control-sm" name="vacation_date_inserted" id="vacation_date_inserted" value="<?php echo $result['vacation_date_inserted']; ?>" readonly> 
                        </div>

                        <div class="form-group">
                            <span class="error"><?php ?></span>
                            <label for="vacation_updated_date">Vacation Date Updated: </label>
                            <input type="text" class="form-control form-control-sm" name="vacation_updated_date" id="vacation_updated_date" value="<?php echo $dateUpdated ?>" readonly> 
                        </div>
                            
                        <div class="text-center">
                            <input type="submit" class="bg-primary text-light rounded-sm" name="submit" id="submit" value="Update">
                            <input type="reset" name="Reset" id="button" value="Reset Form">
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