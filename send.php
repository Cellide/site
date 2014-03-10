<?php 
$errors = '';
$myemail = 'contato@cellide.com';//<-----Put Your email address here.
if(empty($_POST['name'])  ||
   empty($_POST['email']) ||
   empty($_POST['project']))
{
    $errors .= "\n Preencha todos os campos obrigatórios";
}

$name = $_POST['name']; 
$company = $_POST['company'] ?: 'não informada'; 
$email_address = $_POST['email']; 
$option = $_POST['option'] ?: 'não informado'; 
$project = $_POST['project']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Endereço de email inválido";
}

if( empty($errors))
{
$to = $myemail;
$email_subject = "Formulario de contato: $name";
$email_body = "Você recebeu uma nova mensagem. ".
" Detalhes:\n Nome: $name \n ".
"Email: $email_address\n Empresa: $company\n Orçamento: $option\n Mensagem: $project";
$headers = "From: $myemail\n";
$headers .= "Reply-To: $email_address";

mail($to,$email_subject,$email_body,$headers);

//redirect to the 'thank you' page
header('Location: pages/thank-you.html');
}
?>