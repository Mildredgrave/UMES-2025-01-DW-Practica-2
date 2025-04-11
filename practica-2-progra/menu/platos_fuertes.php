<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Rincón del Café</title>
        <link rel="stylesheet" href="../style.css">
        <link rel="icon" href="../imagenes/favicon.ico" type="image/x-icon">
        <meta name="description" content="Restaurante Rincón del Café, donde disfrutarás de cafés de alta calidad y postres artesanales en un ambiente acogedor.">
        <meta name="keywords" content="restaurante, café, postres, artesanal, Rincón del Café">
        <meta name="author" content="Restaurante de café">
        <meta property="og:title" content="Restaurante de Café">
        <meta property="og:description" content="Un restaurante único con lo mejor en café y postres artesanales.">
        <meta property="og:image" content="imagenes/restaurante1.jpg">
        <meta property="og:url" content="http://rincondelcafe.com">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/footers/">
        
    </head>
    <body>
        <div id="header">
            <div class="identidad">
                <img src="../imagenes/logo_cafeteria.jpg" alt="Logo del Rincon del Café S.A" title="Logo" width="66px">
                <h1>Platos Fuertes</h1>
            </div>
            <div class="menu">
                <a class="menu-item" href="../index.php">Inicio</a>
            </div>
        </div>

        <div class="product-container">
            <?php
                    $menu = [
                        ["fotografia" => "plato1.jpg", "nombre" => "Croissant Relleno de Jamón y Queso Suizo", "descripcion" => "Un croissant recién horneado, relleno con jamón serrano y queso suizo derretido, creando una combinación de texturas crujientes y suaves.", "precio" => " Q35.00"],
                        ["fotografia" => "plato2.jpg", "nombre" => "Bagel con Salmón Ahumado y Queso Crema", "descripcion" => "Un bagel recién horneado cubierto con queso crema, salmón ahumado, alcaparras y cebollas moradas en rodajas finas.", "precio" => " Q48.00"],
                        ["fotografia" => "plato3.jpg", "nombre" => "Sándwich de Pollo al Pesto", "descripcion" => "Pechuga de pollo a la parrilla, acompañada de una salsa pesto casera, tomate fresco y queso mozzarella, todo dentro de un pan artesanal ligeramente tostado.", "precio" => " Q40.00"],
                        ["fotografia" => "plato4.jpg", "nombre" => "Tostada de Hummus y Verduras", "descripcion" => "Tostada de pan integral cubierta con hummus casero, zanahorias ralladas, pepino fresco y espinacas, todo rociado con aceite de oliva y semillas de sésamo.", "precio" => " Q65.00"]
                        ];

                    foreach ($menu as $plato) {
                        echo '<div class="product-item-recetas">';
                        echo '  <img src="../imagenes/' . $plato["fotografia"]. '" alt="plato1">';
                        echo '  <div class="product-detail">';
                        echo '      <h4><ins>' . $plato["nombre"] . '</ins></h4>';
                        echo '      <p><li>' . $plato["descripcion"] . '</li></ul></p>';
                        echo '      <h5><strong>Precio:</strong> ' . $plato["precio"] . '</h5>';
                        echo '  </div>';
                        echo '</div>';
                        
                    }
                ?>
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
