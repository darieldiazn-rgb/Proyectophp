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
<h1>Piedra papel o tijeras</h1>
<?php 
session_start();
if(!isset($_SESSION['vecesGanadas'])){
    $_SESSION['vecesGanadas'] = 0;
}
if(!isset($_SESSION['vecesPerdidas'])){
    $_SESSION['vecesPerdidas'] = 0;
}


if (isset($_POST['eleccion'])) {
    $opcionUsuario = $_POST['eleccion'];
$opciones = ['Piedra','Papel','Tijeras'];
$respuesta = $opciones[array_rand($opciones)];

if($opcionUsuario == $respuesta){
    echo 'Empate los dos han seleccionado ', $respuesta;
} elseif (
    ($opcionUsuario == 'Piedra' && $respuesta == 'Tijeras') ||
    ($opcionUsuario == 'Papel' && $respuesta == 'Piedra') ||
    ($opcionUsuario == 'Tijeras' && $respuesta == 'Papel')
) {
    echo "Has ganado, la maquina selecciono $respuesta";
    $_SESSION['vecesGanadas']++; 
    
} else {
    echo "Has perdidio, la maquina selecciono $respuesta";
    $_SESSION['vecesPerdidas']++;
}
}
echo "<br/> Veces Ganadas: ". $_SESSION['vecesGanadas'] . "  <br/> Veces Perdidas: " . $_SESSION['vecesPerdidas'];
?>

<div class="juego">

    <form method="post">
        <button type="submit" name="eleccion" value="Piedra">Piedra</button>
        <button type="submit" name="eleccion" value="Papel">Papel</button>
        <button type="submit" name="eleccion" value="Tijera">Tijera</button>
    </form>
</div>
 </body>
</html>