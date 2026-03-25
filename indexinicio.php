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
    <?php 
$fecha = date("d-m-y");
$nombre = "Dariel";
echo "<h1>Hola Mundo desde PHP \"alo\"</h1>";
echo "<p>Soy <strong>".$nombre."</strong> y hoy es ".$fecha."</p>";
echo "<small>Este es un texto pequeño</small>";
echo '<hr/>';
//OPERADORES
/////////////////////////////////////////////////////////////////////////////////
$nombre = "";
echo 'Hola '.(($nombre =='') ? 'Carnal':$nombre);
echo '<hr/>';
$nombre = "Darieel";
echo 'Hola '.(($nombre ==' ') ? 'Bro':$nombre);
echo '<br/ >';
echo '<br/ >';
$num1 = 100;
$num2 = 100.00;
echo (($num1 === $num2)? 'Son Identicos': 'No son iguales');
echo '<br/ >';
echo '<br/ >';
$num1 = 100;
$num2 = 100;
echo (($num1 === $num2)? 'Son Identicos': 'No son iguales');
echo '<br/ >';
echo '<br/ >';
$num1 = 20;
$num2 = 100;
echo (($num2 == ($num3 =($num1*5)))? "La multiplicacion da  $num3 que es el valor establecido":$num3.' Esta fuera de rango');
echo '<hr />';
$num1 = 21;
$num2 = 100;
echo (($num2 == ($num3 =($num1*5)))? 'La multiplicacion da '. $num3 . ' que es el valor establecido':$num3.' Esta fuera de rango');
echo '<hr />';
echo "$fecha";
echo '<br/ >';
//////////////////////////////////////////////////

$numeros = [1,3,123,45,100];
print_r ( $numeros);

$nombres = array('DARIEL', 'DARITS', 'SANDY','DANIEL');
echo $nombres[0];
?> 


  </body> 
</html> 