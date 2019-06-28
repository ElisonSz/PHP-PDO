<?php
 $usuario = "root";
 $contraseña = "";
 try {
 $mdb = new PDO('mysql:host=localhost;dbname=educacion', $usuario, $contraseña);
 $mdb->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 echo "Conexión establecida";
 } catch (PDOException $e) {
 print "¡Error!: " . $e->getMessage() . "<br/>";
 die();
 }
?>
