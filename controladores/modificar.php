<?php
    // enlazamos las dependencia necesarias
    require_once("../modelos/conexion.php");
    require_once("../modelos/consultas.php");

    // Capturamos en variables los valores enviados desde el form atraves del metodo POST y los name de los campos 

    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $estado = $_POST['estado'];

    // validamos que lso campos obligatorios esten diligenciados o llenos 

    if (strlen($codigo)>0 && strlen($nombre>0 && strlen($descripcion)>0 && strlen($precio)>0 && strlen($estado)>0)    ) {
        
            //En una variable creamos un objeto apartir de la clase principal
        $objetoConsultas = new consultas();
        $result = $objetoConsultas->modificarProducto($codigo, $nombre, $descripcion, $precio, $estado);
    }else{
        echo '<script> alert("los datos fueron actualizados de manera correcta") </script>';
        echo "<script> location.href='../index.php' </script>";
    }





?>