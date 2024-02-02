<?php

require "../conexionbasedate.php";
$sucess =true;

$conexion_impl = new conexionbasedate();
$conexion = $conexion_impl->conexion();

$sql = $conexion->prepare("SELECT Id, Clave FROM usuarios WHERE Clave NOT LIKE '$2y$%' ");
$sql->execute();
$usuario = $sql->fetchAll(PDO::FETCH_ASSOC);
var_dump($usuario);

foreach($usuario as $usuario) {
    $Id = $usuario['Id'];
    $clave = $usuario['Clave'];
    $encriptar_clave = password_hash($clave, PASSWORD_DEFAULT);

    $sql = $conexion->prepare('UPDATE usuarios SET Clave = :clave_encriptada WHERE Id = :Id');
    $sql->bindParam(':clave_encriptada', $encriptar_clave);
    $sql->bindParam(':Id', $Id);

    if (!$sql->execute()) {
        $sucess = false;
        break;
    }
}
