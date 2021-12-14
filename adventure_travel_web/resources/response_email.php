<?php  

$to = $_POST["email_address"];  // uses email address from form input
$subject = "Your request was recieved"; // subject line
 
// message is in html format and styled to match the webpage and form server response
$message = "
<html>
    <head>
        <style>
            
        </style>
    </head>

    <body>
    
        <h3>Thank you!  We will review your request and get back to you soon.</h3>

        <div style='background-color:cornsilk; padding:20px; font-family: Open Sans, sans-serif; border-style:solid; border-color:black; border-radius:5px; border-width:thin;'>
            <p>" . currentDate() . "</p>
            <p>
                Dear " . $_POST["first_name"] . " " . $_POST["last_name"] . ", 
            </p>
                    
            <p>
                Thank you for your interest in Adventure Travel.  You are recieving this email as a conformation of your request.
                Your request indicates your reason for contacting us is for " . $_POST["reason"] . ", with the following comments: <br>
                <strong>" . $_POST["comments"] . "</strong> 
                
            </p>

            <p>
                You should expect an email response or phone call from me reguarding your request within the next 24 hours.
            </p>

            <p>
                Regards,<br>
                Adventure Travel Team
            </p>

        </div>

    </body>

</html>";

$headers = "From: jeremybrannen@jeremybrannen.info" . "\r\n";   // needs to be email address from host server

$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";    // formats for http

mail($to,$subject,$message,$headers);                           // send out email
  
?>