<?php
 include "conexion.php";
 if(isset($_POST["id"])){
 try {
 echo "codigo a buscar ". $_POST["id"];
 $id = $_POST["id"];
 $nombre = $_POST["nombre"];
 $apellido = $_POST["apellido"];
 $pass = $_POST["pass"];
 $direccion = $_POST["direccion"];
 $ciudad = $_POST["ciudad"];
 //var_dump($_POST);
 $sql = "UPDATE estudiantes SET nombre_estu=:nombre, apellido_estu=:apellido,contra_estu=:pass,
direccion_estu=:direccion, ciudad_estu=:ciudad WHERE id_estu=:id";
 $result = $mdb->prepare($sql);
 $Ejecutar = $result->execute(
 array(
 ":nombre" =>$nombre,
 ":apellido"=>$apellido,
 ":pass"=>$pass,
 ":direccion"=>$direccion,
 ":ciudad"=>$ciudad,
 ":id"=>$id
 )
 );
 if($Ejecutar) { echo " records UPDATED successfully";
header("location: consultarRegistro.php");
}else{ echo "No fue posible
actualizar el registro";}
 } catch (PDOException $e) {
 echo "Error:".$e->getMessage();
 }
 }
 if(isset($_GET["id"])){
 try {
 $id = $_GET["id"];
 $sentencia = $mdb->query("SELECT * FROM estudiantes WHERE id_estu = '".$id."'");
 $row_count = $sentencia->rowCount();
 if($row_count > 0){
 $fila = $sentencia->fetch(PDO::FETCH_ASSOC);
 }
 } catch (PDOException $e) {
 echo "Error: ".$e->getMessage();
 }
 $conn = null;
 }
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Modificar Registros</title>
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
 DATOS DE ESTUDIANTES
 </div>
 <div class="card-body">
 <h5 class="card-title">Modificar la información del estudiante</h5>
 <form action="" method="post">
 <div class="form-group">
 <label for="id_estu">Código del estudiante:</label>
 <!-- Tener el cuidado de no dejar espacios en blanco al inicio de cada campo
insertado en: value=" -->
 <input type="text" name="id" id="id_estu" width="50%" class="form-control"
value="<?php echo $fila["id_estu"]; ?>" readonly>
 </div>
 <div class="form-group">
 <label for="nombre_estu">Nombre del estudiante:</label>
 <input type="text" name="nombre" id="nombre_estu" class="form-control"
value="<?php echo $fila["nombre_estu"]; ?>">
 </div> <div class="form-group">
 <label for="nombre_estu">Apellido del estudiante:</label>
 <input type="text" name="apellido" id="apellido_estu" class="form-control"
value="<?php echo $fila["apellido_estu"]; ?>" required>
 </div>

 <div class="form-group">
 <label for="nombre_estu">Contraseña:</label>
 <input type="text" name="pass" id="contra_estu" class="form-control"
value="<?php echo $fila["contra_estu"]; ?>" required>
 </div>

 <div class="form-group">
 <label for="nombre_estu">direccion:</label>
 <input type="text" name="direccion" class="form-control" value="<?php echo
$fila["direccion_estu"]; ?>" required>
 </div>
 <div class="form-group">
 <label for="ciudad_estu">Ciudad</label>
 <input type="text" name="ciudad" class="form-control" value="<?php echo
$fila["ciudad_estu"]; ?>" required>
 </div>
 <input type="submit" name="enviar" class="btn btn-primary" value="Guardar
Registro">
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
?>