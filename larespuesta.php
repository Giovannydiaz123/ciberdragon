<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header("content-Type: text/html; charset=UTF-8");

$correo = isset($_POST['correo']) ? $_POST['correo'] : '';
$password = isset($_POST['password'] ) ? $_POST['password'] : '';
$correoTabla='';
$passwordTabla='';

$con = new SQLite3("data.db");

$cs = $con -> query ("SELECT * FROM login WHERE correo = '$correo' AND password = '$password' ");
while ($result = $cs -> fetchArray()){
    $correoTabla =$result['correo'];
    $passwordTabla =$result['password'];
}

if ($correo == $correoTabla){
    if ($password == $passwordTabla){
        echo 'Usuario correcto';
    }
} else {
    echo 'Usuario incorrecto';
}




?>