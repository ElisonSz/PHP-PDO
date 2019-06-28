<?php
include "conexion.php";
try {
 if($_GET){
 $id=$_GET["id"];
 $stmt = $mdb->prepare("DELETE FROM estudiantes WHERE id_estu=:id");
 $stmt->bindValue(':id',$id,PDO::PARAM_STR);
 $stmt->execute();
 $affected_rows = $stmt->rowCount();
 echo "<script>location.replace('consultarRegistro.php?id=".$id."');</script>";
 }
} catch (PDOException $e) {
 echo "Error: ".$e->getMessage();
}
?>