
<?php
    //importamos las dependencias
    require_once("../db/conexion.php");
    require_once("../modelos/consultas.php");

    //aterrizamos en una variable la pk enviada desde el metodo get
    $id_inventario=$_GET['id_inventario'];

    $objetoConsultas= new Consultas();
    $result=$objetoConsultas-> eliminarProducto($id_inventario);



?>