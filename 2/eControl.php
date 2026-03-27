<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Dariel</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="./image/favicon.png" type="image/png">
    <script src="main.js"></script>
  </head>
  <body>
    <h1>PRUEBAS</h1>
    <?php
    $numero = 32;
    $numero2 = 3;
$color = "green";
    $mayor = 'green';
    $menor = 'red';
    $igual = 'blue';  


    if($numero < $numero2) {
    echo "<p style='color: $menor;'>es menor</p>";
} elseif($numero == $numero2) {
    echo "<p style='color: $igual;'><strong>Son iguales</strong> </p>";
} else {
    echo "<p style='color: $mayor;'><strong>$numero</strong> es mayor que <strong>$numero2</strong> </p>";
}

///////////////////////////////
    $numero = 3;
    $numero2 = 3;
if($numero < $numero2) {
    echo "<p style='color: $menor;'>es menor</p>";
} elseif($numero == $numero2) {
    echo "<p style='color: $igual;'><strong>Son iguales</strong> </p>";
} else {
    echo "<p style='color: $mayor;'><strong>$numero</strong> es mayor que <strong>$numero2</strong> </p>";
}

//////////////////////////////
    $numero = 1;
    $numero2 = 3;
if($numero < $numero2) {
    echo "<p style='color: $menor;'><strong>$numero</strong> es menor que <strong>$numero2</strong></p>";
} elseif($numero == $numero2) {
    echo "<p style='color: $igual;'><strong>Son iguales</strong> </p>";
} else {
    echo "<p style='color: $mayor;'><strong>$numero</strong> es mayor que $numero2 </p>";
}
echo "<br/>";

$nombre = "Dariel";
if(!($nombre == 'Dariel')) {
 echo "Hola Desconocido";
} else {
  echo "Hola yop ksjaksjka <br/>";
}
//////////////////////////
$nombre = "Dqariel";
if(!($nombre == 'Dariel')) {
 echo "Hola Desconocido <br/>";
} else {
  echo "Hola yop ksjaksjka <br/>";
}
 /////////////////////


 $numeroM = 10;
 $numerom = 1;

 if (!(isset($numeroC))) {
    echo "que es esta monda";
 }
    elseif(($numeroC < $numeroM) && ($numeroC > $numerom)){
        echo "Está dentro de los parámetros";
    } else {
        echo "No está en los parámetros (está fuera de rango)";
    }
  echo "<br/ >";

    /////////////////////////////////////////////////////////
      echo "<hr/>";

      $dinero =  -100;

      switch($dinero){
        case ($dinero >= 1 && $dinero <= 199) :
            echo 'Tienes ', $dinero,'$';
            break;
        case ($dinero >= 200 && $dinero <= 400) : 
            echo "Tienes un negocio de $dinero$ en tus manos";
            break;
        case ($dinero <= -1 ) :
           echo "No tienes nada mamon🤢";
            break;
        default :
        echo 'tienes mas de lo que imagine we';
      }
      echo "<br/ >";
      echo "<br/ >";
      echo "<hr/>";

////////////////////////////////////////////////////////
        $cuenta = 0;
        while($cuenta < 10){
            echo "$cuenta sigue siendo un numero pequeño <br/>";
            $cuenta++;
            if($cuenta == 10){
                echo 'tienes 10 bro<br/>';
            } 

        }
         echo "<br/ >";
    echo "<hr/ >";
        //////////////////////////////////////////////////////////////////////////

    for ($numero=1;$numero<=10;$numero++){
        echo'tu numero es ', $numero, "<br/>";
    }

    echo "<hr/ >";

    $amigos = ['Dariel', 'Daniel', 'Pedro', 'Darits', 'Sandy', 'Josue'];
    for ($p=0;$p<6;$p++){
        echo 'Tu amigo numero ', $p, ' es: ', $amigos[$p], "<br/>";
    
        }
?> 
<h2>Foreach</h2>
<?php   

    echo "<hr/ >";
        ///////////////////////////////
        $amigoss = ['Dariel', 'Daniel', 'Pedro', 'Darits', 'Sandy', 'Josue'];
        foreach($amigoss as $amigo){
            echo "mis amigos son: $amigo <br/ >";  
        }
        
        
        $valores = [1,4,340,102,323];
        foreach($valores as $valor => $valores){
            echo "$valor => $valores <br/>";
        }

        $amigoss = ['Dariel', 'Daniel', 'Pedro', 'Darits', 'Sandy', 'Josue'];
        foreach($amigoss as $indiceA => $amigo){
            echo "en la posicion $indiceA de mi array esta $amigo <br/ >";  
        }
    echo '<hr/>';

    ?>
  </body> 
</html> 