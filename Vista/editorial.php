<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editorial</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- <link rel="stylesheet" href="vista/css/style.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="Vista/CSS/swiper-bundle.min.css">
    <link rel="stylesheet" href="Vista/CSS/editorialUsuario.css">
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
            <h3>Editorial de la Fundación</h3>
        </div>
        <img src="Vista/img/bottom_wave.png" alt="" class="wave">
    </section>

    <!-- end -->

    <!-- about -->

    <section class="about" id="about">

        <div class="box-container">
            <div class="content">
                <p>En esta sección se presentan las publicaciones realizadas por la Fundación Cultural. Aquí encontrarás
                    una
                    lista de los libros que han sido publicados a lo largo de los años.</p>
            </div>
    </section>
    <section class="contenedor" id="contenedor">
        <?php if (!empty($editoriales)): ?>
            <div class="box-container">
                <?php foreach ($editoriales as $editorial): ?>
                    <div class="card-container content">
                        <article class="card-article content">
                            <img src="<?php echo $editorial['imagen']; ?>" alt="Imagen de la editorial" class="card-img">
                            <div class="card-data content">
                                <h3 class="card-title content"> <?php echo $editorial['titulo']; ?></h3>
                                <span class="card-description">Publicado: <?php echo $editorial['fecha_publicacion']; ?></span>
                                <button class="btn visitar" data-editorial='<?php echo json_encode($editorial); ?>'>Ver
                                    más...</button>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p>No hay editoriales disponibles.</p>
        <?php endif; ?>
        <div id="modal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="modal-text">
                    <h2 id="modal-titulo"></h2>
                    <p id="modal-contenido"></p>
                    <p id="modal-autor"></p>
                </div>
                <img hidden id="modal-imagen" class="foto" alt="Imagen de la editorial">
            </div>
        </div>
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

    <script src="js/modal.js"></script>

</body>

</html>