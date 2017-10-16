


<?php
if (isset($_POST['name'])   && isset($_POST['email'])  && isset($_POST['url'])  && isset($_POST['message'])){
if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['url'])  && !empty($_POST['message'])){

$name = $_POST['name'];
$email = $_POST['email'];
$url = $_POST['url'];
$message = $_POST['message'];
$support_address = " halarraza@gmail.com";
$headers = "From: ".$email;
$headers2 = "From: ".$support_address;
$finalmessage = "
 From: $_POST[name]
 email: $_POST[email]
 phn: $_POST[url]
 Message: $_POST[mesaage]
 
";
}}
if( $name == ""){

}
else
{
mail( "$support_address","$subject","$finalmessage",$headers);
$result = "Your message have been sent successfully!";
// Your Auto Replay Message//
mail("$email", "Thank you for contracting us !", "We will contract you with in 24 hours ! Our helpline Number +923153216115")
unset($name,$email,$url,$message);

?>
}