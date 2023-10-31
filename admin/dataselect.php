<?php

function usuarios($database){
    $queryusuarios = "SELECT * FROM  usuarios";
    $queryusuarios = mysqli_query($database, $queryusuarios);
    $usuarios =array();

    while($row = mysqli_fetch_array($queryusuarios));
    $usuarios[] = $row["Nombre"];
    return $usuarios;
}