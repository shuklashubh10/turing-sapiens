<?php 
if(isset($_POST['submit'])){
    $to = "turingsapiens@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['Name'];
    $subject = $_POST['Subject'];
    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['Message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    
    }
?>