
<?php
    //importamos las dependencias
    require_once("../modelos/conexion.php");
    require_once("../modelos/consultas.php");

    //aterrizamos en una variable la pk enviada desde el metodo get
    $codigo=$_GET['id'];

    $objetoConsultas= new Consultas();
    $result=$objetoConsultas-> eliminarProducto($id);



?>