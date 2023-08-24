<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/styleVerInventario.css">
  <link rel="icon" href="img/SoloLogoSIPSG.png" type="image/png">
  <title>Ver Inventario</title>
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
    




    <section style="width: 1000px; height: 800px; display: flex; justify-content: center; align-items: center;" id="cont-crud" class="text-center">
        <h1>FORMULARIO DE REGISTRO DE PRODUCTOS</h1>
        <P>En esta tabla se podran registrara el inventario</P>
        <div class="cont-button">
            <a href="inventario.php" class="btn btn-success"> <i class="bi bi-eye"></i></i>Ver Productos</a>
        </div>
        <div class="cont-form">
            <!-- Para que un formulario capture datos la etiqueta form siempre debe de tener un atributo action y un atributo method. El atributo action determina la ruta y el archivo al que eviaremos los datos capturados desde el formulario, el atributo method determina el metodo de envio usualmente POST  -->
            <!-- Los campos del formulario /input,select, textarea) deben de contener el atributo name con un valor que represente el dato a capturar -->
            <form action="registrarInventario.php" method="POST">
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Id Inventario</label>
                        <input type="number" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail2" class="form-label">Descripcion</label>
                        <input type="text" name="descripcion" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleSelectEmail" class="form-label">Estado</label>
                        <select type="text" name="estado" class="form-control" id="exampleSelecEmail" aria-describedby="emailHelp">
                    
                          <option value="activo">Activo</option>
                          <option value="inactivo">Inactivo</option>
                          
                        </select>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleSelectEmail" class="form-label">Movimiento </label>
                        <select type="number" name="movimiento" class="form-control" id="exampleSelectEmail" aria-describedby="emailHelp">
                    
                          <option value="1">Salida Compra</option>
                          <option value="2">Entrada Compra</option>
                          <option value="3">Salida Daños</option>
                          <option value="4">Salida Obsequio</option>
                          <option value="5">Entrada Produccion</option>
                          <option value="6">Entrada Obsequio</option>
                        
                            
                        </select>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail5" class="form-label">Producto</label>
                        <input type="text" name="producto" class="form-control" id="exampleInputEmail5" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="datepicker3" class="form-label">Fecha Entrada</label>
                        <input type="date" name="fechaentrada" class="form-control" id="datepicker3" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="datepicker4" class="form-label">Fecha Salida</label>
                        <input type="date" name="fechaSalida" class="form-control" id="datepicker4" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail6" class="form-label">Cantidad</label>
                        <input type="number" name="cantidad" class="form-control" id="exampleInputEmail6" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail7" class="form-label">Cantidad Maxima</label>
                        <input type="number" name="cantidadMaxima" class="form-control" id="exampleInputEmail7" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail8" class="form-label">Cantidad Minima</label>
                        <input type="number" name="cantidadMinima" class="form-control" id="exampleInputEmail8" aria-describedby="emailHelp">
                    </div>
                </div>
               
               
                <button type="submit" class="btn btn-success"><i class="bi bi-box-arrow-down"></i>Registrar</button>
            </form>
        </div>
    </section>



  <script src="javaScript/main.js"></script>
      
</body>
</html>