<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del cliente</title>
</head>
<body>
    <?php
    $dni = trim($_GET['dni']);
    $nombre = trim($_GET['nombre']);
    ?>
    <ul>
        <li>DNI: <?= $dni ?></li>
        <li>Nombre: <?= $nombre ?></li>
    </ul>
    <a href="formulario.html">Volver</a>
</body>
</html>
