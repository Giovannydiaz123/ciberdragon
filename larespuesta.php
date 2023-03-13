<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/sweetalert2@11.js"></script>
</body>
</html>


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
        echo '
        <script>
        Swal.fire({
        title: "Error en Correo o Contraseña",
        }).then((result) => {
            window.location="login.php"
        })
        </script>';
    }
}else{
    echo '
    <script>
    Swal.fire({
        title: "Usuario no Registrado",
    }).then((result) => {
            window.location="registro.html"
    })
    </script>';
}

?>
