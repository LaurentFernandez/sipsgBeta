<?php
require_once("../modelos/consultas.php");
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
                    <td><a href="../Dashboard admin/editarInventario.php?id_inventario='.$f['inventario_id'].'" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Modificar</a></td>
                    <td><a href="../controladores/eliminar.php?id_inventario='.$f['inventario_id'].'" class="btn btn-danger"><i class="bi bi-trash-fill"></i>Eliminar</a></td>
                </tr>

                ';

            }

        }

    }

    function cargarProducto(){

        $id_inventario = $_GET['id_inventario'];

        $objetoConsultas = new Consultas();
        $result = $objetoConsultas->cargarProductoF($id_inventario);

        foreach($result as $f){

            echo'

            <form action="../controladores/modificar.php" method="POST">
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">ID</label>
                        <input type="number" name="id_inventario" readonly="readonly" value="'.$f['inventario_id'].'" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                        <input type="text" name="descripcion" value="'.$f['inventario_descripcion'].'" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Estado</label>
                        <select type="text" name="estado" '.$f['inventario_estado'].' class="form-control" id="exampleSelecEmail" aria-describedby="emailHelp">
                    
                        <option value="activo">Activo</option>
                        <option value="inactivo">Inactivo</option>
                        
                        </select>
                        
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Tipo de Movimiento</label>
                        <select type="number" name="movimiento" '.$f['inventario_movimiento'].' class="form-control" id="exampleSelectEmail" aria-describedby="emailHelp">
                    
                          <option value="1">Salida Compra</option>
                          <option value="2">Entrada Compra</option>
                          <option value="3">Salida Daños</option>
                          <option value="4">Salida Obsequio</option>
                          <option value="5">Entrada Produccion</option>
                          <option value="6">Entrada Obsequio</option>
                        
                            
                        </select>
                        
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Producto</label>
                        <input type="number" name="producto" value="'.$f['inventario_producto'].'" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Fecha entradao</label>
                        <input type="date" name="fechaEntrada" value="'.$f['inventario_fechaentrada'].'" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Fecha Salida</label>
                        <input type="date" name="fechaSalida" value="'.$f['inventario_fechasalida'].'" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Cantidad</label>
                        <input type="number" name="cantidad" value="'.$f['inventario_can'].'" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Cantidad maxima</label>
                        <input type="number" name="cantidadMaxima" value="'.$f['inventario_canmax'].'" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Cantidad Minima</label>
                        <input type="number" name="cantidadMinima" value="'.$f['inventario_canmin'].'" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
               
               
                <button type="submit" class="btn btn-success"><i class="bi bi-box-arrow-down"></i>Actualizar</button>
            </form>
            
            
            ';


        }


    }    



?>