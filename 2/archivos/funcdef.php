 <!DOCTYPE html> 
<html lang="en">
<head>
 <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>nose</title>
 <link rel="stylesheet" href="./style.css">
 <script src="main.js"></script>
 </head>
<body>

<?php 
$prueba1 = 'Hola';
$prueba2 = 12;
$prueba3 = [1,4,9,10];
$prueba4 = array(1,2,3,array('Dariel', 'Daniel', 'Darits'), array('a', 'b', 'c'));

if (isset ($prueba1) ) {
    var_dump($prueba1);
}
echo "<hr/>";
if (isset ($prueba2) ) {
    var_dump($prueba2);
}
echo "<hr/>";
if (isset ($prueba3) ) {
    var_dump($prueba4);
}
echo "<hr/>";
if (isset ($prueba4) ) {
    var_dump($prueba4);
}
?>
<h1 style='color : red;'>ARRAYS</h1>
<p>Funciones predeterminadas para manejar arrays.</p>

<?php  
echo '<hr>';
$esArray = [1,22,323,45435344,345345345345,3454353454353, 'HOLA'];
$noEsArray = 'hola';

if (is_array($noEsArray)){
    echo 'Si es un array (:';
} else {
    echo 'No es un array';
}
echo '<hr>';
echo count($esArray);
echo '<hr>';
if (in_array($loQueBuscamos = 22, $esArray)){
    $tipo = match (true) {
    is_int($loQueBuscamos)    => "es un entero (int)",
    is_float($loQueBuscamos)  => "es un flotante (float)",
    is_string($loQueBuscamos) => "es una cadena (string)",
    default           => "Es otro tipo de dato",
};  
    echo "el valor dentro del array es $loQueBuscamos y $tipo";
} else {
    echo "No tiene nada que ver con el Array";
}
echo '<hr>';
$fruta = 'manzana';
if($fruta == 'manzana'){
    echo "Tu fruta es una <span style = 'color: red;'>manzana🍎</span>";
}
echo '<hr>';
$fruta = 'NaRANja';
if (isset($fruta)){
    $frutaNormalizada = ucfirst(strtolower($fruta));
    //Para que tome la fruta asi no este con las mayusculass o minusculas 
    $tipos = match ($frutaNormalizada) {
    'Manzana'     =>  "Tu fruta es una <span style = 'color: red'>Manzana 🍎</span>",
    'Naranja'     => "Tu fruta es una <span style = 'color: orange'>Naranja 🍊</span>",
    'Cambur'     => "Tu fruta es una <span style = 'color: yellow'>Cambur 🍌</span>",
    'Uva'     => "Tu fruta es una <span style = 'color: purple'>Uva 🍇</span>",
    'Fresa'     => "Tu fruta es una <span style = 'color: red'>Fresa 🍓</span>",
    default => 'Tu fruta no esta en nuestras listas, disculpe.'
    };
    echo $tipos;
}
?>

 </body>
</html>