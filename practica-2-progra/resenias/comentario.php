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
                <h1>Reseñas</h1>
            </div>
            <div class="menu">
                <a class="menu-item" href="../index.php">Inicio</a>
            </div>
        </div>
        
        <div class="container_resenia">
            <div class="reviews">
                <?php
                $resenia = [
                    ["fotografia" => "comentario1.jpg", "nombre" => "Theo James", "calificacion" => "⭐⭐⭐⭐⭐","descripcion" => "Excelente servicio, muy rápido y eficiente. Totalmente recomendado."],
                    ["fotografia" => "comentario2.jpg", "nombre" => "Ian Somerhalder", "calificacion" => "⭐⭐⭐⭐","descripcion" => "Buen servicio, aunque podría mejorar la atención al cliente."],
                    ["fotografia" => "comentario3.jpg", "nombre" => "Paul Wesley", "calificacion" => "⭐⭐⭐⭐⭐","descripcion" => "Muy satisfecho con la compra. Volveré a usar este servicio."],
                    ["fotografia" => "comentario4.jpg", "nombre" => "Santiago Talledo", "calificacion" => "⭐⭐⭐⭐","descripcion" => "Excelente servicio y café de muy buena calidad. Los desayunos son abundantes y deliciosos. El ambiente es acogedor."],
                    ["fotografia" => "comentario5.jpg", "nombre" => "Robert pattinson", "calificacion" => "⭐⭐⭐⭐⭐","descripcion" => "Definitivamente uno de los mejores cafés de la ciudad. El espresso es perfecto y el ambiente es ideal para trabajar."],
                    ["fotografia" => "comentario6.jpg", "nombre" => "Tom Cruise", "calificacion" => "⭐⭐⭐⭐⭐","descripcion" => "Hay muchas opciones de cafeterías pero El ambiente es moderno y agradable para una charla con amigos."]
                    ];

                foreach ($resenia as $comentario) {
                    echo '<div class="review-card">';
                    echo '  <div class="profile">';
                    echo '      <img src="../imagenes/' . $comentario["fotografia"]. '" alt="Usuario 1">';
                    echo '      <div class="name">' . $comentario["nombre"] . '</div>';
                    echo '  </div>';
                    echo '  <div class="stars">' . $comentario["calificacion"] . '</div>';
                    echo '  <p class="text">' . $comentario["descripcion"] . '</p>';
                    echo '</div>';
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
