<?php
// allows access to the applications admin section
session_start();  

if (isset($_SESSION['validUser']) && $_SESSION['validUser']) {
} else {
    // Deny access if false and redirect to the login form page
    header("Location: login.php");
}

include "../resources/php_functions.php";
$numDeleted = "";   // empty variable for flaging deleted rows

if (isset($_POST['submit'])) {
    // deletes row from the database
    try {
        require '../resources/dbConnect.php';

        $vacationId = $_POST['vacation_id'];
        $vacationDeletedName = $_POST['vacation_name'];
        $sql = "DELETE FROM wdv341_vacations WHERE vacation_id=:vacationId";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':vacationId', $vacationId);
        $stmt->execute();

        // how many rows were affected by the previous SQL execute
        $numDeleted = $stmt->rowCount();    // flag
    } catch (PDOException $e) {
        $message = "There has been a problem. The system administrator has been contacted. Please try again later.";
        error_log($e->getMessage());

        $numDeleted = -1; // flag tells that deleted didn't work
    }
}

try {
    // SQL select command - used in fetch all to populate the page with db info
    require "../resources/dbConnect.php";

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
    $sql .= "TIME_FORMAT(vacation_check_in_time, '%h: %i %p') as vacation_check_in_time, ";
    $sql .= "DATE_FORMAT(vacation_date_avail, '%M %d, %Y') as vacation_date_avail, ";
    $sql .= "DATE_FORMAT(vacation_date_inserted, '%M %d, %Y') as vacation_date_inserted, ";
    $sql .= "DATE_FORMAT(vacation_date_updated, '%M %d, %Y') as vacation_date_updated ";
    $sql .= "FROM wdv341_vacations";

    $stmt = $conn->prepare($sql);           // prepare the statement
    $stmt->execute();                       // the result Object is still in database format not directly readable
} catch (PDOException $e) {
    echo "Errors: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatable" content="IE=edge">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>Adv Travel | Admin | View All</title>


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/main_style_sheet_adv.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script></script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');

            body {
                font-family: 'Open Sans', sans-serif;
            }

            .tableHeader {
                position: sticky;
                top: 0;
            }

            a:hover {
                /*color: purple;*/
                text-decoration: none;
            }
        </style>

    </head>

    <body class="container-fluid">
        <header class="admin" id="topOfPage">
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
                        <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
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
                            <a class="nav-link" href="update_vacation.php">Update/Delete</a>
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
            <!-- Page content -->
            <div class="col pl-0">
                <h1 class="text-center my-5">Vacation Package List</h1>

                <?php // deletion confirmation msg
                if ($numDeleted > 0) {
                ?>
                    <h5 class='text-danger text-center'>Deletion Of " <?php echo $vacationDeletedName ?> " Successful!</h5>;
                <?php   // error msg
                } else if ($numDeleted == -1) {
                ?>
                    <h5 class='text-danger text-center'>Deletion Unsuccessful.. Please Try Again</h5>;
                <?php
                }   // get vacation name from url for updated confirmation msg
                if (!empty($_GET['vacationName'])) {  
                    $vacationName = $_GET['vacationName'];
                ?>
                    <h5 class="text-primary text-center mb-5"> <?php echo $vacationName ?> Is Updated</h5>
                <?php
                }
                ?>
                <table class="table">
                    <!-- Displays a table to the browser with headers-->
                    <thead class="tableHeader thead-dark">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Days</th>
                            <th scope="col">Nights</th>
                            <th scope="col">Adult Price</th>
                            <th scope="col">Child Price</th>
                            <th scope="col">Group Size</th>
                            <th scope="col">Spots Left</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>

                    <?php // gets each row from the db to display in table
                        foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $result) {     
                    ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $result['vacation_name']; ?></th>
                                <td><?php echo $result['vacation_description']; ?></td>
                                <td><?php echo $result['vacation_days']; ?></td>
                                <td><?php echo $result['vacation_nights']; ?></td>
                                <td><?php echo $result['vacation_adult_price']; ?></td>
                                <td><?php echo $result['vacation_child_price']; ?></td>
                                <td><?php echo $result['vacation_group_size']; ?></td>
                                <td><?php echo $result['vacation_spots_remaining']; ?></td>

                                <!-- update form button -->
                                <td>
                                    <form name="update" id="update" method="get" action="update_vacation.php" style="background-color:whitesmoke">
                                        <input type="hidden" name="vacationId" id="vacation_id" value=<?php echo "'" . $result['vacation_id'] . "'"; ?> />
                                        <input type="submit" class="btn btn-outline-primary" name="submit" id="submit" value="Update"></button>
                                    </form>
                                </td>
                                <!-- delete form -->
                                <td>
                                    <form name="delete" id="delete" onsubmit="return confirm('You are about to delete a destination.  Are you sure?');" method="post" action="view_all_vacations.php">
                                        <input type="hidden" name="vacation_id" id="vacation_id" value=<?php echo "'" . $result['vacation_id'] . "'"; ?> />
                                        <input type="hidden" name="vacation_name" id="vacation_name" value=<?php echo "'" . $result['vacation_name'] . "'"; ?> />
                                        <input type="submit" class="btn btn-danger" name="submit" id="submit" value="Delete"></button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>

                    <?php
                    } // end of foreach()        
                    ?>
                </table>
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