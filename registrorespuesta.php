<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header("content-Type: text/html; charset=UTF-8");

$correo = isset($_POST['correo']) ? $_POST['correo'] : '';
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$a_paterno = isset($_POST['a_paterno']) ? $_POST['a_paterno'] : '';
$a_materno = isset($_POST['a_materno']) ? $_POST['a_materno'] : '';
$password = isset($_POST['password'] ) ? $_POST['password'] : '';

$correoTabla='';
$nombreTabla='';
$a_paternoTabla='';
$a_maternoTabla='';
$passwordTabla='';



$con = new SQLite3("data.db");
$cs = $con -> query ("SELECT * FROM login WHERE correo = '$correo'");
if ($con -> num_columns > 0){
    $mensaje.="<h5 class='text-danger text-center'> El correo ya se encuentra registrado</h5>";
} 
else{

$con = new SQLite3("data.db");
$cs = $con -> query ("INSERT INTO login (correo,nombre,a_paterno,a_materno,password) VALUES ('$correo','$nombre','$a_paterno','$a_materno','$password')");

//echo '
//<html>
//<meta http-equiv="REFRESH" content= "1,url=login.html">
//</html>
//';

   
}
?>