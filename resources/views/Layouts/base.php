<?php
mysql_connect('localhost','root','');
mysql_select_db("hexaware");


 ($_POST['NOMBRE'])=$NOMBRE;
$APELLIDO= ($_POST['APELLIDO']);
$USERNAME= ($_POST['USERNAME']);
$CONTRASEÑA= ($_POST['CONTRASENA']);
$CORREO= ($_POST['CORREO']);
$TELEFONO= ($_POST['TELEFONO']);
$CARRERA=($_POST['CARRERA']);
$CAMPO_LABORAL=($_POST['CAMPO_LABORAL']);

mysql_query("INSERT INTO usuario VALUES('$NOMBRE','$APELLIDO','$USERNAME','$CONTRASEÑA', '$CORREO','$TELEFONO','$CARRERA')");
ECHO '
<H2> REGISTRO COMPLETO </H2>
<a href= "CuerpoL.blade.php"> Logearse </a>
'
?>
