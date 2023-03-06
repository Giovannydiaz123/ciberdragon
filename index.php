<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <title>TUVSA</title>
    <style>
        *{
            font-family: Roboto;
        }
        header {
            position: relative;
            background-color: black;
            height: 75vh;
            min-height: 25rem;
            width: 100%;
            overflow: hidden;
            }

        header video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: 0;
            -ms-transform: translateX(-50%) translateY(-50%);
            -moz-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
        }

        header .container {
            position: relative;
            z-index: 2;
        }

        header .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: black;
            opacity: 0.5;
            z-index: 1;
        }

            /* Media Query for devices withi coarse pointers and no hover functionality */

            /* This will use a fallback image instead of a video for devices that commonly do not support the HTML5 video element */

        @media (pointer: coarse) and (hover: none) {
            header {
                background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
            }

            header video {
                display: none;
            }
        }

    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mx-auto">


                
                
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">TUVSA</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Quines somos</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Galería
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Link</a></li>
                              <li><a class="dropdown-item" href="#">Link</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link disabled">Login</a>
                          </li>
                        </ul>
                        
                      </div>
                    </div>
                </nav>
                <!-- header -->
                <header>

                    <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
                    <div class="overlay"></div>
                  
                    <!-- The HTML5 video element that will create the background video on the header -->
                    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                      <source src="videos/ejemploTUVSA.mp4" type="video/mp4">
                    </video>
                  
                    <!-- The header content -->
                    <div class="container h-100">
                      <div class="d-flex h-100 text-center align-items-center">
                        <div class="w-100 text-white">
                          <h1 class="display-3">
                            <img src="img/LOGO_TUVSA_B.svg" class="img-fluid animate__animated animate__rotateInDownLeft"  alt="logoTuvsa" style="width: 400px;">
                          </h1>
                          <br>
                          <!-- <h3 class="lead mb-0">TRANSPORTISTAS UNIDOS DEL VALLE DE MÉXICO CLAVE 10 S.A DE CV.</p> -->
                        </div>
                      </div>
                    </div>
                </header>
                <!-- header -->
                <asset>

                </asset>
                <footer>

                </footer>
            </div>

          </div>
          <div class="col-12 mx-auto" style="background-color: rgb(202, 202, 202);">
            <div class="row">
              <div class="col-md-4 p-5">
                <div class="card" style="width: 100%;">
                  <img src="img/144185146_3422971647815212_5339305689432075879_n.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 p-5">
                <div class="card" style="width: 100%;">
                  <img src="img/maxresdefault.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 p-5">
                <div class="card" style="width: 100%;">
                  <img src="img/144185146_3422971647815212_5339305689432075879_n.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>