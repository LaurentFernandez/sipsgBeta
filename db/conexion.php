<?php

class Conexion {
    public function get_conexion(){
        $host="localhost";
        $user="root";
        $password="";
        $dbname="sipsg";
        $conexion = mysqli_connect($host,$user,$password) or die ("Error al conectarse al servidor");
        $conexion = new PDO("mysql:host=$host; dbname=$dbname;",$user,$password );
        

        

        return $conexion;
    }
}

?>


