<?php
    // Crearemos una clase de POO (programacion orientada a objetos), las clases siempre empiezan con letras mayusculas cuendo son orientadas a objetos
    class Conexion{
            // Una clase puede tener una o muchas funciones
        public function get_conexion(){

            $user = "root";
            $pass = "";
            $host = "localhost";
            $db   = "sipsg";

            $conexion = new PDO("mysql:host=$host; dbname=$db;",$user,$pass ); 
            return $conexion;
        
        }
    }






?>