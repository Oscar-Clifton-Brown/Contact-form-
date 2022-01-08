<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailfrom = $_POST['mail'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    //highhouseweddings.requests@hotmail.com
    //info@highhousegardenweddings.co.uk
    $emailto = "info@highhousegardenweddings.co.uk";
    $subject = "request from ".$name;
    $headers = "From: ".$mailfrom;
    $txt = "Message from: ".$mailfrom.".\n name: ".$name.".\n number: ".$phone.".\n\n".$message;
    
    mail($emailto, $subject, $txt, $headers);
    //header("Location: index.php?mailsend");
    
    //echo $emailto .$subject .$headers .$txt;

} 