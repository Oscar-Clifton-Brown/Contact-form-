<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailfrom = $_POST['mail'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    $emailto = "info@highhousegardenweddings.co.uk";
    $subject = "request from ".$name;
    $headers = "From: ".$mailfrom;
    $txt = "Message from: ".$mailfrom.".\n name: ".$name.".\n number: ".$phone.".\n\n".$message;
    
    mail($emailto, $subject, $txt, $headers);
    header("Location: index.php?mailsend");

} 
