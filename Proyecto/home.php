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
    <link rel="stylesheet" href="home.css">
</head>
<body>

<div class='ripple-background'>
  <div class='circle xxlarge shade1'></div>
  <div class='circle xlarge shade2'></div>
  <div class='circle large shade3'></div>
  <div class='circle mediun shade4'></div>
  <div class='circle small shade5'></div>
</div>

<div class="container">
      <h1 class="text-center" >Gestión de incidencias IES Antonio Machado</h1>
      <div class="añadir">
        <a class="continue-application" href="añadir.php">
          <div>
              <div class="pencil"></div>
              <div class="folder">
                  <div class="top">
                      <svg viewBox="0 0 24 27">
                          <path d="M1,0 L23,0 C23.5522847,-1.01453063e-16 24,0.44771525 24,1 L24,8.17157288 C24,8.70200585 23.7892863,9.21071368 23.4142136,9.58578644 L20.5857864,12.4142136 C20.2107137,12.7892863 20,13.2979941 20,13.8284271 L20,26 C20,26.5522847 19.5522847,27 19,27 L1,27 C0.44771525,27 6.76353751e-17,26.5522847 0,26 L0,1 C-6.76353751e-17,0.44771525 0.44771525,1.01453063e-16 1,0 Z"></path>
                      </svg>
                  </div>
                  <div class="paper"></div>
              </div>
          </div>
          Añadir
        </a>
      </div>
          <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
              <tr>
                <th  scope="col">ID</th>
                <th  scope="col">Planta</th>
                <th  scope="col">Aula</th>
                <th  scope="col">Descripción</th>
                <th  scope="col">Fecha alta</th>
                <th  scope="col">Fecha revisión</th>
                <th  scope="col">Fecha solución</th>
                <th  scope="col">Comentario</th>
                <th  scope="col" colspan="3" class="text-center">Operaciones</th>
              </tr>  
            </thead>
            <tbody class="fondo">
              <tr>
  
                <?php
                  $query="SELECT * FROM Incidencias";               
                  $vista_incidencias= mysqli_query($conn,$query);
                  while($row= mysqli_fetch_assoc($vista_incidencias)){
                    $id = $row['id'];                
                    $planta = $row['planta'];        
                    $aula = $row['aula'];         
                    $descripcion = $row['descripcion'];        
                    $fecha_de_alta = $row['fecha_de_alta'];        
                    $fecha_de_revision = $row['fecha_de_revision'];        
                    $fecha_de_resolucion = $row['fecha_de_resolucion'];        
                    $comentario = $row['comentario']; 
                    echo "<tr >";
                    echo " <th scope='row' >{$id}</th>";
                    echo " <td > {$planta}</td>";
                    echo " <td > {$aula}</td>";
                    echo " <td >{$descripcion} </td>";
                    echo " <td >{$fecha_de_alta} </td>";
                    echo " <td >{$fecha_de_revision} </td>";
                    echo " <td >{$fecha_de_resolucion} </td>";
                    echo " <td >{$comentario} </td>";
                    echo " <td class='text-center'> <a href='ver.php?incidencia_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> Ver</a> </td>";
                    echo " <td class='text-center' > <a href='editar.php?editar&incidencia_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> Editar</a> </td>";
                    echo " <td class='text-center'>  <a href='eliminar.php?eliminar={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> Eliminar</a> </td>";
                    echo " </tr> ";
                  }
                  
                ?>
              </tr>  
            </tbody>
          </table>

          <div class="card">
            <?php
              $contador = "SELECT COUNT(*) id FROM Incidencias";
              $resultado = mysqli_query($conn,$contador);
              $fila = mysqli_fetch_assoc($resultado);

              $contador2 = "SELECT COUNT(*) id FROM Incidencias WHERE fecha_de_resolucion IS NOT NULL";
              $resultado2 = mysqli_query($conn,$contador2);
              $fila2 = mysqli_fetch_assoc($resultado2);

              $contador3 = "SELECT COUNT(*) id FROM Incidencias WHERE fecha_de_resolucion IS NULL";
              $resultado3 = mysqli_query($conn,$contador3);
              $fila3 = mysqli_fetch_assoc($resultado3);

                      
              echo 'Numero total de incidencias registradas: ' .$fila['id'];
              echo '<br>';
              echo 'Número de incidencias resueltas: ' .$fila2['id'];
              echo '<br>';
              echo 'Número de incidencias no resueltas: ' .$fila3['id'];
            ?>
          </div>
        
</div>


<div class="colocar">
    <button>
        <a href="login.php">Volver</a>
        <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="37" cy="37" r="35.5" stroke="black" stroke-width="3"></circle>
            <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="black"></path>
        </svg>
    </button>
</div>


<footer class="blockquote-footer fixed-bottom">Gestión de incidencias del <a href="https://iesamachado.org" target="_blank">IES Antonio Machado</a>. Desarrollado por Pablo Jesús Pozo</footer>

</body>
</html>



