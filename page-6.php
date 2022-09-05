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
        <h3>Habitos</h3>
        <p class="hero__parrafo">Presentes en nuestras acciones día a día.</p>
        <p class="hero__parrafo">Indica que tan frecuentemente piensas, dices o siente que se hacen presente estas afirmaciones en tu vida, usando la siguiente escala:</p>
        <ol class="hero__list">
          <li class="hero__list-item">Nunca</li>
          <li class="hero__list-item">Rara vez</li>
          <li class="hero__list-item">A veces / A menudo</li>
          <li class="hero__list-item">Frecuentemente</li>
          <li class="hero__list-item">Siempre</li>
        </ol>
      </div>
    </div>
  </section>
  <form action="" method="post" class="form">
    <div class="container">
      <div class="form__grupo">
        <div class="form__subgrupo">
          <span class="form__span">El dinero se me va rápido y sin darme cuenta*</span>
          <div class="nunca">Nunca</div>
          <label for="1"><input type="radio" name="1" id="1">1</input></label>
          <label for="2"><input type="radio" name="2" id="2">2</input></label>
          <label for="3"><input type="radio" name="3" id="3">3</input></label>
          <label for="4"><input type="radio" name="4" id="4">4</input></label>
          <label for="5"><input type="radio" name="5" id="5">5</input></label>
          <div class="siempre">Siempre</div>
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">Se me olvida cuanto dinero me queda del sueldo*</span>
          <div class="nunca">Nunca</div>
          <label for="1"><input type="radio" name="1" id="1">1</input></label>
          <label for="2"><input type="radio" name="2" id="2">2</input></label>
          <label for="3"><input type="radio" name="3" id="3">3</input></label>
          <label for="4"><input type="radio" name="4" id="4">4</input></label>
          <label for="5"><input type="radio" name="5" id="5">5</input></label>
          <div class="siempre">Siempre</div>
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">Cuando recibo mis ingresos tengo dudas de en qué voy a gastarlos*</span>
          <div class="nunca">Nunca</div>
          <label for="1"><input type="radio" name="1" id="1">1</input></label>
          <label for="2"><input type="radio" name="2" id="2">2</input></label>
          <label for="3"><input type="radio" name="3" id="3">3</input></label>
          <label for="4"><input type="radio" name="4" id="4">4</input></label>
          <label for="5"><input type="radio" name="5" id="5">5</input></label>
          <div class="siempre">Siempre</div>
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">Antes de terminar el mes se me acaba el dinero para mis necesidades básicas y esenciales *</span>
          <div class="nunca">Nunca</div>
          <label for="1"><input type="radio" name="1" id="1">1</input></label>
          <label for="2"><input type="radio" name="2" id="2">2</input></label>
          <label for="3"><input type="radio" name="3" id="3">3</input></label>
          <label for="4"><input type="radio" name="4" id="4">4</input></label>
          <label for="5"><input type="radio" name="5" id="5">5</input></label>
          <div class="siempre">Siempre</div>
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">Cuando tengo algún imprevisto o emergencia me endeudo*</span>
          <div class="nunca">Nunca</div>
          <label for="1"><input type="radio" name="1" id="1">1</input></label>
          <label for="2"><input type="radio" name="2" id="2">2</input></label>
          <label for="3"><input type="radio" name="3" id="3">3</input></label>
          <label for="4"><input type="radio" name="4" id="4">4</input></label>
          <label for="5"><input type="radio" name="5" id="5">5</input></label>
          <div class="siempre">Siempre</div>
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">Pido un préstamo para pagar otro*</span>
          <div class="nunca">Nunca</div>
          <label for="1"><input type="radio" name="1" id="1">1</input></label>
          <label for="2"><input type="radio" name="2" id="2">2</input></label>
          <label for="3"><input type="radio" name="3" id="3">3</input></label>
          <label for="4"><input type="radio" name="4" id="4">4</input></label>
          <label for="5"><input type="radio" name="5" id="5">5</input></label>
          <div class="siempre">Siempre</div>
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">Al recibir mi sueldo lo primero que hago es pagar deudas *</span>
          <div class="nunca">Nunca</div>
          <label for="1"><input type="radio" name="1" id="1">1</input></label>
          <label for="2"><input type="radio" name="2" id="2">2</input></label>
          <label for="3"><input type="radio" name="3" id="3">3</input></label>
          <label for="4"><input type="radio" name="4" id="4">4</input></label>
          <label for="5"><input type="radio" name="5" id="5">5</input></label>
          <div class="siempre">Siempre</div>
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">Tengo que recurrir a prestamistas o paga diarios *</span>
          <div class="nunca">Nunca</div>
          <label for="1"><input type="radio" name="1" id="1">1</input></label>
          <label for="2"><input type="radio" name="2" id="2">2</input></label>
          <label for="3"><input type="radio" name="3" id="3">3</input></label>
          <label for="4"><input type="radio" name="4" id="4">4</input></label>
          <label for="5"><input type="radio" name="5" id="5">5</input></label>
          <div class="siempre">Siempre</div>
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">Tengo que endeudarme con familiares o amigos *</span>
          <div class="nunca">Nunca</div>
          <label for="1"><input type="radio" name="1" id="1">1</input></label>
          <label for="2"><input type="radio" name="2" id="2">2</input></label>
          <label for="3"><input type="radio" name="3" id="3">3</input></label>
          <label for="4"><input type="radio" name="4" id="4">4</input></label>
          <label for="5"><input type="radio" name="5" id="5">5</input></label>
          <div class="siempre">Siempre</div>
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">Me fían el mercado *</span>
          <div class="nunca">Nunca</div>
          <label for="1"><input type="radio" name="1" id="1">1</input></label>
          <label for="2"><input type="radio" name="2" id="2">2</input></label>
          <label for="3"><input type="radio" name="3" id="3">3</input></label>
          <label for="4"><input type="radio" name="4" id="4">4</input></label>
          <label for="5"><input type="radio" name="5" id="5">5</input></label>
          <div class="siempre">Siempre</div>
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">Mi dinero se me va en cosas que no son tan importantes *</span>
          <div class="nunca">Nunca</div>
          <label for="1"><input type="radio" name="1" id="1">1</input></label>
          <label for="2"><input type="radio" name="2" id="2">2</input></label>
          <label for="3"><input type="radio" name="3" id="3">3</input></label>
          <label for="4"><input type="radio" name="4" id="4">4</input></label>
          <label for="5"><input type="radio" name="5" id="5">5</input></label>
          <div class="siempre">Siempre</div>
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