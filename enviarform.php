<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $consulta = $_POST['consulta'];

    // Destinatario del correo
    $to = "administracion@berplast.com";
    $subject = "Consulta desde el sitio web";
    
    // Mensaje del correo
    $message = "Nombre: $nombre\n";
    $message .= "Email: $email\n";
    $message .= "Consulta:\n$consulta";

    // Encabezados del correo
    $headers = "From: $email";

    // Enviar correo
    if (mail($to, $subject, $message, $headers)) {
        echo "¡Consulta enviada con éxito!";
    } else {
        echo "Hubo un error al enviar la consulta. Por favor, inténtalo de nuevo más tarde.";
    }
}
?>