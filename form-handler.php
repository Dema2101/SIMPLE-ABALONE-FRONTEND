<? php 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'info@simpleabalone.com';
$email_body = "User name: $name. \n".
              "User email: $visitor_email. \n".
              "User message: $visitor_message. \n";

$to = 'info@simpleabalone.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-to: $visitor_email \r\n";


mail($to,$email_body,$headers);
header("Location: CONTACT.html");
?>