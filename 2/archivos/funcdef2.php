 <!DOCTYPE html> 
<html lang="en">
<head>
 <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Manejo Arrays</title>
 <link rel="stylesheet" href="./style.css">
  <link rel="shortcut icon" href="../image/favicon.png" type="image/png">
 <script src="main.js"></script>
 </head>
<body>

<?php 
$array1 = [1,2,3,4,5,6,7,8];
$array2 = [980,2,1,3,65,4,0, 100];

echo array_search(100, $array2);

echo "<hr/>";

sort($array2);
foreach($array2 as $valoresOrdenados){
    echo $valoresOrdenados, '<br/>';
}
echo "<hr/>";

rsort($array2);
foreach($array2 as $valoresOrdenados){
    echo $valoresOrdenados, '<br/>';
}

echo "<hr/>";
echo array_sum($array2);

echo "<hr/>";

echo max($array2);
echo "<hr/>";
echo min($array2);
echo "<hr/>";
///////////////////////////////////
array_push($array1, 'undostres',123, 'tqm');
print_r ($array1);
echo "<hr/>";
///////////////////////////////////
array_unshift($array1, 'tresdosuno',321, 'hola');
print_r ($array1);
?>

 </body>
</html>