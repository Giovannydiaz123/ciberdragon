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

    echo '
        <script>
        Swal.fire({
        title: "Error Usuario Registrado",
        }).then((result) => {
            window.location="login.php"
        })
        </script>';
}else{
    $csDos = $con -> query ("INSERT INTO login (correo,nombre,a_paterno,a_materno,password) VALUES ('$correo','$nombre','$a_paterno','$a_materno','$password')");
    echo '
    <script>
    Swal.fire({
    title: "Registro Correcto",
    }).then((result) => {
        window.location="login.php"
    })
    </script>';
}




?>

