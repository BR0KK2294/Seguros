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
                            <h3>Registro de clientes</h3>
                            <form action="../Controlador/TCliente.php" method="POST">
                                <div class="form-group">
                                    <label for="rut">Rut: </label>
                                    <input type="text" class="form-control" id="rut" placeholder="Ingresa Rut" name="rut">
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Nombre: </label>
                                    <input type="text" class="form-control" id="nombre" placeholder="Ingresa Nombre" name="nombre">
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Apellido Paterno: </label>
                                    <input type="text" class="form-control" id="apellido_pat" placeholder="Ingresa Nombre" name="apellido_pat">
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Apellido Materno: </label>
                                    <input type="text" class="form-control" id="apellido_mat" placeholder="Ingresa Nombre" name="apellido_mat">
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Direccion: </label>
                                    <input type="text" class="form-control" id="direccion" placeholder="Ingresa Nombre" name="direccion">
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Telefono: </label>
                                    <input type="text" class="form-control" id="telefono" placeholder="Ingresa Nombre" name="telefono">
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Correo: </label>
                                    <input type="text" class="form-control" id="correo" placeholder="Ingresa Nombre" name="correo">
                                </div>
                                <div class="form-group">
                                    <label for="precio">Actividad:</label>
                                    <input type="text" class="form-control" id="actividad" placeholder="Ingresa Precio" name="actividad">
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Clave: </label>
                                    <input type="password" class="form-control" id="clave" placeholder="Ingresa Nombre" name="clave">
                                </div>

                                <button type="submit" class="btn btn-primary" name="OK" value="Ingresar">Ingresar</button>
                            </form> 
     </div>
    </body>
</html>