<html>
<head>
<title>Cinema</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<?php
    if ($_POST){
        $titulo = $_POST['titulo'] ;
        $actores = $_POST['actores'] ;
        $director = $_POST['director'] ;
        $guion = $_POST['guion'] ;
        $produccion = $_POST['produccion'] ;
        $anio = $_POST['anio'] ;
        $nacionalidad = $_POST['nacionalidad'] ;
        $genero = $_POST['genero'] ;
        $duracion = $_POST['duracion'] ;
        $restriccion = $_POST['restriccion'] ;
        $sipnosis = $_POST['sipnosis'] ;
       
      
      
      

    }else{
        echo "No se recibieron datos<br />";
    }

?>
<div class="container " style="padding: 30px;">
<div class="alert alert-success" role="alert">
  <h1 class="alert-heading">La pelicula introducida es</h1>
  
  <p>TITULO: <?php echo $titulo ?><p>
  <p>ACTORES: <?php echo $actores ?><p>
  <p>DIRECTOR: <?php echo $director ?><p>
  <p>GUIÓN: <?php echo $guion ?><p>
  <p>PRODUCCIÓN: <?php echo $produccion ?><p>
  <p>AÑO: <?php echo $anio ?><p>
  <p>NACIONALIDAD: <?php echo $nacionalidad ?><p>
  <p>GENERO: <?php echo $genero ?><p>
  <p>DURACIÓN: <?php echo $duracion ?><p>
  <p>RESTRICCIÓN: <?php echo $restriccion?><p>
  <p>SIPNOSIS: <?php echo $sipnosis ?><p>
 
</div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>