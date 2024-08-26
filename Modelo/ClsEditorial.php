<?php
require_once 'helper/claseConexion.php';

class Editorial
{
    private $_titulo;
    private $_contenido;
    private $_fecha_publicacion;
    private $_autor;
    private $_imagen;
    private $_destacado;
    private $_estatus;

    public function setDatos($titulo, $contenido, $fecha_publicacion, $autor, $imagen, $destacado, $estatus = 1)
    {
        $this->_titulo = $titulo;
        $this->_contenido = $contenido;
        $this->_fecha_publicacion = $fecha_publicacion;
        $this->_autor = $autor;
        $this->_imagen = $imagen;
        $this->_destacado = $destacado;
        $this->_estatus = $estatus;
    }

    public function insertarEditorial()
    {
        try {
            $nombreImagen = $this->_imagen['name'];
            $ruta = 'Vista/Catalogo/Editorial/' . $nombreImagen;
            move_uploaded_file($this->_imagen['tmp_name'], $ruta);

            $sql = "INSERT INTO editorial (titulo, contenido, fecha_publicacion, autor, imagen, destacado, estatus)
                    VALUES ('$this->_titulo', '$this->_contenido', '$this->_fecha_publicacion', '$this->_autor', '$ruta', '$this->_destacado', '$this->_estatus')";

            $res = $this->_aplicarQuery($sql);
            return $res;
        } catch (Exception $e) {
            return "Error en la consulta: " . $e->getMessage();
        }
    }

    public function obtenerTodasEditoriales()
    {
        try {
            $sql = "SELECT * FROM editorial";
            $res = $this->_aplicarQuery($sql);

            if ($res && $res->num_rows > 0) {
                return $res->fetch_all(MYSQLI_ASSOC); // Devolver todos los resultados como un array asociativo
            } else {
                return []; // Devolver un array vacío si no hay resultados
            }
        } catch (Exception $e) {
            return "Error en la consulta: " . $e->getMessage();
        }
    }
    public function editorialActivos()
    {
        $sql = "SELECT * FROM editorial WHERE estatus = 1";
        $res = $this->_aplicarQuery($sql);
        return $res;
    }

    public function cambiarEstatus($id, $nuevoEstatus)
    {
        $sql = "UPDATE editorial SET estatus = '$nuevoEstatus' WHERE id = '$id'";
        $res = $this->_aplicarQuery($sql);
        return $res;
    }


    private function _aplicarQuery($consulta)
    {
        $objConexion = new Conexion();
        $res = $objConexion->ejecutarConsulta($consulta);
        $objConexion = $objConexion->cerrarConexion();
        return $res;
    }
}
?>