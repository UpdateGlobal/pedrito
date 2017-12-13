 <h2>Registro de Clientes</h2>
<?php
 // recupera los datos del envío POST
 $nombre = $_POST['nombre'];
 $email = $_POST['email'];
 $password= $_POST['pass'];
 $direccion = $_POST['direccion'];
 $edad = $_POST['edad'];
 $telefono = $_POST['telefono'];
 
 
 // valida los datos enviados
 // verifica el nombre
 if(empty ($nombre)){
 die ('ERROR: Por favor proporcione su nombre.');
 }
 // verifica la dirección
 if(empty ($direccion)) {
 die ('ERROR: Por favor proporcione su dirección.');
 }
 // verifica la edad
 if(empty ($edad)) {
 die ('ERROR: Por favor proporcione su edad');
 } else if ($edad < 18 || $edad >60){
 die ('ERROR: Las membresías sólo están disponibles para mayores
de 18 y menores de 60 años.');
 }
 // verifica el telefono
 if(empty ($telefono)) {
 die ('ERROR: Por favor proporcione su profesión.');
 }
 $to = 'torralbaalejandro@hotmail.com';
 $from = $email;
 $subject = 'Solicitud de membresía';
 $body = "Nombre: $nombre\r\nemail: $email\r\npassword: $pass\r\nDirección: $direccion\r\n
 Edad: $edad\r\nTelefono: $telefono\r\n";
 
 if (mail($to, $subject, $body, "From: $from")){
 echo 'Gracias por enviar su solicitud.';
 } else {
 die ('ERROR: Error al enviar el mensaje');
 }
?>