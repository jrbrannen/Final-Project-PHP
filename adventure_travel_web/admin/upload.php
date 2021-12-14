<?php
session_start();  // allows access to the applications admin section

if(isset($_SESSION['validUser']) && $_SESSION['validUser']){

}else{
    // Deny access if false and redirect to the login form page
    header("Location: login.php");
}
include "../resources/php_functions.php";
$msg = "";
$target_dir = "../images/"; // file directory where file will be stored
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $msg = "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    $msg = "File is not an image.";
    $uploadOk = 0;
  }
}
// Check if file already exists
if (file_exists($target_file)) {
    $msg = "Sorry, file already exists.";
    $uploadOk = 0;
  }
  
  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
    $msg = "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    $msg = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    $msg = "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      $msg = "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
      $msg = "Sorry, there was an error uploading your file.";
    }
  } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatable" content="IE=edge">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>Admin | Upload Image</title>
        <!--Jeremy Brannen
            WDV341 PHP Final-->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/main_style_sheet_adv.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
        <script>
        </script>
        <style>
        </style>
    </head>

    <body id="topOfPage">
        
        <header class="admin">
            <div class="d-flex col align-items-center">
                <img src="../images/AT_logo.gif" alt="logo" width="10%" class="my-auto"> 
                <h3 class="ml-5">Administrator Area</h3>
            </div>

            <nav class="navbar navbar-expand-lg mb-0">

                <!-- Brand/logo -->
                <a class="navbar-brand">
                    <img src="../images/AT_logo.gif" alt="logo" style="width:40px">
                </a>

                <!--  Main navbar Toggler/collapsible Button -->
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
        <main class="row min-vh-100">
            
            <div>
                <!--  Admin nav bar  -->
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
                
            <!-- Page Content -->
            <div class="col">
            <h2 class="text-center my-5 ">Welcome To The Administrator Area</h2>
            <div class= "jumbotron col-md-6 mx-auto border border-dark rounded-lg m-5 p-4">

                <h3 class="text-center">Upload Image Files</h3>
                <?php
                    if(isset($_POST['submit'])){
                        echo "<h3 class='text-center text-primary'>" . $msg . "</h3>";
                    }
                ?>
                <p class="text-center">Choose an adminstrative action from the left menu</p>
            </div>
            
        </main>
        <footer>

            <div class="col-xl-8 mx-auto">
            
                <img src="../images/AT_logo.gif" alt="logo" width="10%" class="mx-auto"> 

                <h6><a href="#topOfPage">Return To Top Of Page</a></h6>

                <h6>&#169;<?php echo showYear() ?> Adventure Travel, Inc. All rights reserved. Adventure Travel and the Adventure Travel logo are trademarks of Adventure Travel, Inc.<h6>

            </div>
        </footer>
    </body>

</html>