<html>
<head>
<title>ejercicio 1</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
    .abs-center {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
}

.form {
  width: 450px;
}
.btn{
  background-color:pink;
  border-color:pink;
}
</style>
</head>
<body>
<div class="container">
  <div class="abs-center">
    <form  class="border p-3 form row g-3 needs-validation" novalidate id="form1" name="form1" method="post" action="../control/vernumero.php">
      <div class="form-group">
      <label for="validationCustom01" class="form-label">INGRESE UN NUMERO</label>
      <input type="number" class="form-control" name="numero_form" id="numero_form"  required>
    <div  class="invalid-feedback">
      ingrese un numero
    </div>
      </div>
   
      <button type="submit" class="btn btn-primary">Aceptar</button>
    </form>
  </div>
</div>
  

<!--VALIDACION DE FORMULARIO -->
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
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>