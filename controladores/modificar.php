<?php
    // enlazamos las dependencia necesarias
    require_once("../db/conexion.php");
    require_once("../modelos/consultas.php");

    // Capturamos en variables los valores enviados desde el form atraves del metodo POST y los name de los campos 

    $id_inventario = $_POST['id_inventario'];
    $descripcion = $_POST['descripcion'];
    $estado = $_POST['estado'];
    $movimiento = $_POST['movimiento'];
    $producto = $_POST['producto'];
    $fechaEntrada = $_POST['fechaEntrada'];
    $fechaSalida = $_POST['fechaSalida'];
    $cantidad = $_POST['cantidad'];
    $cantidadMaxima = $_POST['cantidadMaxima'];
    $cantidadMinima = $_POST['cantidadMinima'];

    // validamos que lso campos obligatorios esten diligenciados o llenos 

    if (strlen($id_inventario)>0 && strlen($descripcion)>0 && strlen($estado)>0 && strlen($movimiento)>0 && strlen($producto)>0 && strlen($fechaEntrada)>0 && strlen($fechaSalida)>0 && strlen($cantidad)>0 && strlen($cantidadMaxima)>0 && strlen($cantidadMinima)>0) {
        
            //En una variable creamos un objeto apartir de la clase principal
        $objetoConsultas = new consultas();
        $result = $objetoConsultas->modificarInventario($id_inventario, $descripcion, $estado, $movimiento, $producto, $fechaEntrada, $fechaSalida, $cantidad, $cantidadMaxima, $cantidadMinima);
    }else{
        echo '<script> alert("los datos fueron actualizados de manera correcta ") </script>';
        echo "<script> location.href='../Dashboard admin/inventario.php' </script>";
    }





?>