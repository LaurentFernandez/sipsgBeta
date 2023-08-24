<?php
  // importamos las dependencias necesarias

  require_once("../modelos/conexion.php");
  require_once("../modelos/consultas.php");
  require_once("../controladores/mostrarTabla.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/styleInventario.css">
  <link rel="icon" href="img/SoloLogoSIPSG.png" type="image/png">
  <title>Inventario</title>
</head>
<body>
  <nav class="sidebar close">
    <header>
      <div class="text logo">
        <span class="name">SIPSG</span>
        <span class="profe">Administrador</span>
      </div>
      <i class="bx bx-menu toggle"></i>
    </header>

    <div class="profile" >
      <div class="photo"><img src="img/SoloLogoSIPSG.png" alt="Foto de Perfil"></div>
      
    </div>

    <div class="menu-bar">
      <div class="menu">
        <li class="search-box">
          <i class="bx bx-search icon"></i>
          <input type="text" placeholder="    Buscar....">
        </li>

        <ul class="menu-links">
          <li class="nav-link">
            <a href="index.html">
              <i class="bx bx-home-alt icon"></i>
              <span class="text nav-text">Home</span>
            </a>

          </li>

          <li class="nav-link">
            <a href="novedades.html">
              <i class="bx bx-bell icon"></i>
              <span class="text nav-text">Novedades</span>
            </a>

          </li>

          <li class="nav-link">
            <a href="usuarios.html">
              <i class="bx bx-user icon" ></i>
              <span class="text nav-text">Usuarios</span>
            </a>

          </li>

          <li class="nav-link">
            <a href="#">
              <i class="bx bx-data icon" ></i>
              <span class="text nav-text">Iventario</span>
            </a>

          </li>

          <li class="nav-link">
            <a href="proveedores.html">
              <i class="bx bx-package icon" ></i>
              <span class="text nav-text">Proveedores</span>
            </a>

          </li>

          

        </ul>
      </div>

      <div class="bottom-content">
        <li class="">
          <a href="../login.html">
            <i class="bx bx-log-out icon"></i>
            <span class="text nav-text">Salir</span>
          </a>
        </li>

        <li class="mode">
          <div class="sun-moon">
            <i class="bx bx-moon icon moon" class="moon"></i>
            <i class="bx bx-sun icon sun"></i>
          </div>
          <span class="mode-text text">Modo oscuro</span>
          <div class="toggle-switch">
            <span class="switch"></span>
          </div>
        </li>

      </div>

    </div>
  </nav>

  
   
    <section style="width: 1000px; height: 800px; display: flex; justify-content: center; align-items: center;" id="cont-crud" class="text-center">
        <h1>CRUD DE PRODUCTOS CON PHP MVC Y MYSQL PDO</h1>
        <P>En esta intefaz podras registrar, consultar, modificar y eliminar la informacion de la tabla :D</P>
        <div class="cont-button">
            <a href="registrarInventario.php" class="btn btn-success"> <i class="bi bi-plus-circle"></i>Crear Producto</a>
            <a href="Views/crearUsuario.php" class="btn btn-success"> <i class="bi bi-plus-circle"></i>Registrar Usuario</a>
            <a href="Views/verUsuarios.php" class="btn btn-success"> <i class="bi bi-plus-circle"></i>Ver Usuarios</a>
        </div>
        <div class="cont-table">
            <table class="table">
                <table class="table table-striped table-borderad">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Movimiento</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Fecha Entrada</th>
                    <th scope="col">Fecha Salida</th>
                    <th scope="col">cantidad</th>
                    <th scope="col">cantidad maxima</th>
                    <th scope="col">cantidad minima</th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php
                  
                  cargarProductosT();
                  
                  ?>

                </tbody>
              </table>
        </div>
    </section>
  
  <script src="javaScript/main.js"></script>
    
</body>
</html>