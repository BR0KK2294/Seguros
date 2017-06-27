<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Entidad</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Ingresar Producto</h3>
                            <form action="../Controlador/TProducto.php" method="POST">
                                <div class="form-group">
                                    <label for="id">Id :</label>
                                    <input type="text" class="form-control" id="id" placeholder="Ingresa Id" name="id">
                                </div>
                                <div class="form-group">
                                    <label for="nombre">NOMBRE:</label>
                                    <input type="text" class="form-control" id="nombre" placeholder="Ingresa Nombre" name="nombre">
                                </div>
                                <div class="form-group">
                                    <label for="precio">PRECIO :</label>
                                    <input type="text" class="form-control" id="precio" placeholder="Ingresa Precio" name="precio">
                                </div>
                                <div class="form-group">
                                    <label for="precio">Categoria :</label>
                                    <input type="text" class="form-control" id="categoria" placeholder="Ingresa Precio" name="categoria">
                                </div>

                                <button type="submit" class="btn btn-primary" name="OK" value="Ingresar">Ingresar</button>
                            </form> 
                        </div>

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Lista de Productos</h3>
                            <form action="../Controlador/TProducto.php" method="POST">
                                <table>
                                    <tr>
									    <th>Reg.</th>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th>Categoria</th>
                                        <th></th>

                                    </tr>

                                    <?php
                                    require_once '../Negocio/Producto.php';
                                    $objPro = new Producto();
                                    $datos = $objPro->listarProducto();
                                    $cont = 0;


                                    while ($reg = mysql_fetch_row($datos)) {
                                        $cont +=1;
                                        echo "<tr>";
                                        echo "<td>".$cont."</td>";
                                        echo "<td>".$reg[0]."</td>";
                                        echo "<td>".$reg[1]."</td>";
                                        echo "<td>".$reg[2]."</td>";
                                        echo "<td>".$reg[3]."</td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </table>
                            </form> 
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </body>
</html>