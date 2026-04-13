 <!DOCTYPE html> 
<html lang="en">
<head>
 <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>traer funciones</title>
 <link rel="stylesheet" href="./style.css">
 <script src="main.js"></script>
 </head>
<body>

<?php 

require('./archivos/funciones2.php');


echo suma(1,2);
echo "<hr/>"; 
$numeros = [10,20,30];
echo sumaArrays(...$numeros);
echo "<hr/>";
echo concatenar('Dariel', 'Diaz');
echo "<hr/>";
echo multi(2, 5);
echo "<hr/>";
////////////////////////
echo hacer('multi', '1', '9.2');
//////////////////////////
# multi
# div
# potencia
# suma
# resta

echo "<hr/>";

echo sumaDoble(20, 50 , 80, 80);

echo "<hr/>";

echo "producto( ) => ", producto(), "<br/>";
echo "producto(**) => ", producto(9), "<br/>";

mostrarNumeros(1,3);

echo "<hr/>";
echo showArray(3, 1, 10,93,900);
echo "<hr/>";


/////////////////////////////////////////////////
#Funciones Predefinidas Variables 

    define("NOMBRE", "Darieel");
    $check = defined('NOMBRE');
    if ($check){
        echo "Tu nombre es ", NOMBRE;
    } else {
        echo "No tienes nombre";
    }
    echo "<hr/>";

    define("MI_NOMBRE",  "Dz");
    $estaVacia = empty(constant('MI_NOMBRE'));
    $estaDefinida = defined('MI_NOMBRE');

    switch('MI_NOMBRE'){

    case ($estaDefinida && $estaVacia) :
        echo "No se ha configurado un nombre";
        break;

    case ($estaDefinida) : 
        echo "Tu Nombre es ", MI_NOMBRE;
        break;

        default : 
        echo 'Debes cargar tu nombre';

    }
?>



 </body>
</html>