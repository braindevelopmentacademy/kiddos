<?php

if (isset($_POST['submitFromContact'])){
    $name = $_POST['fullName'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "braindevelop.0408@gmail.com";
    $headers = "From: ".$email;
    
    mail($mailTo, $subject, $message, $headers);
    header("Location: index.html?mailsend");

}