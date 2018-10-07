<?php

header('Location: http://preview.in.ieee.lk/home#successful');
$nname = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent=" NEW FEEDBACK FROM ACHIVERS WEB \n\n *| Name: $name \n *| E-Mail: $email \n *| Subject: $subject \n *| Message: $message \n\n\n ***Please be informed this information are automatically sent from 'Contact Us'area of IEEE IN Web. For troubleshooting please contact ManoRanjana, the system administrator.***";
$recipient = "manoranjana@ieee.lk";
$subject = "New Feedback from $fname";
$mailheader = "From: NEW FEEDBACK \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You very much! We are redirecting to the successful page...";
?>