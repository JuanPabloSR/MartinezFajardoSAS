<?php  

// Llamando a los campos
$nombre = $_POST['name'];
$correo = $_POST['email'];
$asuntos = $_POST['subject'];
$mensaje = $_POST['message'];

// Datos para el correo
$destinatario = "juanpablosanchez744@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Asunto: $asuntos \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
echo "<script>
    window.location='contact.html';
</script>";

?>
