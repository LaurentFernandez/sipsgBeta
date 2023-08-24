<?php
  // importamos las dependencias necesarias

  require_once("modelos/conexion.php");
  require_once("modelos/consultas.php");
  require_once("controladores/mostrarTabla.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/styleEditarInventario.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="icon" href="img/SoloLogoSIPSG.png" type="image/png">
  <title>Editar Inventario</title>
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
              <a href="inventario.html">
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
    







    <section id="cont-crud" class="text-center">
        <h1>MODIFICAR INFORMACION DEL PRODUCTO</h1>
        <P>En esta interfaz podras modificar informacion del producto</P>
        <div class="cont-button">
            <a href="inventario.php" class="btn btn-success"> <i class="bi bi-eye"></i></i>Ver Productos</a>
        </div>
        <div class="cont-form">
            
        <?php
        
           cargarProducto(); 
        
        ?>
            
        </div>
    </section>


    


  <script src="javaScript/main.js"></script>

    
    
        
      
</body>
</html>