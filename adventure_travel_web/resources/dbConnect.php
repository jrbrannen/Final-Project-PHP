<?php
    // This file creates a "connecton object" to our database

    $database = "jrbrannen75_wdv341";          // name of database
    $serverName = "localhost";               // most default to localhost
    $userName = "jrbrannen75_wdv341";          // username for the database NOT your account
    $password = "ibeneZ6900!";              // pw for the database NOT your account

    try{
        $conn = new PDO("mysql:host=$serverName;dbname=$database", $userName, $password);
        //set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connection Sucessful";
    }
    catch(PDOException $e){
        echo "Connection Failed: " . $e->getMessage();    // same command as $e.getMessage() 
    }
?>