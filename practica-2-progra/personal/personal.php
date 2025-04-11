<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Personal - El Rincón del Café</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Conoce al equipo detrás de El Rincón del Café.">
        <meta name="keywords" content="chef, personal, restaurante">
        <meta property="og:title" content="Personal - El Rincón del Café">
        <meta property="og:image" content="../imagenes/chef1.jpg">
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
                <h1>Personal</h1>
            </div>
            <div class="menu">
                <a class="menu-item" href="../index.php">INICIO</a>
            </div>
        </div>

        <div class="product-container">
            <?php
                $personal = [
                    ["fotografia" => "chef1.jpg", "nombre" => "Gordon Ramsay","puesto" => "Chef Ejecutivo", "cargo" => "Jefe", "descripcion" => "Es un chef británico mundialmente reconocido, conocido tanto por sus habilidades culinarias como por su personalidad enérgica y exigente. Ha trabajado en varios restaurantes con estrellas Michelin y es el dueño de una cadena internacional de restaurantes. Es también conocido por sus programas de televisión como Hell's Kitchen, MasterChef y Kitchen Nightmares."],
                    ["fotografia" => "chef2.jpg", "nombre" => "José Andrés","puesto" => "Chef de Pastelería", "cargo" => "Chef Secundario", "descripcion" => "Chef español y embajador global de la cocina moderna. Es conocido por su enfoque en la cocina española, así como por su labor humanitaria. Ha sido nominado varias veces a los premios James Beard. Su restaurante Jaleo en Washington D.C. es muy popular, y su estilo combina la gastronomía española con innovaciones contemporáneas."],
                    ["fotografia" => "chef3.jpg", "nombre" => "Dominique Ansel","puesto" => "Chef de Repostería", "cargo" => "Chef Secundario", "descripcion" => "Chef pastelero francés, famoso por inventar el Cronut, una combinación de croissant y donut. Es conocido por su innovadora y creativa aproximación a los postres. Su pastelería en Nueva York ha ganado fama internacional y ha recibido numerosos premios."],
                    ["fotografia" => "chef4.jpg", "nombre" => "Alice Waters","puesto" => "Chef Secundario", "cargo" => "Chef de Cocina Vegetariana", "descripcion" => "Es una chef estadounidense y activista por la alimentación orgánica. Fundadora del restaurante Chez Panisse en Berkeley, California, ha sido pionera en la cocina de alimentos frescos y orgánicos, defendiendo un enfoque más sostenible y saludable de la gastronomía."],
                    ["fotografia" => "chef5.jpg", "nombre" => "David Chang","puesto" => "Chef Secundario", "cargo" => "Chef de Innovación Gastronómica", "descripcion" => "Es un chef de origen coreano-estadounidense, conocido por su restaurante Momofuku y por su serie en Netflix, Ugly Delicious. Chang es reconocido por su estilo culinario que mezcla sabores asiáticos con influencias occidentales."]
                ];

                foreach ($personal as $chef) {
                    echo '<div class="product-item-recetas">';
                    echo '  <img src="../imagenes/' . $chef["fotografia"] . '" alt="chef1">';
                    echo '  <div class="product-detail">';
                    echo '      <h3>' . $chef["nombre"] . ' - ' . $chef["cargo"] . '</h3>';
                    echo '      <h5><ins>' . $chef["puesto"] . '</ins></h5>';
                    echo '      <p><ul><li>' . $chef["descripcion"] . '</li></ul></p>';
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

