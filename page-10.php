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
        <h3>Referencias</h3>
        <div class="form__subgrupo">
          <span class="form__span">Nombre referencia familiar</span>
          <input type="text" name="refeFsmiliar" id="refeFamiliar" placeholder="Tu respuesta">
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">Teléfono referencia familiar *</span>
          <input type="text" name="telFamiliar" id="telFamiliar" placeholder="Tu respuesta">
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">Nombre Referencia personal o laboral *</span>
          <input type="text" name="nomRePerLab" id="nomRePerLab" placeholder="Tu respuesta">
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">Teléfono Referencia personal o laboral *</span>
          <input type="text" name="telPresoLabo" id="telPresoLabo" placeholder="Tu respuesta">
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