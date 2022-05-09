<?php
function ValidarDatos($campo){
    //Array con las posibles cabeceras a utilizar por un spammer
    $badHeads = array("Content-Type:",
    "MIME-Version:",
    "Content-Transfer-Encoding:",
    "Return-path:",
    "Subject:",
    "From:",
    "Envelope-to:",
    "To:",
    "bcc:",
    "cc:");
    //Comprobamos que entre los datos no se encuentre alguna de
    //las cadenas del array. Si se encuentra alguna cadena se
    //dirige a una página de Forbidden
    foreach($badHeads as $valor){
        if(strpos(strtolower($campo), strtolower($valor)) !== false){
            header( "HTTP/1.0 403 Forbidden");
            exit;
        }
    }
}
//Ejemplo de llamadas a la funcion
ValidarDatos($_POST['firstname']);
ValidarDatos($_POST['lastname']);
ValidarDatos($_POST['emailinfo']);
ValidarDatos($_POST['phonenumber']);
ValidarDatos($_POST['comments']);

$errors = '';
$myemail = 'marianasequeirafotos@gmail.com';//<-----Put Your email address here.
if(empty($_POST['firstname'])  || 
    empty($_POST['lastname']) || 
    empty($_POST['emailinfo']) || 
   empty($_POST['comments']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['firstname']; 
$lname = $_POST['lastname']; 
$email_address = $_POST['emailinfo'];
$phone_number = $_POST['phonenumber']; 
$message = $_POST['comments']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
    $from = "info@marianasequeira.com";
	$email_subject = "Nuevo mensaje de: $name";
	$email_body = "Has recibido un nuevo mensaje.\n \n ".
	"Nombre: $name \n Apellido: $lname \n Email: $email_address \n Telefono: $phone_number \n Comentarios: \n $message"; 
	
	$headers = "From: $from\n"; 
	$headers .= "Reply-To: $email_address";

	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	// header('Location: contact-form-thank-you.html');
} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>