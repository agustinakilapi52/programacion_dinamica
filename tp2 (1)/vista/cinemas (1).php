<html>
<head>
<title>Cinemas</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


</head>
<body>
<div class="container" style="padding: 30px;">
  <div class="card">
    <div class="card-header">
      <h5 style="color:rgb(84, 84, 178) ;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
      </svg>Cinem@s</h5>
    </div>
    <div class="card-body">
      <form class="row g-3 needs-validation" novalidate id="form1" name="form1" method="post" action="../control/verCinema.php" enctype="multipart/formdata">
        <div class="row g-12">
          <div class="col-md-6">
            <label>Titulo</label>
            <input type="text" class="form-control" name="titulo" id="titulo" required>
            <div class="invalid-feedback">
              Ingrese un usuario valido
            </div>
          </div>
          <div class="col-md-6">
            <label>Actores</label>
            <input type="text" class="form-control" name="actores" id="actores" required >
            <div class="invalid-feedback">
              Ingrese un actor valido
            </div>
          </div>
        </div>

        <div class="row g-12">
          <div class="col-md-6">
            <label>Director</label>
            <input type="text" class="form-control" name="director" id="director" required >
            <div class="invalid-feedback">
              Ingrese un director valido valido
            </div>
          </div>
          <div class="col-md-6">
            <label>Guion</label>
            <input type="text" class="form-control" name="guion" id="guion" required >
            <div class="invalid-feedback">
              Ingrese un guion valido
            </div>
          </div>
        </div>
        <div class="row g-12">
          <div class="col-md-6">
            <label>Producción</label>
            <input type="text" class="form-control" name="produccion" id="produccion"  required>
            <div class="invalid-feedback">
              Ingrese una producción valido
            </div>
          </div>
          <div class="col-md-6">
            <label>Año</label>
            <input type="text" class="form-control" name="anio" id="anio" maxlength="4" required>
          </div>
        </div>
        <div class="row g-12">
          <div class="col-md-6">
            <label>Nacionalidad</label>
            <input type="text" class="form-control" name="nacionalidad" id="nacionalidad" required>
            <div class="invalid-feedback">
              Ingrese una nacionalidad valida
            </div>
          </div>
          <div class="col-md-6">
            <label for="genero">Genero</label>
            <select class="form-select " name="genero" id="genero" aria-label=".form-select-sm example" required>
              <option value="" selected>Seleccione</option>
              <option value="comedia" >Comedia</option>
              <option value="terror">Terror</option>
              <option value="romance">Ficción</option>
              <option value="romance">Romance</option>
            </select>
            <div class="invalid-feedback">
              Ingrese un genero
            </div>
          </div>
        </div>
        <div class="row g-12">
          <div class="col-md-6">
            <label>Duración</label>
            <input type="text" class="form-control" name="duracion" id="duracion" maxlength="3" required>
            <label>(minutos)</label>
            <div class="invalid-feedback">
              Ingrese los minutos
            </div>
          </div>
          <div class="col-md-6">
            <label>Restricción de edad</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="restriccion" id="restriccion" value="Todo publico" required>
              <label class="form-check-label" for="inlineRadio1">Todo Público</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="restriccion" id="restriccion" value="Mayores de 7 años" required>
              <label class="form-check-label" for="inlineRadio2">Mayores de 7 años</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="restriccion" id="restriccion" value="Mayores de 18 años" required>
              <label class="form-check-label" for="inlineRadio3">Mayores de 18 años</label>
            </div>
          </div>
          <div class="invalid-feedback">
              seleccione la restricción de edad
            </div>
        </div>
        <div class="row g-12">
          <div class="col-md-6">
            <label>Seleccione una imagen </label><br>
            <input name="miArchivo" id="miArchivo" type="file" accept=".jpg, .jpeg, .png" required>
            <div class="invalid-feedback">
              Suba un archivo
            </div>
          </div>
        </div>

        <div class="row g-12">
          <label for="exampleFormControlTextarea1" class="form-label">Sipnosis</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" name="sipnosis" id="sipnosis"  rows="3" required></textarea>
          <div class="invalid-feedback">
              Ingrese la sipnosis
            </div>
        </div>
      
        <br>
        <div class="button text-end ">
          <input type="submit" name="Submit" value="Aceptar" class="btn btn-primary" />
          <input onclick="limpiarFormulario()" name="" value="Borrar" class="btn btn-outline-secondary" />


        </div>
      </form>
    </div>
  </div>
</div>
 

<script>
    // Ejemplo de JavaScript inicial para deshabilitar el envío de formularios si hay campos no válidos
(function () {
  'use strict'

  // Obtener todos los formularios a los que queremos aplicar estilos de validación de Bootstrap personalizados
  var forms = document.querySelectorAll('.needs-validation')

  // Bucle sobre ellos y evitar el envío
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

function limpiarFormulario() {
    document.getElementById("form1").reset();
  }

</script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>