<?php
if(empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['address']) || empty($_POST['message'])) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$address = strip_tags(htmlspecialchars($_POST['address']));
$message = strip_tags(htmlspecialchars($_POST['message']));


$address = "$address:  $name";
$body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nphone: $phone\n\naddress: $address\n\nMessage: $message";

	
if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>
