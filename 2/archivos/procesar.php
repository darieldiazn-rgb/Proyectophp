
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
function resultadoAmigo(){
$nombre = $_POST['usuario'] ?? null; 

$valorRecibido = $nombre;
$valor = ucfirst(strtolower($valorRecibido));

if(isset($valor)) {
    $queEs = match ($valor) {
    'Dariel'        => 'Dariel es central',
    'Nay'           => 'Nay no sabe que es', 
    'Daniel'        => 'Daniel es punta',
    'Josue'         => 'Josue es libero atacante por la 2',
    'Leo'           => "Po'encima",
    default => 'Ese nombre no esta en mi lista de amigos'
};
 echo $queEs;
}
}
?>

 </body>
</html>