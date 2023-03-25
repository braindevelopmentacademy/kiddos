<?php

if (isset($_POST['submitFromContact'])){
    $name = $_POST['fullName'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "braindevelop.0408@gmail.com";
    $headers = "From: ".$email;
    $txt = "Message from website: ".$name.".\n\n".$message;

    mail($mailTo, $subject, $text, $headers);
    header("Location: index.php?mailsend");

}