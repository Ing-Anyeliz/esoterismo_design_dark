<?php
  $destino = "anyelizrico@gmail.com";
  $nombre = $_Post["nombre"];
  $correo = $_Post["correo"];
  $telefono = $_Post["telefono"];
  $mensaje = $_Post["mensajes"];
  $contenido = "Nombre: " . $nombre . "\nCorreo: " .$correo . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;
  mail($destino, "Contacto_Web" , $contenido);
  header("Location: mensaje_enviado.html")
 ?>
