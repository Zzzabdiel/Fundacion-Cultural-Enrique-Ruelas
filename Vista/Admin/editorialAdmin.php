<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar Editorial</title>
    <link rel="stylesheet" href="Vista/CSS/AdminApartados.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <header class="header">
        <div class="logo">
            <label>
         <img src="Vista/img/FCER_Horiz_color.png" alt="Logotipo">
            </label>
        </div>
    </header>
    <div id="sidebar" class="">
        <div class="toggle-btn">
            <span>&#9776;</span>
        </div>
        <ul>
            <li><a href="?peticion=editorialAdmin"> Editar "Editorial"</a></li>
            <li><a href="?peticion=proyectosAdmin"> Editar "Proyectos"</a></li>
            <li> <a href="index.php?peticion=cerrarSesion">Cerrar Sesión</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="title encabezado">Administración de Editorial</div>
        <form action="index.php?peticion=guardarEditorial" method="POST" enctype="multipart/form-data">
            <div class="editorial-details">
                <div class="input-box">
                    <span class="details">Título:</span>
                    <input type="text" id="titulo" name="titulo" placeholder="Ingresa el titulo" required>
                </div>
                <div class="input-box">
                    <span class="details">Contenido:</span>
                    <textarea id="contenido" name="contenido" required></textarea>
                </div>
                <div class="input-box">
                    <span class="details">Fecha de publicación:</span>
                    <input type="date" id="fecha_publicacion" name="fecha_publicacion" required>
                </div>
                <div class="input-box">
                    <span class="details">Autor:</span>
                    <input type="text" id="autor" name="autor" placeholder="Ingresa el autor" required>
                </div>
                <div class="input-imagen">
                    <span class="details">Imagen:</span>
                    <input type="file" id="imagen" name="imagen" required>
                </div>
            </div>
            <label for="destacado">Destacado:</label>
            <input type="checkbox" id="destacado" name="destacado" value="1">
            <div class="button">
                <button type="submit">Guardar</button>
            </div>
        </form>
        <h2>Lista de Libros</h2>
        <table class="table table-striped table-bordered tabla">
            <thead class="thead-dark">
                <tr>
                    <th>Título</th>
                    <th>Contenido</th>
                    <th>Fecha de Publicación</th>
                    <th>Autor</th>
                    <th>Imagen</th>
                    <th>Destacado</th>
                    <th>Estatus</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($editoriales as $editorial): ?>
                    <tr>
                        <td><?php echo $editorial['titulo']; ?></td>
                        <td><?php echo $editorial['contenido']; ?></td>
                        <td><?php echo $editorial['fecha_publicacion']; ?></td>
                        <td><?php echo $editorial['autor']; ?></td>
                        <td><img src="<?php echo $editorial['imagen']; ?>" alt="Imagen de la editorial" class="img-fluid">
                        </td>
                        <td><?php echo $editorial['destacado']; ?></td>
                        <td>
                            <?php if ($editorial['estatus'] == 1): ?>
                                <span class="badge badge-success">Activo</span>
                            <?php else: ?>
                                <span class="badge badge-secondary">Inactivo</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <form action="index.php?peticion=cambiarEstatusEditorial" method="post">
                                <input type="hidden" name="id" value="<?php echo $editorial['id']; ?>">
                                <select name="nuevoEstatus" class="form-control">
                                    <option value="1">Activar</option>
                                    <option value="0">Desactivar</option>
                                </select>
                                <button type="submit" class="btn btn-primary mt-2">Cambiar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="js/main.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
