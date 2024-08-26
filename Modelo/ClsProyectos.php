<?php
require_once 'Helper/claseConexion.php';

class Proyectos
{
    private $_nombre;
    private $_descripcion;
    private $_fecha_inicio;
    private $_fecha_fin;
    private $_responsable;
    private $_imagen;
    private $_estatus;

    public function setDatos($nombre, $descripcion, $fecha_inicio, $fecha_fin, $responsable, $imagen, $estatus = 1)
    {
        $this->_nombre = $nombre;
        $this->_descripcion = $descripcion;
        $this->_fecha_inicio = $fecha_inicio;
        $this->_fecha_fin = $fecha_fin;
        $this->_responsable = $responsable;
        $this->_imagen = $imagen;
        $this->_estatus = $estatus;
    }

    public function insertarProyecto()
    {
        try {
            $nombreImagen = $this->_imagen['name'];
            $ruta = 'Vista/Catalogo/Proyectos/' . $nombreImagen;
            move_uploaded_file($this->_imagen['tmp_name'], $ruta);

            $sql = "INSERT INTO proyectos(nombre,descripcion,fecha_inicio,fecha_fin,responsable,imagen)
            VALUES ('$this->_nombre','$this->_descripcion','$this->_fecha_inicio','$this->_fecha_fin','$this->_responsable','$ruta')";

            $res = $this->_aplicarQuery($sql);
            return $res;
        } catch (Exception $p) {
            return "Error en la consulta: " . $p->getMessage();
        }
    }
    public function obtenerTodosProyectos()
    {
        try {
            $sql = "SELECT * FROM proyectos";
            $res = $this->_aplicarQuery($sql);
            if ($res && $res->num_rows > 0) {
                return $res->fetch_all(MYSQLI_ASSOC);
            } else {
                return [];
            }
        } catch (Exception $p) {
            return "Error en la consulta: " . $p->getMessage();
        }
    }
    public function proyectosActivos()
    {
        $sql = "SELECT * FROM proyectos WHERE estatus=1";
        $res = $this->_aplicarQuery($sql);
        return $res;
    }
    public function proyectosInactivos()
    {
        $sql = "SELECT * FROM proyectos WHERE estatus=0";
        $res = $this->_aplicarQuery($sql);
        return $res;
    }

    public function cambiarEstatusP($id, $nuevoEstatus)
    {
        $sql = "UPDATE proyectos SET estatus = '$nuevoEstatus' WHERE id = '$id'";
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