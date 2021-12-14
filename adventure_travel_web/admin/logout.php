<?php
    
    session_start();
    // close session variables - validUser to false
    session_unset();
    session_destroy();
    
    // close connection object - connections stay open until closed
    //$conn->close(); // close a database connection
    
    // redirect back to the site home page
    header("Location: login.php");
    
?>
