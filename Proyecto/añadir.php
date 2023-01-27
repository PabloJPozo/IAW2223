<?php include "db.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de incidencias</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="añadir.css">
</head>
<body>

<?php 
  if(isset($_POST['crear'])) 
    {
        $planta = htmlspecialchars($_POST['planta']);
        $aula = htmlspecialchars($_POST['aula']);
        $descripcion = htmlspecialchars($_POST['descripcion']);
        $comentario = htmlspecialchars($_POST['comentario']);
        $fecha_de_alta = htmlspecialchars($_POST['fecha_de_alta']);
        $fecha_de_revision = htmlspecialchars($_POST['fecha_de_revision']);
        $fecha_de_resolucion = htmlspecialchars($_POST['fecha_de_resolucion']);
      
        $query= "INSERT INTO Incidencias (planta, aula, descripcion, fecha_de_alta, fecha_de_revision, fecha_de_resolucion, comentario) VALUES ('{$planta}','{$aula}','{$descripcion}','{$fecha_de_alta}','{$fecha_de_revision}','{$fecha_de_resolucion}','{$comentario}')";
        $resultado = mysqli_query($conn,$query);
    
          if (!$resultado) {
              echo "Algo ha ido mal añadiendo la incidencia: ". mysqli_error($conn);
          }
          else
          {
            echo "<script type='text/javascript'>alert('¡Incidencia añadida con éxito!')</script>";
          }         
    }
?>
<h1 class="text-center">Añadir incidencia</h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="planta" class="form-label">Planta</label>
        <input type="text" name="planta"  class="form-control">
      </div>
      <div class="form-group">
        <label for="aula" class="form-label">Aula</label>
        <input type="text" name="aula"  class="form-control">
      </div>
      <div class="form-group">
        <label for="descripcion" class="form-label">Descripcion</label>
        <input type="text" name="descripcion"  class="form-control">
      </div>
      <div class="form-group">
        <label for="fecha_de_alta" class="form-label">Fecha de alta</label>
        <input type="date" name="fecha_de_alta"  class="form-control">
      </div>
      <div class="form-group">
        <label for="fecha_de_revision" class="form-label">Fecha de revisión</label>
        <input type="date" name="fecha_de_revision"  class="form-control">
      </div>
      <div class="form-group">
        <label for="fecha de resolucion" class="form-label">Fecha de resolución</label>
        <input type="date" name="fecha_de_resolucion"  class="form-control">
      </div>
      <div class="form-group">
        <label for="comentario" class="form-label">Comentario</label>
        <input type="text" name="comentario"  class="form-control">
      </div>
      <div class="form-group">
        <input type="submit"  name="crear" class="btn btn-primary mt-2" value="Añadir">
      </div>
    </form> 
  </div>

<div class="colocar">
    <button>
        <a href="home.php">Volver</a>
        <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="37" cy="37" r="35.5" stroke="black" stroke-width="3"></circle>
            <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="black"></path>
        </svg>
    </button>
</div>
<footer class="blockquote-footer fixed-bottom">Gestión de incidencias del <a href="https://iesamachado.org" target="_blank">IES Antonio Machado</a>. Desarrollado por Pablo Jesús Pozo</footer>

</body>
</html>