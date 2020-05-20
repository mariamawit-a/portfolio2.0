
<?php

$name = $_Post['name'];
$visitor_email = $_Post['email'];
$message= $_Post['message'];

if(empty($name)||empty($visitor_email))
{
  echo "Name and email are mandatory!";
  exit;
}

$email_from="kaluasnake@gmail.com";
$email_subject="Portfolio Messgae";
$email_body="You have a new message from $name.\n".
            "Email address: $visitor_email \n".
            "Here is the message:\n $message".
$to = "kaluasnake@gmail.com";
$headers = "From: $email_from \r\n";

mail($to, $email_subject,$email_body,$headers);

?>
