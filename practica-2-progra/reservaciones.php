
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $fecha_de_reservacion = $_POST['fecha'];
        $hora_de_reservacion = $_POST['hora'];
        $descripcion_de_la_reserva = $_POST['descripcion'];

        echo "<h2>Reservación exitosa</h2>";
        echo "<p>Hemos recibido tu solicitud de reservación y se te estará enviando un mensaje a tu número de teléfono $telefono</p>";


        // Verifica si el directorio existe, si no, lo crea
        (!is_dir('reservaciones')) ? mkdir('reservaciones') : '';
        // Cambia al directorio
        chdir('reservaciones');
        // Crea o abre el archivo en modo append
        $archivo = fopen('reservaciones.txt', 'a+');
        // Escribe la información en el archivo
        fwrite($archivo, "$nombre, $telefono, $fecha_de_reservacion, $hora_de_reservacion, $descripcion_de_la_reserva\n");
        // Cierra el archivo
        fclose($archivo);

    }
?>
