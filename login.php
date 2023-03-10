<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header("content-Type: text/html; charset=UTF-8");

session_start();
session_destroy();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <title>Login</title>
    <style>

    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 mx-auto" style="text-align: center;">
                <div class="my-5 mx-auto">
                    <img src="img/LOGO_TUVSA.svg" alt="logo" class="img-fluid">
                    <h1 class="my-4">Inicio de sesión</h1>
                    <div class="card mx-auto my-4" style="width: 30rem;">
                        <div class="card-body">

                            <form action="larespuesta.php" method="POST">
                            <div class="mb-3">
                            <label class="form-label">Correo Electronico</label>
                            <input type="email" class="form-control" name="correo">
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password">
                            </div>
                            <button type="submit" class="btn btn-success btn-lg form-control">Ingresar</button>
                            </form>
                    </div>
                      </div>
                    <div class="card mx-auto my-4" style="width: 30rem;">
                        <div class="card-body">

                            ¿Eres nuevo?<a href=registro.html>crear una cuenta</a>
                        </div>
                    </div>
</body>

</html>