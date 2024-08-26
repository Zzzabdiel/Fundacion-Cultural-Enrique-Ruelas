<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- <link rel="stylesheet" href="vista/css/style.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="Vista/CSS/swiper-bundle.min.css">
    <link rel="stylesheet" href="Vista/CSS/proyectosUsuario.css">
    <script src="https://kit.fontawesome.com/720b7d3b3a.js" crossorigin="anonymous"></script>

<body>

    <header class="header">
        <div class="logo">
            <label>
                <a href="?peticion=inicio"><img src="Vista/img/FCER_Horiz_color.png" alt="Logotipo"></a>
            </label>
        </div>
    </header>
    <div id="sidebar" class="">
        <div class="toggle-btn">
            <span>&#9776;</span>
        </div>
        <ul>
            <li><a href="?peticion=inicio">Inicio</a></li>
            <li><a href="?peticion=historia">Historia de la Fundación</a></li>
            <li><a href="?peticion=enriqueruelas">Semblanza de Enrique Ruelas</a></li>
            <li><a href="?peticion=teatro">Teatro Universitario</a></li>
            <li><a href="?peticion=editorial">Editorial</a></li>
            <li><a href="?peticion=proyectos">Proyectos</a></li>
            <li><a href="?peticion=directorio">Directorio</a></li>

        </ul>
    </div>

    <section class="home" id="home">

        <div class="content">
            <h3>Proyectos de la Fundación</h3>
        </div>
        <img src="Vista/img/bottom_wave.png" alt="" class="wave">
    </section>

    <!-- end -->

    <!-- about -->

    <section class="about" id="about">

        <div class="box-container">
            <div class="content">
                <p>Te invitamos a explorar los diversos proyectos que han sido parte esencial de la misión de la
                    <b class="fundacion">Fundación Cultural Enrique Ruelas</b> para promover y celebrar las artes
                    escénicas. Cada
                    iniciativa aquí
                    destacada representa un esfuerzo por enriquecer el panorama cultural y teatral, conectando a la
                    comunidad a través del teatro y el arte.
                </p>
            </div>
    </section>
    <section class="contenedor2" id="contenedor2">
        <p class="titulo2">Puestas Teatrales: Un Encuentro con el Arte Escénico.</p>

        <?php if (!empty($proyectos)): ?>
            <div class="box-container">
                <?php foreach ($proyectos as $proyecto): ?>
                    <div class="card-container content">
                        <article class="card-article content">
                            <img src="<?php echo $proyecto['imagen']; ?>" alt="Imagen de la proyecto" class="card-img">
                            <div class="card-data content">
                                <h3 class="card-title content"> <?php echo $proyecto['nombre']; ?></h3>
                                <span class="card-description">Responsable:
                                    <?php echo $proyecto['responsable']; ?></span>
                                <button class="btn visitar" data-proyecto='<?php echo json_encode($proyecto); ?>'>Ver
                                    más...</button>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p>No hay proyectoes disponibles.</p>
        <?php endif; ?>
        <div id="modal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="modal-text">
                    <h2 id="modal-nombre"></h2>
                    <p id="modal-descripcion"></p>
                    <p id="modal-responsable"></p>
                    <p id="modal-fecha-inicio"></p>
                    <p id="modal-fecha-fin"></p>
                </div>
                <img hidden id="modal-imagen" class="foto" alt="Imagen del proyecto">
            </div>
        </div>
    </section>
    <section class="contenedor" id="contenedor">
        <p class="titulo">Volver a Ruelas.</p>
        <p class="texto">
            En colaboración con la Universidad de Guanajuato, este proyecto se llevó a cabo en el Colegio del Nivel
            Medio Superior con el objetivo de recuperar el origen del Teatro Universitario. El enfoque principal fue
            ofrecer a la juventud un espacio de expresión artística, así como una experiencia humana y estética
            enriquecedora. Entre las actividades destacadas del proyecto, se incluye el montaje de "Las ocho comedias y
            ocho entremeses nunca representados" de Cervantes. Este montaje fue realizado con la participación de
            estudiantes de 11 escuelas en distintos planteles del estado de Guanajuato, promoviendo así la inclusión y
            el talento teatral juvenil a lo largo del estado.</p>
        <div class="wrapper2">
            <i id="left" class="fa-solid fa-angle-left"></i>
            <div class="carousel">
                <img src="Vista/img/Volver1.png" alt="img" draggable="false">
                <img src="Vista/img/Volver2.jpg" alt="img" draggable="false">
                <img src="Vista/img/Volver3.jpg" alt="img" draggable="false">
                <img src="Vista/img/Volver4.jpg" alt="img" draggable="false">
            </div>
            <i id="right" class="fa-solid fa-angle-right"></i>
        </div>
    </section>
    <section class="contenedor2" id="contenedor2">
        <p class="titulo2">El coleccionista de nubes.</p>
        <p class="texto2">Este montaje multidisciplinario fue realizado en colaboración con el Festival Internacional
            Cervantino y la Universidad de Guanajuato en 2022, celebrando la edición 50 del FIC. El espectáculo rindió
            homenaje a Enrique Ruelas y sus contribuciones al teatro, presentando una remembranza del origen del
            festival a través de los Entremeses cervantinos. La dirección estuvo a cargo de Luis Martín Solís, con
            libreto de Alejandro Román y coreografías de Érika Torres.</p>
        <div class="wrapper">
            <div class="gallery">
                <div class="image"><span><img src="Vista/img/Coleccionista1.jpg" alt=""></span></div>
                <div class="image"><span><img src="Vista/img/Coleccionista2.jpg" alt=""></span></div>
                <div class="image"><span><img src="Vista/img/Coleccionista3.jpg" alt=""></span></div>
                <div class="image"><span><img src="Vista/img/Coleccionista4.jpg" alt=""></span></div>
                <div class="image"><span><img src="Vista/img/Coleccionista5.jpg" alt=""></span></div>
            </div>
            
        </div>
        <div class="preview-box">
            <div class="details">
                <span class="title">Imagen <p class="current-img"></p> de <p class="total-img"></p></span>
                <span class="icon fas fa-times"></span>
            </div>
            <div class="image-box">
                <div class="slide prev"><i class="fas fa-angle-left"></i></div>
                <div class="slide next"><i class="fas fa-angle-right"></i></div>
                <img src="" alt="">
            </div>
        </div>
        <div class="shadow"></div>
    </section>
    <!-- end -->
    <!-- footer -->

    <section class="footer">

        <div class="box-container">
            <div class="box">
                <h3>¡Visita nuestras redes sociales!</h3>
                <a href="https://www.facebook.com/profile.php?id=61559542566559&sk=about" class="links"> <i
                        class="fa-brands fa-facebook-f"></i>Facebook</a>
                <a href="https://www.instagram.com/fundacionculturalenriqueruelas/" class="links"> <i
                        class="fa-brands fa-instagram"></i>Instagram</a>
            </div>


        </div>

        <div class="credit">&copy; 2024 Fundación Cultural Enrique Ruelas.</div>

    </section>


    <script src="js/script.js"></script>
    <script src="js/main.js"></script>
    <script src="js/modalProyecto.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/image-slider.js"></script>


</body>

</html>