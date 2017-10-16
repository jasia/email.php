

<?php
if (isset($_POST['name'])   && isset($_POST['email'])  && isset($_POST['url'])){
if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['url'])){

$name = $_POST['name'];
$email = $_POST['email'];
$url = $_POST['url'];
$support_address = " halarraza@gmail.com";
$headers = "From: ".$email;
$headers2 = "From: ".$support_address;
$finalmessage = "
 From: $_POST[name]
 email: $_POST[email]
 phn: $_POST[url]
 
";
}}
if( $name == ""){

}
else
{
mail( "$support_address","$finalmessage",$headers);
$result = "Your message have been sent successfully!";
// Your Auto Replay Message//
mail("$email", "Thank you for contracting us !", "We will contract you with in 24 hours ! Our helpline Number +923153216115")
unset($name,$email,$url,);

?>
}