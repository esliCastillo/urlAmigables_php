<?php
require("../libs/PHPMailer/PHPMailerAutoload.php");

$mail = new PHPMailer();
//indico a la clase que use SMTP
$mail->isSMTP();
$mail->CharSet = "utf-8";
//permite modo debug para ver mensajes de las cosas que van ocurriendo
//$mail->SMTPDebug = 2;
//Debo de hacer autenticación SMTP
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
//indico el servidor de Gmail para SMTP
$mail->Host = "smtp.live.com";
//indico el puerto que usa Gmail
$mail->Port = 587;
//indico un usuario / clave de un usuario de gmail
$mail->Username = "juesli_c@hotmail.es";
$mail->Password = "tortus";
$mail->SetFrom('juesli_c@hotmail.es', 'Eslí Jesús Castillo Durán');
//$mail->AddReplyTo($_POST['email'],"Eslí Jesús Castillo Durán");
$mail->Subject = $_POST['asunto'];//"Envío de email usando SMTP de Gmail";
$mail->MsgHTML("Telefono: ".$_POST['telefono']."<br>".$_POST['comentario']);
//indico destinatario
$address = "eslijcastillo@gmail.com";
$mail->AddAddress($address, "Nombre completo");
$address = $_POST['email'];
$mail->AddAddress($address, "Nombre completo");
if(!$mail->Send()) {
echo "Error al enviar: " . $mail->ErrorInfo;
} else {
echo "Mensaje enviado!";
}
echo '<script>window.location.href="../";</script>';