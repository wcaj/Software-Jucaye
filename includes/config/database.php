<?php 
function conectarDataBase() {
    $database=mysqli_connect('localhost', 'root', '110299', 'jucayeconexion');
    
    if($database) {
        return $database;
    }   else {
        echo "No se Conecto";
    }
    return $database;
