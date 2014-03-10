<?php 
$errors = '';
$myemail = 'info@stefanoschintu.com';//<-----Put Your email address here.
if(empty($_POST['name'])  || 
   empty($_POST['company']) || 
   empty($_POST['email']) ||
   empty($_POST['option']) ||
   empty($_POST['project']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name']; 
$company = $_POST['company']; 
$email_address = $_POST['email']; 
$option = $_POST['option']; 
$project = $_POST['project']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
$to = $myemail;
$email_subject = "Contact form submission: $name";
$email_body = "You have received a new message. ".
" Here are the details:\n Name: $name \n ".
"Email: $email_address\n Company: $company\n Budget: $option\n Message: $project";
$headers = "From: $myemail\n";
$headers .= "Reply-To: $email_address";

mail($to,$email_subject,$email_body,$headers);

//redirect to the 'thank you' page
header('Location: pages/thank-you.html');
}
?>