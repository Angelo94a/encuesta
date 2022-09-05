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
  <section class="hero">
    <div class="container">
      <div class="hero__secction">
        <h3>Ahora cuéntenos sobre usted</h3>
        <p class="hero__parrafo">Para llegar a donde queremos es necesario reconocernos y ver donde estamos parados. Responde estas preguntas para ti y para ayudarnos a entender mejor cómo podemos apoyarte.</p>
      </div>
    </div>
  </section>

  <form action="" method="post" class="form">
    <div class="container">
      <div class="form__grupo">
        <div class="form__subgrupo">
          <span class="form__span">Monto que requiere ( VALOR SIN COMAS NI PUNTOS)*</span>
          <input type="text" name="metodoRequerido" id="metodoRequerido" placeholder="Tu respuesta">
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">¿Que meta quiere alcanzar?*</span>
          <input type="text" name="meta" id="meta" placeholder="Tu respuesta">
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__spam">¿Dónde desea el depósito del crédito?*</span>
          <label for="nequi"><input type="radio" name="nequi" id="nequi">Nequi</label>
          <label for="cuentaDeAhorros"><input type="radio" name="cuentaDeAhorros" id="cuentaDeAhorros">Cuenta de ahorros</label>
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