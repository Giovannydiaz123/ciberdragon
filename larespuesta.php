<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header("content-Type: text/html; charset=UTF-8");

session_start();

$correo = isset($_POST['correo']) ? $_POST['correo'] : '';
$password = isset($_POST['password'] ) ? $_POST['password'] : '';
$correoTabla = '®';
$passwordTabla = '®';


$con = new SQLite3("data.db");

$cs = $con -> query ("SELECT * FROM login WHERE correo = '$correo'");
while ($result = $cs -> fetchArray()){
    $correoTabla =$result['correo'];
}

$_SESSION['$correoTabla'] = $correoTabla;

if ($correoTabla == $correo) {
    $csDos = $con -> query ("SELECT * FROM login WHERE password = '$password'");
        while ($result = $cs -> fetchArray()){
            $passwordTabla =$result['password'];            
        }

        $_SESSION['$passwordTabla'] = $passwordTabla;

    if ($passwordTabla == $password && $correoTabla == $correo) {
        echo '<script>window.location="index.php"</script>';
    }else{
        echo '<script>alert("Error en Correo o Contraseña")</script>';
        echo '<script>window.location="login.php"</script>';
    }
}else{
    echo '<script>alert("Usuario no Registrado")</script>';
    echo '<script>window.location="login.php"</script>';
}

?>