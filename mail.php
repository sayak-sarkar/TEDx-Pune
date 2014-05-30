<?php
if(isset($_POST['submit'])) { 
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n\n\n message: $message";
$recipient = "contact@tedxpune.co.in";
$subject = "Enquiry From Website";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
}
if ($formcontent){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";

} else {

echo "Sorry error please try again..."; 

}
?>
