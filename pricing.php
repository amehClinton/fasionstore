<?php

if (isset ($_POST['submit'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $mailFrom = $_GET['email'];
    $password = $_GET['password']
    $quantity = $_POST['quantity'];


    $mailTo = "Ameh.clinton@gmail.com"
    $headers = "From: ".$mailFrom;
    $txt = "You  have received an email from ".$name.".\n\n" "To purchase item of ".$quantity;

    mail($mailTo, $txt, $headers);
    header("Location: index.php?mailsend");
}

if ( empty($password) ) {
    echo 'You must put in your password.';
    };

?>