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
        <h3>Conociendome</h3>
        <p class="hero__parrafo">¿Cuál es mi situación financiera hoy?</p>
        <p class="hero__parrafo">Indica que tan de acuerdo estás con estas afirmaciones:</p>
        <ol class="hero__list">
          <li class="hero__list-item">Completamente en desacuerdo</li>
          <li class="hero__list-item">En desacuerdo</li>
          <li class="hero__list-item">Indiferente</li>
          <li class="hero__list-item">De acuerdo</li>
          <li class="hero__list-item">Completamente de acuerdo</li>
        </ol>
      </div>
    </div>
  </section>
  <form action="" method="post" class="form">
    <div class="container">
      <div class="form__grupo">
        <div class="form__subgrupo">
          <span class="form__span">Cuando pagan vivo un día como un rey y como mendigo el resto del mes*</span>
          <div class="desacuerdo">Muy en desacuerdo</div>
          <label for="1"><input type="radio" name="1" id="1">1</input></label>
          <label for="2"><input type="radio" name="2" id="2">2</input></label>
          <label for="3"><input type="radio" name="3" id="3">3</input></label>
          <label for="4"><input type="radio" name="4" id="4">4</input></label>
          <label for="5"><input type="radio" name="5" id="5">5</input></label>
          <div class="deacuerdo">Muy de acuerdo</div>
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">SFuera del colegio trabajo o hago negocios para solventar mis gastos y mantener mi familia*</span>
          <div class="desacuerdo">Muy en desacuerdo</div>
          <label for="1"><input type="radio" name="1" id="1">1</input></label>
          <label for="2"><input type="radio" name="2" id="2">2</input></label>
          <label for="3"><input type="radio" name="3" id="3">3</input></label>
          <label for="4"><input type="radio" name="4" id="4">4</input></label>
          <label for="5"><input type="radio" name="5" id="5">5</input></label>
          <div class="deacuerdo">Muy de acuerdo</div>
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">En vacaciones me mudo a casa de mis familiares para no pagar arriendo?*</span>
          <div class="desacuerdo">Muy en desacuerdo</div>
          <label for="1"><input type="radio" name="1" id="1">1</input></label>
          <label for="2"><input type="radio" name="2" id="2">2</input></label>
          <label for="3"><input type="radio" name="3" id="3">3</input></label>
          <label for="4"><input type="radio" name="4" id="4">4</input></label>
          <label for="5"><input type="radio" name="5" id="5">5</input></label>
          <div class="deacuerdo">Muy de acuerdo</div>
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">Hoy estoy más endeudo/a que hace un año *</span>
          <div class="desacuerdo">Muy en desacuerdo</div>
          <label for="1"><input type="radio" name="1" id="1">1</input></label>
          <label for="2"><input type="radio" name="2" id="2">2</input></label>
          <label for="3"><input type="radio" name="3" id="3">3</input></label>
          <label for="4"><input type="radio" name="4" id="4">4</input></label>
          <label for="5"><input type="radio" name="5" id="5">5</input></label>
          <div class="deacuerdo">Muy de acuerdo</div>
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">No tengo claro para qué cosas quisiera ahorrar primero*</span>
          <div class="desacuerdo">Muy en desacuerdo</div>
          <label for="1"><input type="radio" name="1" id="1">1</input></label>
          <label for="2"><input type="radio" name="2" id="2">2</input></label>
          <label for="3"><input type="radio" name="3" id="3">3</input></label>
          <label for="4"><input type="radio" name="4" id="4">4</input></label>
          <label for="5"><input type="radio" name="5" id="5">5</input></label>
          <div class="deacuerdo">Muy de acuerdo</div>
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">No he podido impulsar proyectos que tengo (casa, transporte, familia, estudios, negocio) es por falta de dinero*</span>
          <div class="desacuerdo">Muy en desacuerdo</div>
          <label for="1"><input type="radio" name="1" id="1">1</input></label>
          <label for="2"><input type="radio" name="2" id="2">2</input></label>
          <label for="3"><input type="radio" name="3" id="3">3</input></label>
          <label for="4"><input type="radio" name="4" id="4">4</input></label>
          <label for="5"><input type="radio" name="5" id="5">5</input></label>
          <div class="deacuerdo">Muy de acuerdo</div>
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">Cuando pienso en plata me siento con estrés/ angustia/ intranquilidad *</span>
          <div class="desacuerdo">Muy en desacuerdo</div>
          <label for="1"><input type="radio" name="1" id="1">1</input></label>
          <label for="2"><input type="radio" name="2" id="2">2</input></label>
          <label for="3"><input type="radio" name="3" id="3">3</input></label>
          <label for="4"><input type="radio" name="4" id="4">4</input></label>
          <label for="5"><input type="radio" name="5" id="5">5</input></label>
          <div class="deacuerdo">Muy de acuerdo</div>
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">¿Tiene historial de credito? *</span>
          <label for="1"><input type="radio" name="1" id="1">1</input></label>
          <label for="2"><input type="radio" name="2" id="2">2</input></label>
          <label for="3"><input type="radio" name="3" id="3">3</input></label>
          <label for="4"><input type="radio" name="4" id="4">4</input></label>
          <label for="5"><input type="radio" name="5" id="5">5</input></label>
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">¿Utiliza la tarjeta de crédito? *</span>
          <label for="si"><input type="radio" name="si" id="si">Si</input></label>
          <label for="no"><input type="radio" name="no" id="no">No</input></label>
          <label for="notengo"><input type="radio" name="notengo" id="notengo">No tengo</label>
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">Me gustaría tener tarjeta de crédito *</span>
          <label for="si"><input type="radio" name="si" id="si">Si</label>
          <label for="no"><input type="radio" name="no" id="no">No</label>
          <label for="yatengo"><input type="radio" name="yatengo" id="yatengo">Ya tengo</label>
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">Tiene credito con bancos o cooperativas*</span>
          <label for="banks"><input type="checkbox" name="banks" id="banks">Con bancos</label>
          <label for="coopera"><input type="checkbox" name="coopera" id="coopera">Con cooperativas</label>
          <label for="no"><input type="checkbox" name="no" id="no">No</label>
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">En este momento creo que mis deudas juntas suman todas (Valor sin puntos y comas)*</span>
          <input type="text" name="thisTime" id="thisTime" placeholder="Tu respuesta">
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">Me gustaría que el banco me prestara*</span>
          <label for="si"><input type="radio" name="sis" id="si">Si</label>
          <label for="no"><input type="radio" name="no" id="no">No</label>
          <label for="talvez"><input type="radio" name="talvez" id="talvez">Tal vez</label>
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span">Que tanto de sus ingresos se le van pagando deudas o intereses.</span>
          <label for="menosdelamitad"><input type="radio" name="menosdelamitad" id="menosdelamitad">Menos de la mitad</label>
          <label for="lamitad"><input type="radio" name="lamitad" id="lamitad">La mitad</label>
          <label for="masdelamitad"><input type="radio" name="masdelamitad" id="masdelamitad">Más de la mitad</label>
          <label for="todomisingresos"><input type="radio" name="todosmisingresos" id="todosmisingresos">Todos mis ingresos</label>
          <label for="notengodeudas"><input type="radio" name="notengodeudas" id="notengodeudas">No tengo deudas</label>
          <button class="form__clear clear__active">Borrar selección</button>
        </div>
      </div>
    </div>
  </form>
</body>
</html>