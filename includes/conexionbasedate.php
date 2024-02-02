<?php

class conexionbasedate{
    private $host = "localhost";
    private $user = "root";
    private $password = "110299";
    private $database = "jucaye";
    private $conect;

    public function conexion(){
        $connectionString ="mysql:host=".$this->host.";dbname=".$this->database.";charset=utf8";
        try {
            $this->conect = new PDO($connectionString,$this->user,$this->password);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $error) {
            $this->conect = "Error de conexion";
            echo "ERROR: ". $error->getMessage();
        }
        return $this->conect;
    }
}
$conect = new conexionbasedate();


