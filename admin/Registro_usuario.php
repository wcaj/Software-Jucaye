<?php
/*Rutas de conexion */
require_once "../includes/conexionbasedate.php";
require_once "clases/Clase_Auth.php";

/*conexion y Autentificacion */
$conexion = new conexionbasedate();
$Auth= new Auth($conexion);

/*Verificacion de informacion enviada en el formulario */

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /* Datos del formulario */
    $cedula = $_POST["cedula"];
    $nombre = $_POST["nombres"];
    $apellido = $_POST["apellidos"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $direccion = $_POST["direccion"];
    $encriptar_clave = $_POST["contrasena"];
    $rol = $_POST["tiporol"];
 
    /*Insertar nuevo usuario a la base de datos */

    if ($Auth->Registro_Usuario($cedula, $nombre, $apellido, $fecha_nacimiento, $direccion, $encriptar_clave, $rol)) {
       header ("Location: ../Login.php");
    }else {
        $_SESSION ["Error"] = 'Registro de Usuario Incorrecto ☺️';
        header("location:../src/regirtos/Registro_usuario.php");
        exit();
    }
}