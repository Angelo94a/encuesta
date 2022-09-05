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
        <h2 class="form__subtitle">Información de registro</h2>
        <div class="form__subgrupo">
          <label for="name">Nombres completos *</label>
          <input type="text" name="name" id="name" placeholder="Tu respuesta">
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <label for="fullname">Apillidos completos *</label>
          <input type="text" name="fullname" id="fullname" placeholder="Tu respuesta">
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span-txt">Tipo de identificación</span>
          <label for="cc"><input type="radio" name="cc" id="cc">Cedula de ciudadania</label>
          <label for="ce"><input type="radio" name="ce" id="ce">Cedula de extrangeria</input></label>
          <label for="ti"><input type="radio" name="ti" id="ti">Tarjeta de indentidad</input></label>
          <label for="ptp"><input type="radio" name="ptp" id="ptp">Permiso temporal de permanencia</input></label>
          <label for="otro"><input type="radio" name="otro" id="otro">Otro:<input type="text" name="otro" id="otro"></input></label>
        </div>
        <div class="form__subgrupo">
          <span class="form__span-txt">Numero de identificación *</span>
          <input type="text" name="nid" id="nid" placeholder="Tu respuesta">
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span-txt">País donde reside actualmente</span>
          <label for="colombia"><input type="radio" name="colombia" id="colombia">Colombia</input></label>
          <label for="ecuador"><input type="radio" name="ecuador" id="ecuador">Ecuador</input></label>
          <label for="otro"><input type="radio" name="otro" id="otro">Otro: <input type="text" name="otro" id="otro"></input></label>
        </div>
        <div class="form__subgrupo">
          <span class="form__span-txt">Departamento - Provincia (En mayúscula y sin tildes)*</span>
          <input type="text" name="departamento" id="departamento" placeholder="Tu respuesta">
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span-txt">Municipio (en mayúsculas sin tildes)</span>
          <input type="text" name="municipio" id="municipio" placeholder="Tu respuesta">
        </div>
        <div class="form__subgrupo">
          <span class="form__span-txt">Barrio/vereda *</span>
          <input type="text" name="barrio" id="barrio">
          <div class="form__error">
            <i class="bx bx-error"></i>
            <span class="form__span-error">Este campo es requerido</span>
          </div>
        </div>
        <div class="form__subgrupo">
          <span class="form__span-txt">Dirección de residencia</span>
          <input type="text" name="add" id="add" placeholder="Tu respuesta" >
        </div>
        <div class="form__subgrupo">
          <span class="form__span-txt">Principal actividad economica</span>
          <label for="teach"><input type="radio" name="teach" id="teach">Docencia</input></label>
          <label for="empleado"><input type="radio" name="empleado" id="emplado">Empleado</input></label>
          <label for="pensionado"><input type="radio" name="pensionando" id="pensionado">Pensionado</input></label>
          <label for="inden"><input type="radio" name="inden" id="indin">Independiente o negocio formal</input></label>
          <label for="noWork"><input type="radio" name="noWork" id="noWork">No trabajo actualmente</input></label>
          <label for="otro"><input type="radio" name="otro" id="otro">Otro: <input type="text" name="otro" id="otro"></input></label>
        </div>
      </div>
    </div>
  </form>
</body>
</html>