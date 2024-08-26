<?php
require_once 'Modelo/ClsEditorial.php';
require_once 'Modelo/ClsUsuario.php';
require_once 'Helper/claseSesion.php';
require_once 'Modelo/ClsProyectos.php';

$peticion = $_POST['peticion'] ?? $_GET['peticion'] ?? 'inicio';

$objSesion = new Sesion();

if (!isset($_SESSION['usuario'])) {
    switch ($peticion) {
        case 'inicio':
            require_once 'Vista/inicio.php';
            break;
        case 'historia':
            require_once 'Vista/fundacion.php';
            break;
        case 'enriqueruelas':
            require_once 'Vista/enriqueruelas.php';
            break;
        case 'teatro':
            require_once 'Vista/teatro.php';
            break;
        case 'editorial':
            $editorial = new Editorial();
            $editoriales = $editorial->editorialActivos();
            require_once 'Vista/editorial.php'; // Vista del cliente para mostrar las editoriales
            break;
        case 'proyectos':
            $proyecto = new Proyectos();
            $proyectos = $proyecto->proyectosActivos();
            require_once 'Vista/proyectos.php';
            break;
        case 'directorio':
            require_once 'Vista/directorio.php';
            break;
        case 'iniciarSesion':
            require_once 'Vista/Admin/login.php';
            break;
        case 'registroUsuario':
            require_once 'Vista/Admin/registroUsuario.php';
            break;
        case 'ingresar':
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];

            $usuario = new Usuario();
            $usuario->setDatos($correo, '', $contrasena, []);

            $datos = $usuario->login();

            if ($datos && $datos['perfil'] == 2) {
                $objSesion->crearVariable('usuario', $datos);
                header('Location: index.php?peticion=proyectosAdmin');
                exit;
            } else {
                $mensaje = 'No se puede iniciar sesión';
                require_once 'Vista/Admin/login.php';
                exit;
            }
            break;
        case 'guardarUsuario':
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];

            $usuario = new Usuario();
            $usuario->setDatos($correo, $nombre, $contrasena, $_FILES['foto'] ?? null);

            $resultado = $usuario->insertarUsuario();

            if ($resultado === true) {
                header('Location: index.php?peticion=registroUsuario&success=1');
                exit;
            } else {
                $mensaje = $resultado; // Aquí se mostrará el mensaje de error devuelto por insertarUsuario
                require_once 'Vista/Admin/registroUsuario.php';
                exit;
            }
        default:
            require_once 'Vista/inicio.php';
            break; // Mostrar las editoriales en la vista del cliente
            if ($peticion === 'editorial') {
                $editorial = new Editorial();
                $editoriales = $editorial->obtenerEditoriales();

                // Incluir la vista del cliente para mostrar las editoriales
                require_once 'Vista/editoriales.php';
            }
    }

} else {
    if ($_SESSION['usuario']['perfil'] == 2) {
        switch ($peticion) {
            case 'proyectosAdmin':
                $proyecto = new Proyectos();
                $proyectos = $proyecto->obtenerTodosProyectos();
                require_once 'Vista/Admin/proyectosAdmin.php';
                break;
            case 'guardarProyectos':
                $nombre = $_POST['nombre'];
                $descripcion = $_POST['descripcion'];
                $fecha_inicio = $_POST['fecha_inicio'];
                $fecha_fin = $_POST['fecha_fin'];
                $responsable = $_POST['responsable'];
                $imagen = $_FILES['imagen'];

                $proyecto = new Proyectos();
                $proyecto->setDatos($nombre, $descripcion, $fecha_inicio, $fecha_fin, $responsable, $imagen);

                $resultado = $proyecto->insertarProyecto();

                if ($resultado === true) {
                    header('Location: index.php?peticion=proyectosAdmin&success=1');
                    exit;
                } else {
                    $mensaje = 'No se puede registrar';
                    require_once 'Vista/Admin/proyectosAdmin.php';
                    exit;
                }
            case 'cambiarEstatusProyectos':
                $id = $_POST['id'];
                $nuevoEstatus = $_POST['nuevoEstatus'];

                $proyecto = new Proyectos();
                $resultado = $proyecto->cambiarEstatusP($id, $nuevoEstatus);

                if ($resultado === true) {
                    header('Location: index.php?peticion=proyectosAdmin&success=1');
                    exit;
                } else {
                    $mensaje = 'No se puede cambiar el estatus';
                    require_once 'Vista/Admin/proyectosAdmin.php';
                    exit;
                }
            case 'editorialAdmin':
                $editorial = new Editorial();
                $editoriales = $editorial->obtenerTodasEditoriales(); // Obtener todas las editoriales
                require_once 'Vista/Admin/editorialAdmin.php';
                break;
            case 'cambiarEstatusEditorial':
                $id = $_POST['id'];
                $nuevoEstatus = $_POST['nuevoEstatus'];

                $editorial = new Editorial();
                $resultado = $editorial->cambiarEstatus($id, $nuevoEstatus);

                if ($resultado === true) {
                    header('Location: index.php?peticion=editorialAdmin&success=1');
                    exit;
                } else {
                    $mensaje = 'No se puede cambiar el estatus';
                    require_once 'Vista/Admin/editorialAdmin.php';
                    exit;
                }
            case 'guardarEditorial':
                $titulo = $_POST['titulo'];
                $contenido = $_POST['contenido'];
                $fecha_publicacion = $_POST['fecha_publicacion'];
                $autor = $_POST['autor'];
                $imagen = $_FILES['imagen'];
                $destacado = $_POST['destacado'];
                $editorial = new Editorial();
                $editorial->setDatos($titulo, $contenido, $fecha_publicacion, $autor, $imagen, $destacado);

                $resultado = $editorial->insertarEditorial();

                if ($resultado === true) {
                    header('Location: index.php?peticion=editorialAdmin&success=1');
                    exit;
                } else {
                    $mensaje = 'No se puede registrar';
                    require_once 'Vista/Admin/editorialAdmin.php';
                    exit;
                }
            case 'cerrarSesion':
                $objSesion->borrarVariable('usuario');
                header('Location: index.php?peticion=iniciarSesion');
                exit;
            default:
                header('Location: index.php?peticion=vistaAdmin');
                exit;
        }
    } else {
        require_once 'Vista/inicio.php';
        exit;
    }
}
?>