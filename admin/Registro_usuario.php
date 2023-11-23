<?php
require '../includes/config/database.php';

$database = conectarDataBase();

/* Verificacion de la informacion que se ingresa a la base de datos*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombres'];
    $apellido = $_POST['apellidos'];
    $fechanacimiento = $_POST['fecha_nacimiento'];
    $contraseña = $_POST ['contrasena'];
    $rol = $_POST['tiporol'];
    $direccion = $_POST ['direccion'];
    $fecha_hoy = date('Y-m-d');

/*Muestreo de los errores encontrados en los campos de formulacion */

    $error = [];
    
    if (!$cedula) {
        $error[] = "El campo se encuentra vacido";
    }
    
    if (!$nombre) {
        $error[] = "El campo se encuentra vacido";
    }
    
    if (!$apellido) {
        $error[] = "El campo se encuentra vacido";
    }
    
    if (!$fechanacimiento) {
        $error[] = "El campo se encuentra vacido";
    }

    if (!$direccion) {
        $error[] = "El campo  se encuentra vacido";
    }

    if (!$contraseña) {
        $error[] = "El campo  se encuentra vacido";
    }

    if (!$rol) {
        $error[] = "El campo se encuentra vacido";
    }

    $query = "INSERT INTO `jucaye`.`usuarios` (`Cedula`, `Nombre`, `Apellido`, `Fecha_Nacimiento`, `Direccion`, `Clave`, `Creado_En`, `Actualizado_En`, `Roles_Id`) VALUES ('$cedula', '$nombre', '$apellido', '$fechanacimiento', '$direccion', '$contraseña', '$fecha_hoy', '$fecha_hoy', '$rol');
    ";
    echo $query;

    if (!empty($error) or !mysqli_query($database, $query)) {
        echo "Error al ingresar la informacion";
    } else {
        echo "Datos ingresados correctamente";
        header ("Location: ../src/registros/Registro_Usuario.php");
        exit();
    }
}
