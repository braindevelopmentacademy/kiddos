<?php

if (isset($_POST['submitFromIndex'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $messageValue = $_POST['messageValue'];
    
    $phoneNumber = $_POST['phoneNumber'];
    
    $message = "Got quote request from website find the information below: \n \n $firstName $lastName \n messageValue: $messageValue \n phone number $phoneNumber";

    $mailTo = "braindevelop.0408@gmail.com";
    
    mail($mailTo, $subject, $message);
    header("Location: index.html?mailsend");

}