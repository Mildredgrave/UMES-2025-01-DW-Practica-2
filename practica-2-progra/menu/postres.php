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
                <h1>Recetas</h1>
            </div>
            <div class="menu">
                <a class="menu-item" href="../index.php">Inicio</a>
            </div>
        </div>
        
        <div class="product-container">
            <?php
                $menu = [
                    ["fotografia" => "postres1.jpg", "nombre" => "Tiramisú Clásico", "descripcion" => "Un suave y esponjoso postre italiano hecho con capas de bizcocho empapadas en café, crema de mascarpone y espolvoreado con cacao amargo.", "precio" => " Q45.00"],
                    ["fotografia" => "postres2.jpg", "nombre" => "Cheesecake de Frambuesa", "descripcion" => "Suave cheesecake cremoso sobre una base crujiente de galleta, cubierto con una deliciosa mermelada de frambuesas frescas.", "precio" => " Q50.00"],
                    ["fotografia" => "postres3.jpg", "nombre" => "Cinnamon Roll con Glaseado de Vainilla", "descripcion" => "Un rollo de canela recién horneado, esponjoso y aromático, cubierto con un glaseado de vainilla suave y cremoso.", "precio" => " Q35.00"],
                    ["fotografia" => "postres4.jpg", "nombre" => "Galletas de Avena con Chocolate", "descripcion" => "Galletas recién horneadas de avena, con trozos de chocolate negro y un toque de canela, perfectas para acompañar una taza de café.", "precio" => " Q25.00"]
                    ];

                foreach ($menu as $postre) {
                    echo '<div class="product-item-recetas">';
                    echo '  <img src="../imagenes/' . $postre["fotografia"]. '" alt="plato1">';
                    echo '  <div class="product-detail">';
                    echo '      <h4><ins>' . $postre["nombre"] . '</ins></h4>';
                    echo '      <p><li>' . $postre["descripcion"] . '</li></ul></p>';
                    echo '      <h5><strong>Precio:</strong> ' . $postre["precio"] . '</h5>';
                    echo '  </div>';
                    echo '</div>';
                    
                }
            ?>
        </div>
        <br>
        <br>
        <ins><h3 class="center-text">Galeria</h3></ins>
        <div class="container" style="max-width: 600px;"> 
            <div class="container" style="max-width: 800px; margin: 0 auto;">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../imagenes/postres2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../imagenes/postre2.1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../imagenes/postre2.2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../imagenes/postre2.3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></spa>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <br>
        <br>
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
