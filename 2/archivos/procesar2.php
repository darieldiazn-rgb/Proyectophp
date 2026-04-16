
 <!DOCTYPE html> 
<html lang="en">
<head>
 <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resultado!!</title>
 <link rel="stylesheet" href="./style.css">
 <script src="main.js"></script>
 </head>
<body>

<?php 
function resultadoFruta(){
$fruta = $_POST['ffruta']; 
$frutaRecibida = $fruta;
if (isset($fruta)){
    $frutaNormalizada = ucfirst(strtolower($frutaRecibida));

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
}
?>

 </body>
</html>