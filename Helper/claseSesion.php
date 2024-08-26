<?php
class Sesion
{
    public function __construct()
    {
        session_start();
    }

    public function crearVariable($nombre, $valor)
    {
        $_SESSION[$nombre] = $valor;
    }

    public function borrarVariable($nombre)
    {
        unset($_SESSION[$nombre]);
    }
}
?>