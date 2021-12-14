<?php
    /**
     * gets the submittal date sets the date to central US time since server is in EU
     */
    function currentDate(){               
        date_default_timezone_set("America/Chicago");    
        $date = date("m/d/Y");             
        return $date;                      
    }// end currentDate()
    
    /**
     * sets the date to central US time since server is in EU
     */
    function showYear(){
        date_default_timezone_set("America/Chicago");   
        $year = date("Y");                              
        return $year; 
    }// end showYear()
    
    /**
     * sets the date to central US time since server is in EU
     */
    function currentDateUSFormat(){
        $date = date_default_timezone_set("America/Chicago");    
        $date = date("m/d/Y");                                   
        return $date;                                          
        
    }// end currentDateUSFormat()
    
    /**
     * sets the date to central US time since server is in EU
     */
    function currentDateSqlFormat()
    {
        $date = date_default_timezone_set("America/Chicago");   
        $date = date("Y-m-d");                                    
        return $date;                                          
    }// end currentDateSqlFormat()

    /**
     * coverts a SQL formatted date to user friendly date
     * format 00/00/0000
     */
    function conDateSQLToUs($inDate){
      $date = date_create($inDate);
      return date_format($date, "m/d/Y");
      
    }
?>
