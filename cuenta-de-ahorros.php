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
        <h3>Cuenta de ahorros</h3>
        <div class="form__subgrupo">
          <span class="form__span">Nombre de titular</span><input type="text" name="cuentaDeAhorros" id="cuentaDeAhorros" placeholder="Tu respuesta">
        </div>
        <div class="form__subgrupo">
          <span class="form__span">Cedula de titular</span><input type="text" name="ccTitular" id="ccTitular" placeholder="Tu respuesta">
        </div>
        <div class="form__subgrupo">
          <span class="form__span">Numero de cuenta</span><input type="text" name="numeroCuenta" id="numeroCuenta" placeholder="Tu respuesta">
        </div>
        <div class="form__subgrupo">
          <span class="form__span">Tipo de cuenta</span>
          <label for="ahorro"><input type="radio" name="ahorro" id="ahorro">Ahorro</label>
          <label for="corriente"><input type="radio" name="corriente" id="corriente">Corriente</label>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">Banco</span>
          <input type="text" name="banco" id="banco" placeholder="Tu respuesta">
        </div>
      </div>
    </div>
  </form>
</body>
</html>