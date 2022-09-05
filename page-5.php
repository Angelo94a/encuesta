<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
  <form action="" method="post" class="form">
    <div class="container">
      <div class="form__grupo">
        <h3 class="form__subtitle">Sobre el hogar</h3>
        <div class="form__subgrupo">
          <span class="form__span">Tiempo en la residencia (en meses)* </span>
          <input type="text" name="tiempoResidencia" id="tiempoResidencia" placeholder="Tu respuesta">
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">Personas a cargo *</span>
          <label for="cero"><input type="radio" name="cero" id="cero">0</label>
          <label for="uno"><input type="radio" name="uno" id="uno">1</label>
          <label for="dos"><input type="radio" name="dos" id="dos">2</label>
          <label for="tres"><input type="radio" name="tres" id="tres">3</label>
          <label for="cuatro"><input type="radio" name="cuatro" id="cuatro">4</label>
          <label for="masCuatro"><input type="radio" name="masCuatro" id="masCuatro">Más de 4</label>
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">¿Que tipo de vivienda tiene? *</span>
          <label for="arriendo"><input type="radio" name="arriendo" id="arriendo">En arriendo</label>
          <label for="propia"><input type="radio" name="propia" id="propia">Propia</label>
          <label for="vFamiliar"><input type="radio" name="vFamiliar" id="vFamiliar">Familiar</label>
          <label for="propiaH"><input type="radio" name="propiaH" id="propiaH">Propia con hipoteca</label>
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
      </div>
    </div>
  </form>
</body>
</html>