<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="Vista/CSS/vistaAdmin.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <header class="header">
        <div class="logo">
            <label>
                <a href="?peticion=vistaAdmin"><img src="Vista/img/FCER_Horiz_color.png" alt="Logotipo"></a>
            </label>
        </div>
    </header>
    <div id="sidebar" class="">
        <div class="toggle-btn">
            <span>&#9776;</span>
        </div>
        <ul>
            <li><a href="?peticion=inicio">Inicio</a></li>
            <li><a href="?peticion=editorialAdmin"> Editar "Editorial"</a></li>
            <li><a href="?peticion=proyectosAdmin"> Editar "Proyectos"</a></li>
            <li> <a href="index.php?peticion=cerrarSesion">Cerrar Sesión</a></li>
        </ul>
    </div>
        <div class="text-container">
            <section>
            <h1>Texto encima de la imagen</h1>
            <p>Descripción o cualquier otro texto...</p>
            </section>
        </div>
    <script src="js/main.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>