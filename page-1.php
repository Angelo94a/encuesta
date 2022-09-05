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
  <title>Formulario</title>
</head>
<body>
  <form action="" method="post" class="form">
    <div class="container">
      <div class="form__grupo">
        <div class="form__subgrupo">
          <label for="email">Correo *</label>
          <input type="text" name="email" id="email" placeholder="Tu respuesta">
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es obligatorio</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span-txt">¿Como podemos acompañarle</span>
          <lable><input type="radio" name="service" id="service">Deseo adquirir productos y/o servicios</input></lable>
          <lable><input type="radio" name="service" id="service">Solo Quiero Conocer Mi Salud Financiera</input></lable>
          <button class="form__clear clear__active">Borrar selección</button>
        </div>
      </div>
    </div>
  </form>
</body>
</html>