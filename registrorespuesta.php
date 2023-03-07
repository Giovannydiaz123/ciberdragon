<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header("content-Type: text/html; charset=UTF-8");

$correo = isset($_POST['correo']) ? $_POST['correo'] : '';
$nombre  = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$pat = isset($_POST['pat']) ? $_POST['pat'] :'';
$mat = isset($_POST['mat']) ? $_POST['mat'] : '';
$password = isset($_POST['password'] ) ? $_POST['password'] : '';

$correodos= '';

$correoTabla='';
$nombreTabla='';
$patTabla='';
$matTabla='';
$passwordTabla='';


$con = new SQLite3("data.db");
$cs = $con -> query ("SELECT * FROM login WHERE correo = '$correo'");

while ($res = $cs -> fetchArray()) {
    $correodos = $res ['correo'];
}

if ($correodos == $correo) {
    echo '<script>alert("Error Usuario Registrado")</script>';
    echo '<script>window.location="login.html"</script>';
}else{
    $csDos = $con -> query ("INSERT INTO login (correo,nombre,pat,mat,password) VALUES ('$correo','$nombre','$pat','$mat','$password')");
    echo '<script>alert("Registro Correcto")</script>';
    echo '<script>window.location="login.html"</script>';
}




?>

// $cs = $con -> query ("INSERT INTO login (correo,nombre,a_paterno,a_materno,password) VALUES ('$correo','$nombre','$a_paterno','$a_materno','$password')");

// $sql = sprintf("SELECT * FROM login WHERE correo = '$correo'");
// $resultado = $conn->query($sql);
// if($resultado){
//     $_SESSION['correo'] = $correo;
//     header("login.html"); 
//   }else{
//     echo 'El email o password es incorrecto, <a href="index.html">vuelva a intenarlo</a>.<br/>';
//   }

// $con = new SQLite3("data.db");
// $cs = $con -> query ("SELECT * FROM login WHERE correo = '$correo'");
// if ($con -> num_columns > 0){
//     $mensaje.="<h5 class='text-danger text-center'> El correo ya se encuentra registrado</h5>";

// } 
// else{
//echo '
//<html>
//<meta http-equiv="REFRESH" content= "1,url=login.html">
//</html>
//';

   

