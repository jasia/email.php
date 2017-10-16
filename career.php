<?php
if (isset($_POST['name'])   && isset($_POST['email'])   && isset($_POST['gender']) && isset($_POST['url'])   && isset($_POST['nationality'])  && isset($_POST['city'])   && isset($_POST['address'])  && isset($_POST['select job'])  && isset($_POST['file choose'])){
if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['gender']) && !empty($_POST['url']) && !empty($_POST['nationality'])&& !empty($_POST['city']) && !empty($_POST['address']) && !empty($_POST['select job']) && !empty($_POST['file choose'])){

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];                                 
$city = $_POST['city'];
$nationality= $_POST['nationality'];
$url = $_POST['url'];
$address = $_POST['address'];
$select job = $_POST['file choose'];
$support_address = " halarraza@gmail.com";
$headers = "From: ".$email;
$headers2 = "From: ".$support_address;
$finalmessage = "
 From: $_POST[name]
 email: $_POST[email]
 gender: $_POST[gender]
 city: $_POST[city]
 phn: $_POST[url]
 nationality: $_POST[nationality]
 address: $_POST[address]
 file choose: $_POST[file choose]
 
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