
<?php

include 'edad_exacta.html';

     const constante_18 = "18";
        define ("constante0","0");
    if (isset($_POST['verificar'])) {
    
        
        $fecha = new DateTime($_POST['fecha_nacimiento']);
       
        $date2 = new DateTime(date("y-m-d"));

        $fecha_actual = $fecha->diff($date2);

        $edad_actual = $fecha_actual->y;
        $edad_meses = $fecha_actual->m;
        $edad_dias = $fecha_actual->d;

        
     if ( $edad_actual >=constante_18)  {
            echo "<h1> Es mayor de edad, dado que tiene<br/>" .$edad_actual. "años </h1>";
            #else if (18 > $edad && 0 < $edad)
        }
        else if ( $edad_actual < constante_18 && $edad_actual > constante0)
             { 
                echo "<h2> Es menor de edad, dado que tiene <br/>" .$edad_actual. "años </h2>";
            }
            else{
                echo "<h2>No valido</h2>";
            }
            echo  "años: ".$edad_actual." meses: ".$edad_meses." dias: ".$edad_dias;}   
        
    ?>

  