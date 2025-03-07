<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL;?>public_html/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo URL;?>public_html/css/main.css">
    <title>..::BookStore::..</title>
</head>
<body>
    <div class="maincontent">
        <div class="headermain">
            <!-- LOGO -->
            <img class="imglogomain" src="<?php echo URL;?>public_html/images/logo.png" alt="">
            <!-- Login Button -->
            <a class="btnlogin" href="<?php echo URL;?>login">LOGIN</a>
        </div>
        <!-- Carrusel en Telefono -->
        <div class="slidesmaincel">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo URL;?>public_html/images/slidebookstore1.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo URL;?>public_html/images/slidebookstore2.jpeg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- Carrusel en PC -->
        <div class="slidesmainpc">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo URL;?>public_html/images/slider_pic1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo URL;?>public_html/images/slider_pic2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo URL;?>public_html/images/slider_pic3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>              
        </div>

        <!--Todos los elementos del pie del sitio-->
        <p class="footer">&copy; 2025 BookStore</p>
    </div>
    <?php include_once "app/views/sections/scripts.php"; ?>
</body>
</html>