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
        <div class="form__subgrupo">
          <h3 class="form__subtitle">Planificación financiera</h3>
          <span class="form__span">Manejo de dinero en mi hogar</span>
        </div>
      </div>
      <div class="form__grupo">
          <div class="form__subgrupo">
            <span class="form__span">Las decisiones que se toman en mi hogar con el dinero las toma*</span>
            <label for="yo"><input type="radio" name="yo" id="yo">Yo</label>
            <label for="parejaYo"><input type="radio" name="parejaYo" id="parejaYo">Mi pareja y yo</label>
            <label for="familiar"><input type="radio" name="familiar" id="familiar">Otro familiar</label>
            <label for="familiarYo"><input type="radio" name="familiarYo" id="familiarYo">Otro familiar y yo</label>
            <label for="pareja"><input type="radio" name="pareja" id="pareja">Mi pareja</label>
            <div class="form__error">
              <i class="bx bx-error"></i>
              <span class="form__span-error">Este campo es obligatorio</span>
            </div>
          </div>
          <div class="form__subgrupo">
            <span class="form__span">Realizan en su Hogar Presupuesto Familiar*</span>
            <label for="si"><input type="radio" name="si" id="si">Sí</label>
            <label for="no"><input type="radio" name="no" id="no">No</label>
            <label for="algunasVeces"><input type="radio" name="algunasVeces" id="algunasVeces">Algunas veces</label>
            <div class="form__error">
              <i class="bx bx-error"></i>
              <span class="form__span-error">Este campo es requerido</span>
            </div>
          </div>
          <div class="form__subgrupo">
            <span class="form__span">En su hogar tienen estabilidad en sus ingresos*</span>
            <label for="estable"><input type="radio" name="estable" id="estable">Si es estable</label>
            <label for="noEstable"><input type="radio" name="noEstable" id="noEstable">No es estable</label>
            <label for="algunasVeces"><input type="radio" name="algunasVeces" id="algunasVeces">Algunas veces</label>
            <label for="otro"><input type="radio" name="otro" id="otro">Otro: <input type="text" name="otro" id="otro"></label>
            <div class="form__error">
              <i class="bx bx-error"></i>
              <span class="form__span-error">Este campo es requerido</span>
            </div>
          </div>
          <div class="form__subgrupo">
            <span class="form__span">Rangos de ingreso de su hogar*</span>
            <label for="MaUnMillon"><input type="radio" name="MaUnMillon" id="MaUnMillon">Menor a $ 1.000.000</label>
            <label for="EunMqui"><input type="radio" name="EunMqui" id="EunMqui">Entre $  1.000.001 y $ 1.500.000</label>
            <label for="EnUnqyDo"><input type="radio" name="EnUnqyDo" id="EnUnqyDo">Entre $1.500.001 y $2.000.000</label>
            <label for="EnDoyTr"><input type="radio" name="EnDoyTr" id="EnDoyTr">Entre $2.000.001 y $3.000.000</label>
            <label for="MasDtr"><input type="radio" name="MasDtr" id="MasDtr">Más de $3.000.000</label>
            <div class="form__error">
              <i class="bx bx-error"></i>
              <span class="form__spam-error">Este campo es requerido</span>
            </div>
          </div>
          <div class="form__subgrupo">
            <span class="form__span">Ingresos de su principal actividad*</span>
            <label for="MaUnMillon"><input type="radio" name="MaUnMillon" id="MaUnMillon">Menor a $ 1.000.000</label>
            <label for="EunMqui"><input type="radio" name="EunMqui" id="EunMqui">Entre $  1.000.001 y $ 1.500.000</label>
            <label for="EnUnqyDo"><input type="radio" name="EnUnqyDo" id="EnUnqyDo">Entre $1.500.001 y $2.000.000</label>
            <label for="EnDoyTr"><input type="radio" name="EnDoyTr" id="EnDoyTr">Entre $2.000.001 y $3.000.000</label>
            <label for="MasDtr"><input type="radio" name="MasDtr" id="MasDtr">Más de $3.000.000</label>
            <div class="form__error">
              <i class="bx bx-error"></i>
              <span class="form__spam-error">Este campo es requerido</span>
            </div>
          </div>
          <div class="form__subgrupo">
            <span class="form__span">Gastos personales (Escriba monto sin puntos ni comas)</span>
            <input type="text" name="gastos" id="gastos" placeholder="Tu respuesta">
          </div>
          <div class="form__subgrupo">
            <span class="form__span">Gastos de su hogar (Escriba monto sin puntos ni comas)</span>
            <input type="text" name="gastoHogar" id="gastoHogar" placeholder="Tu respuesta">
          </div>
          <div class="form__subgrupo">
            <span class="form__span">Es cliente o beneficiario(a) *</span>
            <label for="nuevo"><input type="radio" name="nuevo" id="nuevo">Nuevo/a</label>
            <label for="antiguo"><input type="radio" name="antiguo" id="antiguo">antiguo/a</label>
            <div class="form__error">
              <i class="bx bx-error"></i>
              <span class="form__error">Este campo es requerido</span>
            </div>
          </div>
        </div>
    </div>
  </form>
</body>
</html>