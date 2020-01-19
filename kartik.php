<?php
$name = $_post['name'];
$visitor_email = $_post['email'];
$message = $_post['message'];




$email_form = '7376kartikmeena@gmail.com' ;
$email_subject ="New Form Submission" ;
$email_body ="User Name: $name .\n".
              "User Email: $visitor_email.\n".
              "User Message::$message.\n";



              $to = "7376kartikmeena@gmail.com";
              $headers = "from:$email_form\r\n";
              $headers .="Reply-To: $visitor_email\r\n";
              mail($to,$email_subject, $email_body,$headers);
              header("location: index.html");
