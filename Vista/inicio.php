<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundación Cultural Enrique Ruelas</title>
    <link rel="stylesheet" href="Vista/CSS/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="Vista/CSS/swiper-bundle.min.css">
    <script src="https://kit.fontawesome.com/720b7d3b3a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<body>
    <!-- <div id="sidebar" class="fixed-right">
        <div class="toggle-btn">
            <span class="icono">&#9776;</span>
        </div>
        <ul>
            <label>
                <a href="?peticion=inicio.php"><img src="Vista/img/FCER_Horiz_colormodificado.png" alt="Logotipo"
                        class="logolateral"></a>
            </label>
            <li><a href="?peticion=historia">Historia de la Fundación</a></li>
            <li><a href="?peticion=enriqueruelas">Semblanza de Enrique Ruelas</a></li>
            <li><a href="?peticion=teatro">Teatro Universitario</a></li>
            <li><a href="?peticion=editorial">Editorial</a></li>
            <li><a href="?peticion=proyectos">Proyectos</a></li>
            <li><a href="?peticion=directorio">Directorio</a></li>

        </ul>
    </div>
    </div> -->
    <header class="header">
    <div class="logo">
            <label>
                <a href="?peticion=inicio"><img src="Vista/img/FCER_Horiz_colormodificado.png" alt="Logotipo"></a>
            </label>
        </div>
        <a class="enlace" href="?peticion=historia">Historia de la Fundación</a>
        <a class="enlace" href="?peticion=enriqueruelas">Semblanza de Enrique Ruelas</a></li>
        <a class="enlace" href="?peticion=teatro">Teatro Universitario</a>
        <a class="enlace" href="?peticion=editorial">Editorial</a>
        <a class="enlace" href="?peticion=proyectos">Proyectos</a>
        <a class="enlace" href="?peticion=directorio">Directorio</a>

    </header>
    <section class="main swiper mySwiper">
        <div class="wrapper swiper-wrapper">
            <div class="slide swiper-slide">
                <img src="Vista/img/teatroUniversitario.png" alt="" class="image" />
                <div class="image-data">
                    <span class="text">Historia de la Fundación.</span>
                    <h2>
                        ¡Descubre mas de la <br />
                        Historia de la Fundación!
                    </h2>
                    <a href="?peticion=historia" class="button">Ver más.</a>
                </div>
            </div>
            <div class="slide swiper-slide">
                <img src="Vista/img/esculturaRuelas.jpg" alt="" class="image" />
                <div class="image-data">
                    <span class="text">Semblanza de Enrique Ruelas Espinoza</span>
                    <h2>
                        ¡Aprende sobre la vida y legado del <br />
                        Maestro Enrique Ruelas!
                    </h2>
                    <a href="?peticion=enriqueruelas" class="button">Ver más.</a>
                </div>
            </div>
            <div class="slide swiper-slide">
                <img src="Vista/img/imagen-5.png" alt="" class="image" />
                <div class="image-data">
                    <span class="text">Teatro Universitario</span>
                    <h2>
                        ¡Descubre más del Teatro Universitario!
                    </h2>
                    <a href="?peticion=teatro" class="button">Ver más.</a>
                </div>
            </div>
            <div class="slide swiper-slide">
                <img src="Vista/img/fondoEditorial.png" alt="" class="image" />
                <div class="image-data">
                    <span class="text">Editorial</span>
                    <h2>
                        ¡Explora los libros <br />
                        publicados por la Fundación!
                    </h2>
                    <a href="?peticion=editorial" class="button">Ver más.</a>
                </div>
            </div>
            <div class="slide swiper-slide">
                <img src="Vista/img/Coleccionista2.jpg" alt="" class="image" />
                <div class="image-data">
                    <span class="text">Proyectos</span>
                    <h2>
                        ¡Conoce los proyectos <br />
                        realizados por la Fundación!
                    </h2>
                    <a href="?peticion=proyectos" class="button">Ver más.</a>
                </div>
            </div>
            <div class="slide swiper-slide">
                <video class="video-slide" autoplay loop muted playsinline>
                    <source src="Vista/vid/ingeniosyartifices.mp4" type="video/mp4">
                    Tu navegador no soporta el elemento de video.
                </video>
                <div class="image-data">
                    <span class="text">Ingenios y Artifices</span>
                    <h2>
                        ¡Escucha nuestro podcast<br />
                        en Spotify!
                    </h2>
                    <a href="https://open.spotify.com/show/2klQfiPNuEVxzoWYMkn7N0?si=1ao7PY88RjWi2kB0LbYbGw"
                        class="button">Escuchar ahora.</a>
                </div>
            </div>

        </div>
        <div class="swiper-button-next nav-btn"></div>
        <div class="swiper-button-prev nav-btn"></div>
        <div class="swiper-pagination"></div>
    </section>
    <script src="js/main.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>