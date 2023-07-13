
<?php
include 'mayorymenor.html';
$edad = 0;
const constante = "18";

if (isset($_POST['verificar'])) {
    $edad = $_POST['edad'];

    if ($edad >= constante) {
        echo "<h1>Es mayor de edad</h1>";
    }
    else if ( $edad < constante && 0 < $edad) {
        echo "<h2>Es menor de edad</h2>";
    }else{
        echo "<h2>No valido</h2>";
    }

}

?>