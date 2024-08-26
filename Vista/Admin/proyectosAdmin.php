<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar Proyectos</title>
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
        <div class="title encabezado">Administración de Proyectos</div>
        <form action="index.php?peticion=guardarProyectos" method="POST" enctype="multipart/form-data">
            <div class="editorial-details">
                <div class="input-box">
                    <span class="details">Título:</span>
                    <input type="text" id="nombre" name="nombre" placeholder="Ingresa el nombre" required>
                </div>
                <div class="input-box">
                    <span class="details">Descripción:</span>
                    <textarea id="descripcion" name="descripcion" required></textarea>
                </div>
                <div class="input-box">
                    <span class="details">Fecha de Inicio:</span>
                    <input type="date" id="fecha_inicio" name="fecha_inicio" required>
                </div>
                <div class="input-box">
                    <span class="details">Fecha de finalización:</span>
                    <input type="date" id="fecha_fin" name="fecha_fin" required>
                </div>
                <div class="input-box">
                    <span class="details">Responsable:</span>
                    <input type="text" id="responsable" name="responsable" placeholder="Ingresa el responsable"
                        required>
                </div>
                <div class="input-imagen">
                    <span class="details">Imagen:</span>
                    <input type="file" id="imagen" name="imagen" required>
                </div>
                <div>
                    <button type="submit">Guardar</button>
                </div>
        </form>

        <h2 class="title">Lista de Proyectos</h2>
        <table class="table table-striped table-bordered tabla">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Fecha de Inicio</th>
                    <th>Fecha de finalización</th>
                    <th>Responsable</th>
                    <th>Imagen</th>
                    <th>Estatus</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($proyectos as $proyecto): ?>
                    <tr>
                        <td><?php echo $proyecto['nombre']; ?></td>
                        <td><?php echo $proyecto['descripcion']; ?></td>
                        <td><?php echo $proyecto['fecha_inicio']; ?></td>
                        <td><?php echo $proyecto['fecha_fin']; ?></td>
                        <td><?php echo $proyecto['responsable']; ?></td>
                        <td><img src="<?php echo $proyecto['imagen']; ?>" alt="Imagen del proyecto" class="img-fluid">
                        </td>
                        <td>
                            <?php if ($proyecto['estatus'] == 1): ?>
                                <span class="badge badge-success">Activo</span>
                            <?php else: ?>
                                <span class="badge badge-secondary">Inactivo</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <form action="index.php?peticion=cambiarEstatusProyectos" method="post">
                                <input type="hidden" name="id" value="<?php echo $proyecto['id']; ?>">
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