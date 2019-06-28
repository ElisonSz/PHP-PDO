<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Guardar Registro</title>
 <link rel="stylesheet" href="../css/bootstrap.min.css">
 <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
 <div class="container">
 <?php include "header.php"; ?>
 <?php include "nav.php"; ?>
<section>
<div class="row mt-2">
 <div class="col-md-6">
 <div class="card">
 <div class="card-header fdo">
 ADMINISTRACION ACADEMICA
 </div>
 <div class="card-body">
 <h5 class="card-title">Registro de Estudiantes</h5>
 <form action="" method="post">
 <div class="form-group">
 <label for="id_estu">Código del estudiante:</label>
 <input type="text" name="id" id="id" class="form-control" required>
 </div>
 <div class="form-group">
 <label for="nombre_estu">Nombre del estudiante:</label>
 <input type="text" name="nombre" id="nombre" class="form-control" required>
 </div>
 <div class="form-group">
 <label for="nombre_estu">Apellido del estudiante:</label>
 <input type="text" name="apellido" id="apellido" class="form-control" required>
 </div>
 <div class="form-group">
 <label for="nombre_estu">contraseña:</label>
 <input type="text" name="pass" id="pass" class="form-control" required>
 </div>
 <div class="form-group">
 <label for="nombre_estu">direccion:</label>
 <input type="text" name="direccion" class="form-control" required>
 </div>
 <div class="form-group">
 <label for="nombre_estu">Ciudad</label>
 <input type="text" name="ciudad" class="form-control" required>
 </div>
 <input type="submit" name="enviar" class="btn btn-primary">
 </form>
 </div>
 </div>
 </div>
</div>
</section>
 <?php include "footer.php"; ?>
 <script src="../js/jquery-3.3.1.js"></script>
 <script src="../js/bootstrap.min.js"></script>
</body>
</html>
<?php
 include "conexion.php";

 if(isset($_POST["id"])){
 $sentencia = $mdb->prepare("INSERT INTO estudiantes
(id_estu,nombre_estu,apellido_estu,contra_estu,direccion_estu,ciudad_estu)
 VALUES (:id,:nombre,:apellido,:pass,:direccion,:ciudad)");

 $sentencia->bindParam(':id', $id_estu);
 $sentencia->bindParam(':nombre', $nombre_estu);
 $sentencia->bindParam(':apellido', $apellido_estu);
 $sentencia->bindParam(':pass',$contra_estu);
 $sentencia->bindParam(':direccion', $direccion_estu);
 $sentencia->bindParam(':ciudad', $ciudad_estu);

 // insertar una fila
 $id_estu = $_POST["id"];
 $nombre_estu = $_POST["nombre"];
 $apellido_estu = $_POST["apellido"];
 $contra_estu = $_POST["pass"];
 $direccion_estu = $_POST["direccion"];
 $ciudad_estu = $_POST["ciudad"];
 # ejecuta la sentencia SQL
 if($sentencia->execute()){ $message = "Registro almacenado correctamente";
    header('location: login.php');
}else{
$message="Error";}
 }
?>
