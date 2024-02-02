<?php
require '../includes/config/database.php';
$database = conectarDataBase();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre= $_POST['nombre'];
    $tiporiego = $_POST['tipoRiego'];
    $fechainicio = $_POST['fechaInicio'];
    $fechafin = $_POST['fechaFin'];
    $tipo = $_POST['tipo'];
    $fecha_hoy = date('Y-m-d');

    $query = "INSERT INTO `jucaye`.`cultivos` (`Nombre`, `Tipo_Riego`, `Fecha_Inicio`, `Fecha_Fin`, `Suelos_Id`, `Riego_Id`, `Estado`, `Creado_En`, `Actualizado_En`) VALUES ('$nombre', '$tiporiego', '$fechainicio', '$fechafin', '$tipo', '$fecha_hoy', '$fecha_hoy' );
    ";
    echo $query;

    if (!empty($error) or !mysqli_query($database, $query)) {
        echo "Error al ingresar la informacion";
    } else {
        echo "Datos ingresados correctamente";
        header ("Location: ../src/registros/Registro_Cultivo.php");
        exit();
    }
  
}