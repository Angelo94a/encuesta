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
        <h3 class="form__subtitle">Caracterización</h3>
        <div class="form__subgrupo">
          <span class="form__span">Fecha de nacimiento *</span>
          <input type="date" class="form__date" name="fecha" id="fecha" min="1930-01-01" max="2030-01-01">
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">Genero *</span>
          <label for="mujer"><input type="radio" name="mujer" id="mujer">Mujer</label>
          <label for="hombre"><input type="radio" name="hombre" id="hombre">Hombre</label>
          <label for="interSexual"><input type="radio" name="interSexual" id="interSexual">Intersexual</label>
          <label for="otro"><input type="radio" name="otro" id="otro">Otro: <input type="text" name="otro" id="otro"></label>
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