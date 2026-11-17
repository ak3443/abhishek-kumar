<?php

$name    = $_POST['name'];
$email   = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "abhishek12@risezillapinnaclepoint.com";

$body = "
Name: $name

Email: $email

Subject: $subject

Message:
$message
";

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/plain;charset=UTF-8\r\n";
$headers .= "From: noreply@yourdomain.com\r\n";
$headers .= "Reply-To: $email\r\n";

if(mail($to, $subject, $body, $headers)){
    echo "<script>
            alert('Message Sent Successfully!');
            window.location.href='index.html';
          </script>";
}else{
    echo "<script>
            alert('Failed to Send Message!');
            window.location.href='index.html';
          </script>";
}
?>