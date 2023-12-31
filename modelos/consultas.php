<?php

    // las clases siempre empiezan por mayusculas
    class Consultas{
        // funcion registrar productos

        public function registrarProducto ($id, $descripcion, $estado, $movimiento, $producto, $fechaEntrada, $fechaSalida, $cantidad, $cantidadMaxima, $cantidadMinima){
            // creamos un objeto conexion
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();
            // creamos una variable que capture la sentencia de SQL a ejecutar 
            $registrar = "INSERT INTO inventario(inventario_id,inventario_descripcion,inventario_estado,inventario_movimiento,inventario_producto,inventario_fechaentrada,inventario_fechasalida,inventario_can,inventario_canmax,inventario_canmin) VALUES(:id, :descripcion, :estado, :movimiento, :producto, :fechaEntrada, :fechaSalida, :cantidad, :cantidadMaxima, :cantidadMinima);";
            // preparamos todo lo necesario para ejecutar el insert
            $result = $conexion->prepare($registrar); 

            $result->bindParam(':id',$id);
            $result->bindParam(':descripcion',$descripcion);
            $result->bindParam(':estado',$estado);
            $result->bindParam(':movimiento',$movimiento);
            $result->bindParam(':producto',$producto);
            $result->bindParam(':fechaEntrada',$fechaEntrada);
            $result->bindParam(':fechaSalida',$fechaSalida);
            $result->bindParam(':cantidad',$cantidad);
            $result->bindParam(':cantidadMaxima',$cantidadMaxima);
            $result->bindParam(':cantidadMinima',$cantidadMinima);


            $result->execute();
            echo '<script> alert("bien hecho alparecer no eres tan inutil") </script>';
            echo "<script> location.href='../registrarInventario.php' </script>";

        }

        public function mostrarProductos(){
            // creamos un objeto conexion

                $f = null;

            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();
             // creamos una variable que capture la sentencia de SQL a ejecutar 
            $mostrar = "SELECT * FROM inventario";
            // preparamos todo lo necesario para ejecutar el insert
            $result = $conexion->prepare($mostrar);

            $result->execute();

            while ($resultado = $result->fetch()) {
                $f[]=$resultado;

                
            }

            return $f;



        }

        public function eliminarProducto($id){

            // creamos un objeto conexion
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $eliminar = "DELETE FROM inventario WHERE id=:id";
            $result = $conexion->prepare($eliminar);

            $result->bindParam(':id',$id);

            $result->execute();

            echo '<script> alert("producto eliminado como tus derechos") </script>';
            echo "<script> location.href='../index.php' </script>";




        }

        public function cargarProductoF($id){

             // creamos un objeto conexion

             $f = null;

             $objetoConexion = new Conexion();
             $conexion = $objetoConexion->get_conexion();
              // creamos una variable que capture la sentencia de SQL a ejecutar 
             $mostrar = "SELECT * FROM inventario WHERE id=:id";
             // preparamos todo lo necesario para ejecutar el insert
             $result = $conexion->prepare($mostrar);

             $result->bindParam(':id',$id);


 
             $result->execute();
 
             while ($resultado = $result->fetch()) {
                 $f[]=$resultado;
 
                 
             }
 
             return $f;


        }
    
        public function modificarProducto($id, $descripcion, $estado, $movimiento, $producto, $fechaEntrada, $fechaSalida, $cantidad, $cantidadMaxima, $cantidadMinima){
            // creamos un objeto conexion
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();
            // creamos una variable que capture la sentencia de SQL a ejecutar 
            $modificar = "UPDATE inventario SET inventario_descripcion=:descripcion,inventario_estado=:estado,inventario_movimiento=:movimiento,inventario_producto=:producto,inventario_fechaentrada=:fechaEntrada,inventario_fechasalida=:fechaSalida,inventario_can=:cantidad,inventario_canmax=:cantidadMaxima,inventario_canmin=:cantidadMinima WHERE inventario_id=:id";
            // preparamos todo lo necesario para ejecutar el insert
            $result = $conexion->prepare($modificar);
            
                $result->bindParam(':id',$id);
            $result->bindParam(':descripcion',$descripcion);
            $result->bindParam(':estado',$estado);
            $result->bindParam(':movimiento',$movimiento);
            $result->bindParam(':producto',$producto);
            $result->bindParam(':fechaEntrada',$fechaEntrada);
            $result->bindParam(':fechaSalida',$fechaSalida);
            $result->bindParam(':cantidad',$cantidad);
            $result->bindParam(':cantidadMaxima',$cantidadMaxima);
            $result->bindParam(':cantidadMinima',$cantidadMinima);

            $result->execute();
            echo '<script> alert("datos de producto actualizados ") </script>';
            echo "<script> location.href='../index.php' </script>";

        }
    }




?>