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
                            <h3>Registro de solicitudes</h3>
                            <form action="../Controlador/TSolicitud.php" method="POST">
                                <div class="form-group">
                                    <label for="rut">Id Prod</label>
                                    <input type="text" class="form-control" id="id_prod" placeholder="Ingresa Rut" name="id_prod">
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Rut cli</label>
                                    <input type="text" class="form-control" id="rut_cli" placeholder="Ingresa Nombre" name="rut_cli">
                                </div>
                                <div class="form-group">
                                    <label for="nombre">ValorTotal</label>
                                    <input type="text" class="form-control" id="valorTotal" placeholder="Ingresa Nombre" name="valorTotal">
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Aprobada</label>
                                    <input type="text" class="form-control" id="aprobada" placeholder="Ingresa Nombre" name="aprobada">
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Rut US</label>
                                    <input type="text" class="form-control" id="rut_us" placeholder="Ingresa Nombre" name="rut_us">
                                </div>

                                <button type="submit" class="btn btn-primary" name="OK" value="Ingresar">Ingresar</button>
                            </form> 
     </div>
    </body>
</html>