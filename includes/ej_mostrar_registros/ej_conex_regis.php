<?php

$Host="mysql:host=localhost;dbname=jucayeconexion;port=3306";

try {
    $conCultivo=new PDO($Host,'root','110299');
}
catch (PDOException $pe){
    die("No hay conexion en ". "jucayeconexion". ".". $pe->getMessage());
}

$consulta ="SELECT * FROM cultivo Order by Fecha_Inicio Desc";

$query = $conCultivo-> prepare ($consulta);

//ejecutar sentencia SQL
$query ->execute();
$Cultivo = $query -> fetchObject();
$FechaTmp = New Datetime($Cultivo -> Fecha_Inicio);
$FechaEmi= $FechaTmp->format('Y-m-d');

$consulta ="SELECT * FROM cultivo Where DATE_FORMAT(Fecha_Inicio,'%Y-%m-%d') = '". $FechaEmi  ."' Order by Fecha_Inicio Desc ";
$query = $conCultivo-> prepare ($consulta);
$query ->execute();
$LisCultivo = $query -> fetchObject();

$NumRegistros = $query ->rowCount();

echo "NumRegistro:". $NumRegistros;
do {
    echo "Fecha Inicio:". $Cultivo -> Fecha_Inicio;

} while ($LisCultivo =$query->fetchObject());

?>
