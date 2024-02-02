<?php
require_once "../includes/conexionbasedate.php";

class Login
{
    private PDO $conexion;
    public function __construct()
    {
        $conexion_impl = new conexionbasedate();
        $this->conexion = $conexion_impl->conexion();
    }
    public function login($usuario, $contraseña)
    {
        $sql = "SELECT * FROM jucaye.usuarios WHERE Nombre = :nombre";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindParam(':nombre', $usuario);
        $stmt->execute();
        $fila = $stmt->fetch(PDO::FETCH_ASSOC);
        $encriptar_clave = $fila['Clave'];

        // Verificar si la contraseña coincide con el hash proporcionado (clave_encriptada)
        if (password_verify($contraseña, $encriptar_clave)) {
            $_SESSION['Id'] = $fila['Id'];
            $_SESSION['Cedula'] = $fila['Cedula'];
            $_SESSION['Nombre'] = $fila['Nombre'];
            $_SESSION['Apellido'] = $fila['Apellido'];
            $_SESSION['Fecha_Nacimiento'] = $fila['FEcha_Nacimiento'];
            $_SESSION['Direccion'] = $fila['Direccion'];
            $_SESSION['Clave'] = $fila['Clave'];
            $_SESSION['Creado_En'] = $fila['Creado_En'];
            $_SESSION['Actualizado_En'] = $fila['Actualizado_En'];
            $_SESSION['Roles_Id'] = $fila['Roles_Id'];
            return true;
        } else {
            return false;
        }

    }
}


