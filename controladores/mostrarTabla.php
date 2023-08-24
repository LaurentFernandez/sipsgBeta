<?php

    function cargarProductosT(){

        $objetoConsultas = new Consultas();
        $result = $objetoConsultas->mostrarProductos();
        // validamos que existan registros en la tabla
        if (!isset($result)) {
            echo '<h2> NO HAY PRODUCTOS REGISTRADOS </h2>';
            
        }else {
            
            foreach ($result as $f) {
                // en php se contatena con'.$.'
                echo'
                
                <tr>
                    
                    <td>'.$f['inventario_id'].'</td>
                    <td>'.$f['inventario_descripcion'].'</td>
                    <td>'.$f['inventario_estado'].'</td>
                    <td>'.$f['inventario_movimiento'].'</td>
                    <td>'.$f['inventario_producto'].'</td>
                    <td>'.$f['inventario_fechaentrada'].'</td>
                    <td>'.$f['inventario_fechasalida'].'</td>
                    <td>'.$f['inventario_can'].'</td>
                    <td>'.$f['inventario_canmax'].'</td>
                    <td>'.$f['inventario_canmin'].'</td>
                    <td><a href="../editarInventario.php?id='.$f['inventario_id'].'" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Modificar</a></td>
                    <td><a href="eliminar.php?id='.$f['inventario_id'].'" class="btn btn-danger"><i class="bi bi-trash-fill"></i>Eliminar</a></td>
                </tr>

                ';

            }

        }

    }

    function cargarProducto(){

        $codigo = $_GET['codigo'];

        $objetoConsultas = new Consultas();
        $result = $objetoConsultas->cargarProductoF($codigo);

        foreach($result as $f){

            echo'

            <form action="../Controllers/modificar.php" method="POST">
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Codigo de Producto</label>
                        <input type="number" name="id" readonly="readonly" value="'.$f['inventario_id'].'" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Nombre de Producto</label>
                        <input type="text" name="descripcion" value="'.$f['inventario_descripcion'].'" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Descripcion de Producto</label>
                        <input type="text" name="estado" value="'.$f['inventario_estado'].'" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Precio de Producto</label>
                        <input type="text" name="movimiento" value="'.$f['inventario_movimiento'].'" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Estado</label>
                        <input type="number" name="producto" value="'.$f['inventario_producto'].'" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Estado</label>
                        <input type="date" name="FechaEntrada" value="'.$f['inventario_fechaentrada'].'" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Estado</label>
                        <input type="date" name="FechaSalida" value="'.$f['inventario_fechasalida'].'" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Estado</label>
                        <input type="number" name="cantidad" value="'.$f['inventario_can'].'" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Estado</label>
                        <input type="number" name="CantidadMaxima" value="'.$f['inventario_canmax'].'" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Estado</label>
                        <input type="number" name="CantidadMinima" value="'.$f['inventario_canmin'].'" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
               
               
                <button type="submit" class="btn btn-success"><i class="bi bi-box-arrow-down"></i>Actualizar</button>
            </form>
            
            
            ';


        }


    }    



?>