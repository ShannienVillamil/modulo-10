


    <?php
include 'envio_de_datos_GET.html';

    $edad = 0;
    
    if (isset($_GET['verificar'])) {
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $cedula = $_GET['cc'];
    
        echo "Nombre : ".$nombre."<br>";
        echo "Apellido : ".$apellido."<br>";
        echo "Cédula : ".$cedula."<br>";

    }
    ?>