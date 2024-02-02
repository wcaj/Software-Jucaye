<?php
require_once "../includes/conexionbasedate.php";

//clase para autenticar usuarios

class Auth {
    protected PDO $conexion;
    public function __construct( conexionbasedate $conexion){
        $this->conexion = $conexion->conexion();
    }

    /*Registro de Usuario */

    public function Registro_Usuario($cedula, $nombre, $apellido, $fecha_nacimiento, $direccion, $encriptar_clave, $rol){
        $fecha_hoy = date('y-m-d');
        $encriptar_clave =password_hash($encriptar_clave, PASSWORD_DEFAULT);

        //Insertar datos a la tabla de Usuarios
        $sql ="INSERT INTO `usuarios` (Cedula, Nombre, Apellido, Fecha_Nacimiento, Direccion, Clave, Creado_En, Actualizado_En, Roles_Id) 
        VALUES (:cedula, :nombres, :apellidos, :fecha_nacimiento, :direccion, :contrasena, :creado_en, :actualizado_en, :tiporol)";

        //Consulta sql
        $stmt = $this->conexion->prepare($sql);
     
        //vincula parametros con las variables
        $stmt->bindParam(':cedula', $cedula, PDO::PARAM_STR);
        $stmt->bindParam(':nombres', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':apellidos', $apellido, PDO::PARAM_STR);
        $stmt->bindParam(':fecha_nacimiento', $fecha_nacimiento, PDO::PARAM_STR);
        $stmt->bindParam(':direccion', $direccion, PDO::PARAM_STR);
        $stmt->bindParam(':contrasena', $encriptar_clave, PDO::PARAM_STR);
        $stmt->bindParam(':creado_en', $fecha_hoy, PDO::PARAM_STR);
        $stmt->bindParam(':actualizado_en', $fecha_hoy, PDO::PARAM_STR);    
        $stmt->bindParam(':tiporol', $rol, PDO::PARAM_STR);
        
       /*Ejecutar la consulta*/
        if ($stmt->execute()) {
            echo 'El usuario ha sido registrado correctamente.';
            return true;
        } else {
             echo 'Error al registrar el usuario.';
             return false;
            }
            
    }

}