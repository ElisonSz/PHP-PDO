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
 <h5 class="card-title">Ingreso de Estudiantes</h5>
 <form action="" method="post">
 <div class="form-group">
 <label for="id_estu">Código del estudiante:</label>
 <input type="text" name="id" id="id" class="form-control" required>
 </div>
 <div class="form-group">
 <label for="nombre_estu">contraseña</label>
 <input type="text" name="pass" id="pass" class="form-control" required>
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

if(isset($_POST['id'])){


$id= $_POST["id"];
$pass = $_POST["pass"];

$stmt = $mdb->prepare("SELECT nombre_estu from estudiantes where id_estu=:id and contra_estu=:pass");
$stmt->bindParam(":id",$id,PDO::PARAM_STR);
$stmt->bindParam(":pass",$pass,PDO::PARAM_STR);

$stmt->execute();
$count=$stmt->rowCount();
$data=$stmt->fetch(PDO::FETCH_OBJ);
if ($count) {
    header("location: inicio.php"); 
}

}

?>