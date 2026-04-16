 <!DOCTYPE html> 
<html lang="en">
<head>
 <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Proyecto Dariel</title>
 <link rel="stylesheet" href="./style.css">
 <script src="main.js"></script>
 </head>
<body>

<?php 

$cadena1 = "Hola mi nombre es Dariel Diaz y vivo en Barquisimeto";
$cadena2 = "Azul,Gris,Verde,Amarillo,Rojo,Vinotinto";
 $c1 = "";
 $c2 = "";

 $c1 = explode(" ", $cadena1);
 foreach($c1 as $nombreSeparado){
    echo $nombreSeparado , "<br/>";
 } 
echo "<br/>";
print_r($c1);

echo "<br/>"; echo "<br/>";


$c2 = explode(",", $cadena2);
foreach($c2 as $colores){
    echo $colores , "<br/>";
}

echo "<br/>";
print_r($c2);
echo "<br/>"; echo "<br/>";
$c1 = implode(" ", $c1);
echo $c1; 

echo "<br/>";
$c2 = implode(", ", $c2);
echo $c2; 
?>

 </body>
</html>