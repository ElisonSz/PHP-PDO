<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Consulta de Registros</title>
 <link rel="stylesheet" href="../css/bootstrap.min.css">
 <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
 <div class="container">
 <?php include "header.php"; ?>
 <?php include "nav.php"; ?>
<section>
 <article>
 <div class="row">
 <div class="col-md-6 mt-2">
<div class="card">
 <div class="card-header fdo">
 ADMINISTRACION ACADEMICA
 </div>
 <div class="card-body">
 <h5 class="card-title">Consulta de Registros de Estudiantes</h5>
 <form action="" method="post">
 <div class="form-group">
 <label for="buscar">Ingrese el término de búsqueda</label>
 <input type="text" name="buscar" class="form-control">
 </div>
 <input type="submit" name="consultar" class="btn btn-primary" value="Consultar">
 </form>
 <p class="card-text">Introduzca su término de búsqueda, si los quiere todos solo pulse el
botón.</p>
 <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
 </div>
</div>
 </div>
 </div>
 </article>
</section>
<section>
 <article>
 <div class="row">
 <div class="col-md-12 mt-2">
 <div class="card">
 <div class="card-header fdo">
 ADMINISTRACION ACADEMICA
 </div>
 <div class="card-body">
 <h5 class="card-title">Consulta de registros de estudiantes.</h5>
 <!-- <p class="card-text">With supporting text below as a natural lead-in to additional
content.</p> -->

 <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
 <?php
 include "conexion.php";
 if(isset($_POST["buscar"])){
 $buscar = $_POST["buscar"];
 #echo $buscar;
 $sentencia = $mdb->query("SELECT * FROM estudiantes WHERE id_estu LIKE
'%".$buscar."%' ORDER BY id_estu");

 $row_count = $sentencia->rowCount();
 echo '<table class="table table-striped">';
 echo '<thead class="thead-primary">';
 echo '<th>Código</th>';
 echo '<th>Nombre</th>';
 echo '<th>Apellido</th>';
 echo '<th>Contraseña</th>';
 echo '<th>Dirección</th>';
 echo '<th>Ciudad</th>';
 echo '<th>Opción</th>';
 echo '<th>Opción</th>';
 echo '</thead>';
 echo $row_count." filas seleccionadas";
 
 while($fila = $sentencia->fetch(PDO::FETCH_ASSOC)){
 echo '<tr>';
 echo '<td>'.$fila["id_estu"].'</td>';
 echo '<td>'.$fila["nombre_estu"].'</td>';
 echo '<td>'.$fila["apellido_estu"].'</td>';
 echo '<td>'.$fila["contra_estu"].'</td>';
 echo '<td>'.$fila["direccion_estu"].'</td>';
 echo '<td>'.$fila["ciudad_estu"].'</td>';
 echo '<td><a href="modificarRegistro.php?id='.$fila["id_estu"].'" class="btn btninfo">Modificar';
 echo '<td><a href="eliminarRegistro.php?id='.$fila["id_estu"].'" class="btn btndanger">Eliminar';
 }
 echo '</table';
 }
 ?>
 </div>
 </div>
 </div>
 </div>
 </article>
</section>
 <?php include "footer.php"; ?>
 <script src="../js/jquery-3.3.1.js"></script>
 <script src="../js/bootstrap.min.js"></script>
</body>
</html>