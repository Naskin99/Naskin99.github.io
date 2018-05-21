<?php
    $name = $_POST['name'];
    $email_sender = $_POST['email'];
    $msg = $_POST['message'];        
    $phone = $_POST['phone'];
            
    $email_from = 'smp.sie@gmail.com';
    $email_subj = "New Form Submission";
    $email_body = "You have a new message from $name. \n The message says: \n $msg";

    $to = "smp.sie@gmail.com";
    $headers = "From $email_sender \r\n";
    $headers .= "Reply To: $email_sender \r\n";

    mail($to,$email_subj,$email_body,$headers);
?>