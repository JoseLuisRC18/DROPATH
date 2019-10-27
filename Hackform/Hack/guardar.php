<?php
   
   require 'conexione.php';

   $nombre = $_POST['nombre'];
   $producto = $_POST['producto'];
   $correo = $_POST['correo'];
   $cantidad = $_POST['cantidad'];
   $precio = $_POST['precio'];

 

   $sql = "INSERT INTO proveedor(nombre, producto, correo, cantidad, precio) VALUES ('$nombre','$producto','$correo','$cantidad','$precio')";
   $resultado = $mysqli->query($sql);
   header('Location: nuevo.php');
?>

