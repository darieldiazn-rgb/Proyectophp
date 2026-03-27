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



?>



 </body>
</html>