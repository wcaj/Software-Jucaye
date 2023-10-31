<?php 
function conectarDataBase() {
    $database=mysqli_connect('localhost', 'root', '110299', 'jucaye');
    
    if($database) {
        return $database;
    }   else {
        echo "No se Conecto";
    }
    return $database;
}