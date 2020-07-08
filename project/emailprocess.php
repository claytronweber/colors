<!DOCTYPE html>
<html>
<head>
    <title>Form Processing</title>
    <meta charset="UTF-8">
</head>    

   
<body>

   
<?php

if(isset($_POST['submit'])) {
    
    //now we collect the information from the form
    
    $firstname =    $_POST['firstname'];
    $lastname =     $_POST['lastname'];      
    $email =        $_POST['email'];
    $address =      $_POST['address'];
    $city =         $_POST['city'];
    $state =        $_POST['state'];
    $zipcode =      $_POST['zipcode'];
    $birthdate =    $_POST['birthdate'];    
    // now we set the variables for email to be sent
    //don't forget to add swilkison@watkins.edu
    $to = "cweber@watkins.edu";
    $headers = "From: cweber@watkins.edu";
    $subject = "An email from my website";
    $msg = "Name: $name\n\n
    Email: $email\n\n
    Address: $address\n\n
    City: $city\n\n
    State: $state\n\n
    Zip Code: $zipcode";
    
    //finally we actually send the email
    
    mail($to,$subject,$msg,$headers);
    
    echo "Thank you, your form was processed!";
    
} else {
    
    echo "Sorry, no form was sent!";
}
    
?>
    
</body>
    
</html>