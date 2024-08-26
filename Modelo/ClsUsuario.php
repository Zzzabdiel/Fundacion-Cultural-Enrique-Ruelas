<?php
require_once 'helper/claseConexion.php';

class Usuario
{
    private $_correo;
    private $_nombre;
    private $_contrasena;
    private $_perfil;
    private $_estatus;

    public function setDatos($corr, $nom, $cont)
    {
        $this->_correo = $corr;
        $this->_nombre = $nom;
        $this->_contrasena = $cont;
        // Perfil 1 = Administrador y 2 = Cliente (¿dónde se guarda?)
        // Estatus 0 = Inactiva y 1 = Activo (¿dónde se guarda?)
    }

    public function insertarUsuario()
    {
        $sql = "INSERT INTO persona (correo, nombre, contrasena, perfil, estatus)
                VALUES ('$this->_correo', '$this->_nombre', SHA2('$this->_contrasena', 256), 2, 1)";

        $res = $this->_aplicarQuery($sql);
        return $res;
    }

    public function login()
    {
        $this->_correo = htmlentities($this->_correo, ENT_QUOTES);
        $sql = "SELECT nombre, perfil FROM persona 
                WHERE correo = '$this->_correo' AND contrasena = SHA2('$this->_contrasena', 256)";

        $res = $this->_aplicarQuery($sql);
        $valores = $res->fetch_assoc();
        return $valores;
    }


    private function _aplicarQuery($consulta)
    {
        $objConexion = new Conexion();
        $res = $objConexion->ejecutarConsulta($consulta);
        $objConexion->cerrarConexion();
        return $res;
    }
}
?>