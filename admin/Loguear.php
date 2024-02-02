<?php

(session_status() === PHP_SESSION_NONE ? session_start() : '');

require_once "clases/Clase_Login.php";

$Auth = new Login();

$nombre = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

if (isset($_POST['usuario']) && isset($_POST['contraseña'])){
    if ($Auth->login($nombre, $contraseña)){
        header('Location:../Menu_Principal_Suelo.php');
    }else {
        $_SESSION ["Error"] = 'EL ingreso no es valido ☺️';
        header("location:../Login.php");
        exit();
    } 
}


