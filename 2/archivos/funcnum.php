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
<h1>Funciones con numeros</h1>
<?php 

$num1 = 90;
echo $num2   = decbin($num1);
echo "<br>";
echo  bindec($num2);
echo "<br>";
echo $num3 = dechex($num1);
echo "<br>";
echo hexdec($num3);
echo "<br>";
echo $num4 = decoct($num1);
echo "<br>";
echo octdec($num4);
echo "<hr/>";   
echo pi();
echo "<hr/>";
echo pow(2,3);
echo "<hr/>";
echo rand();
echo "<br/>";
echo rand(1,100);
echo "<hr/>";

$num0 = -12.7;
$num1 = 2.4;
$num2 = 1.9;

// CEIL FLOOR ABS
echo abs($num0);
echo "<hr/>";
?>
<h2>redondeo</h2>
<?php 
echo "Al numero mas alto", "<br/>";
echo ceil($num1), "<br/>";
echo ceil($num2);
echo "<br/>";
echo "<br/>Al numero mas bajo<hr/>";
echo floor($num1), "<br/>";
echo floor($num2);

?> 
</body>
</html>