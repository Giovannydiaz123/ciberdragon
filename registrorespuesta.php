<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header("content-Type: text/html; charset=UTF-8");





$correo = isset($_POST['correo']) ? $_POST['correo'] : '';
$nombre  = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$a_paterno = isset($_POST['a_paterno']) ? $_POST['a_paterno'] :'';
$a_materno = isset($_POST['a_materno']) ? $_POST['a_materno'] : '';
$password = isset($_POST['password'] ) ? $_POST['password'] : '';

$correodos= '';

$correoTabla='';
$nombreTabla='';
$a_paternoTabla='';
$a_maternoTabla='';
$passwordTabla='';


$con = new SQLite3("data.db");
$cs = $con -> query ("SELECT * FROM login WHERE correo = '$correo'");

while ($res = $cs -> fetchArray()) {
    $correodos = $res ['correo'];
}

if ($correodos == $correo) {
    echo '<script>alert("Error Usuario Registrado")</script>';
    echo '<script>window.location="login.php"</script>';
}else{
    $csDos = $con -> query ("INSERT INTO login (correo,nombre,a_paterno,a_materno,password) VALUES ('$correo','$nombre','$a_paterno','$a_materno','$password')");
    echo '<script>alert("Registro Correcto")</script>';
    echo '<script>window.location="login.php"</script>';
}




?>

