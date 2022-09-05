<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Formulario</title>
</head>
<body>
  <section class="hero">
    <div class="container">
      <div class="hero__secction">
        <h1 class="hero__title">BIENVENIDO/A</h1>
        <p class="hero__parrafo">Al enviar esta encuesta acepta la política de tratamiento de datos <b>FINEDUCOM</b>. Puede consultarla mas en detalle en: <a href="https://drive.google.com/file/d/1HsvDHP1Y0tdLmYKqPjrLYb1q3OR6DSJC/view?usp=sharing" class="hero__link">Mirar aquí</a> </p>
        <p class="hero__parrafo-2">
          Al momento de llenar la encuesta tenga a la mano: <br>
          Documento de identidad <br>
          Recibo de servicio publico <br>
          Certificado laboral o carta de persona que haya contratado sus productos/servicios <br>
          Cartas de referencia familiar <br>
          Carta de referencia personal/laboral
        </p>
      </div>
    </div>
  </section>

  <form action="" method="post">
    <?php 
      require('page-2.php')
    ?>
  </form>
 
</body>
</html>