<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Seguros Chile Regional</title>
  <link href="css/estilos.css" rel="stylesheet"type="text/css"/>
  <script src=”util/prefixfree.min.js” type="text/javascript"></script>
</head>
<body>
  <!-- Navegador -->
  <?php include 'Navegador.php' ?>
  <!-- publicidad -->
  <div class="contenedor">
    <div class="publicidad">
      <img src="imagenes/planJoven2.png" />
    </div>
    <!-- Contenido -->
    <div class="fila1">
        <div class="login">
          <?php include 'Login.php';?>
        </div>
        <div class="articulo" id="consejo1">
          <article>
            <h4></h4>
            <p> lorem ipsum dolor sit em atem</p>
            <button>leer mas</button>
          </article>
          <img src="imagenes/seguroMedico.png"/>
        </div>
      </div>

      <div class="fila2">
        <div class="articulo" id="consejo2">
          <article>
            <h4></h4>
            <p> lorem ipsum dolor sit em atem</p>
            <button>leer mas</button>
          </article>
          <img src="imagenes/SeguroFraudes1.png"/>
        </div>
        <div class="cotizacion">
          <?php include 'Cotizar.php';?>
        </div>
      </div>
    <!-- referencia de usuarios -->
    <div class="referencias">
      <div class="ref">
          <img src="imagenes/modelo1.png" />
          <h4>Pablo Toledo</h4>
          <p>Increible, esta página tiene todo los que Necesitaba y más</p>
      </div>
      <div class="ref">
          <img src="imagenes/secretaria1.png" />
          <h4>Elba Lazzo</h4>
          <p>Genial!! <br/> no creo poder encontrar una pagina tan buena como esta en ningun otro lugar</p>
      </div>
      <div class="ref">
          <img src="imagenes/constructor1.png"/>
          <h4>Armando casas</h4>
          <p>Con los nuevos seguros para los viajes puedo visitar cualquier lugar sin necesidad de preocuaprme </p>
      </div>
    </div>
  </div>
  <!-- footer -->
  <footer>
    <?php include 'Footer.php'; ?>
  </footer>
</body>
</html>
