<?php
$archivo = "reservaciones.txt";

if (file_exists($archivo)) {
    $reservaciones = file($archivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); //FILE_IGNORE_NEW_LINES elimina el salto de línea (\n) al final de cada línea, FILE_SKIP_EMPTY_LINES hace que se ignoren las líneas vacías (no se agregan al array)
} else {
    $reservaciones = [];
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Rincón del Café</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Restaurante Rincón del Café, donde disfrutarás de cafés de alta calidad y postres artesanales en un ambiente acogedor.">
        <meta name="keywords" content="restaurante, café, postres, artesanal, Rincón del Café">
        <meta name="author" content="Restaurante de café">
        <meta property="og:title" content="Restaurante de Café">
        <meta property="og:description" content="Un restaurante único con lo mejor en café y postres artesanales.">
        <meta property="og:image" content="imagenes/restaurante1.jpg">
        <meta property="og:url" content="http://rincondelcafe.com">
        <link rel="icon" href="../imagenes/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="../style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/footers/">
    </head>

    <body>
        <div id="header">
            <div class="identidad">
                <img src="../imagenes/logo_cafeteria.jpg" alt="Logo del Rincon del Café S.A" title="Logo" width="66px">
                <h1>Reservaciones</h1>
            </div>
            <div class="menu">
                <a class="menu-item" href="../index.php">Inicio</a>
            </div>
        </div>

        <?php if (empty($reservaciones)): ?>
        <div class="container mt-5">
            <p class="text-center">No hay reservaciones registradas.</p>
        </div>
        <?php else: ?>
            <div class="container mt-5">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($reservaciones as $reserva): ?>
                            <?php
                            $partes = explode(", ", $reserva);
                            $nombre = str_replace("Nombre: ", "", $partes[0]);
                            $telefono = str_replace("Teléfono: ", "", $partes[1]);
                            $fecha = str_replace("Fecha: ", "", $partes[2]);
                            $hora = str_replace("Hora: ", "", $partes[3]);
                            $descripcion = str_replace("Descripción: ", "", $partes[4]);
                            ?>
                            <tr>
                                <td><?php echo htmlspecialchars($nombre); ?></td>
                                <td><?php echo htmlspecialchars($telefono); ?></td>
                                <td><?php echo htmlspecialchars($fecha); ?></td>
                                <td><?php echo htmlspecialchars($hora); ?></td>
                                <td><?php echo htmlspecialchars($descripcion); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>