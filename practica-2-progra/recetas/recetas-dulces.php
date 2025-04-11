<?php
    $archivo = file_get_contents('../recetas/recetas-dulces.txt');
    if ($archivo === false) {
        echo "Error: No se pudo cargar el archivo recetas-dulces.txt";
        exit;
    }
    $recetas = explode("===", $archivo);

    function formatearReceta($bloque) {
        $lineas = explode("\n", $bloque);
        $titulo = '';
        $descripcion = '';
        $ingredientes = '';
        $pasos = '';
        $imagen = '';
    
        foreach ($lineas as $linea) {
            if (strpos($linea, 'Título:') === 0) {
                $titulo = trim(substr($linea, strlen('Título:')));
            } elseif (strpos($linea, 'Descripción:') === 0) {
                $descripcion = trim(substr($linea, strlen('Descripción:')));
            } elseif (strpos($linea, 'Ingredientes:') === 0) {
                $ingredientes = trim(substr($linea, strlen('Ingredientes:')));
            } elseif (strpos($linea, 'Pasos:') === 0) {
                $pasos = trim(substr($linea, strlen('Pasos:')));
            } elseif (strpos($linea, 'Imagen:') === 0) {
                $imagen = trim(substr($linea, strlen('Imagen:')));
            }
        }
    
        return '
        <div class="receta">
            <h3>' . htmlspecialchars($titulo) . '</h3>
            ' . ($imagen ? '<img src="../imagenes/' . htmlspecialchars($imagen) . '" alt="' . htmlspecialchars($titulo) . '" class="img-fluid mb-3" style="max-width:300px;">' : '') . '
            <p>' . htmlspecialchars($descripcion) . '</p>
            <h4>Ingredientes:</h4>
            <ul>
                <li>' . str_replace(', ', '</li><li>', htmlspecialchars($ingredientes)) . '</li>
            </ul>
            <h4>Pasos:</h4>
            <ol>
                <li>' . str_replace('. ', '</li><li>', htmlspecialchars($pasos)) . '</li>
            </ol>
        </div>';
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/footers/">
    

    </head>

    <body>
        <div id="header">
            <div class="identidad">
                <img src="../imagenes/logo_cafeteria.jpg" alt="Logo del Rincon del Café S.A" title="Logo" width="66px">
                <h1>Recetas Dulces</h1>
            </div>
            <div class="menu">
                <a class="menu-item" href="../index.php">Inicio</a>
            </div>
        </div>

        <div class="product-container">
            
            <div class="product-detail">
            <?php
                $i = 1;
                foreach ($recetas as $receta) {
                    echo "<!-- Receta #$i -->\n";
                    echo formatearReceta($receta);
                    $i++;
                }
            ?>
            </div>
            
        </div>

        <footer id="footer" class="bg-dark text-white py-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6 text-center text-md-start">
                        Rincón del Café. <sup>[R]</sup>
                    </div>
                    <div class="col-12 col-md-6 text-center text-md-end">
                        18 Avenida A, Zona 10, Guatemala, Guatemala<br>
                        Teléfonos: 2222-3023 o 2222-5678
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
