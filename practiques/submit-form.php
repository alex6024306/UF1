<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nom']);
    $correo = htmlspecialchars($_POST['correu']);
    $motiu = htmlspecialchars($_POST['motiu']);
    $missatge = htmlspecialchars($_POST['missatge']);

    echo "<h1>Datos del formulario recibidos:</h1>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Correo Electrónico:</strong> $correo</p>";
    echo "<p><strong>Motivo:</strong> $motiu</p>";
    echo "<p><strong>Mensaje:</strong> $missatge</p>";
} else {
    echo "Por favor, envía el formulario correctamente.";
}
?>
