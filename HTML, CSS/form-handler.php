<?php
$name = $_POST['Name'];/*these are variables created to hold the value entered by the user and is send here through post method.*/
$visitor_email = $_POST['Email'];/*these are variables created to hold the value entered by the user and is send here through post method.*/
$subject = $_POST['Subject'];/*these are variables created to hold the value entered by the user and is send here through post method.*/
$message = $_POST['Message'];/*these are variables created to hold the value entered by the user and is send here through post method.*/

$email_from = '@yourWebsite.com';/*holds the mail id of the website from which the mail was sent*/
$email_subject = 'New Form Submitted';/*this subject is the subject for the wmail that will be sent to us and not the users subject.*/
$email_body = "User name: $name.\n"./*this is the mail body hte mail will be snet in this format.*/
              "User email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User message: $message.\n";

$to = 'omjoshi936@gmail.com';/*mail will be sent to this mail-id.*/

$headers = "From:$email_from";
$headers .= "Reply to : $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
// this is the mail tag that is used to send the mail ;

header("Location:contact.html")/*Location after submitting the form.*/

 ?>
