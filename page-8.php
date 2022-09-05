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
          <span class="form__span">¿A cuantas personas o entidades les debe dinero?*</span>
          <label for="ninguno"><input type="radio" name="ninguno" id="ninguno">Ninguno</label>
          <label for="uno"><input type="radio" name="uno" id="uno">1</label>
          <label for="dos"><input type="radio" name="dos" id="dos">2</label>
          <label for="tres"><input type="radio" name="tres" id="tres">3</label>
          <label for="cuatro"><input type="radio" name="cuatro" id="cuatro">4</label>
          <label for="mascuatro"><input type="radio" name="mascuatro" id="mascuatro">Más de 4</label>
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">¿Tengo créditos o tarjetas de crédito con bancos?*</span>
          <label for="si"><input type="radio" name="si" id="si">Si</label>
          <label for="no"><input type="radio" name="no" id="no">No</label>
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">Mi fuente de ingreso principal proviene de:*</span>
          <label for="trabajo"><input type="radio" name="trabajo" id="trabajo">Trabajo</label>
          <label for="negocio"><input type="radio" name="negocio" id="negocio">Negocio</label>
          <label for="inversiones"><input type="radio" name="inversiones" id="inversiones">Inversiones</label>
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">¿Cual es el crédito más grande que a hecho en los últimos 6 meses? Cuanto terminó pagando y como lo logró?*</span>
          <input type="text" name="credito" id="credito" placeholder="Tu respuesta">
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">¿Esta ahorrando para algo en este momento?*</span>
          <label for="si"><input type="radio" name="si" id="si">Si</label>
          <label for="no"><input type="radio" name="no" id="no">No</label>
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">¿Para qué y en cuanto tiempo espera conseguirlo? ¿Cómo lo está haciendo?*</span>
          <input type="text" name="how" id="how" placeholder="Tu respuesta">
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">¿Qué cree que necesita o le gustaría aprender/hacer para mejorar sus finanzas?*</span>
          <input type="text" name="quenecesita" id="quenecesita" placeholder="Tu respuesta">
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">Desea adquirir un crédito  con FINEDUCOM*</span>
          <label for="si"><input type="radio" name="si" id="si">Si</label>
          <label for="no"><input type="radio" name="no" id="no">No</label>
          <label for="talvez"><input type="radio" name="talvez" id="talvez">Tal vez</label>
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