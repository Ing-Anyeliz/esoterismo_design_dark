<?php
  $destino = "anyelizrico@gmail.com";
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $telefono = $_POST['telefono'];
  $mensaje = $_POST['mensajes'];
  $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;
  mail($destino, "Contacto_Web", $contenido);
  header("Location: mensaje_enviado.html")
 ?>
