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

<h1>Descubre que posicion juega mi amigo</h1>
<form action="" method="POST">
    <label>Nombre:</label>
   <input type="text" name="usuario" placeholder="Escribe un nombre...">
        <button type="submit" name="enviar">Enviar</button>
</form>
<?php 
require('./procesar.php');

if(isset($_POST['enviar'])){
    echo resultadoAmigo();
}
?>




<br/><br/><br/><br/><br/><br/><br/><br/>





<h1>Que fruta tengo?</h1>
<form action= "" method="POST">
    <label>Escribe tu fruta</label>
    <input type="text" name="ffruta">
    <button type="submit" name="frutaEnv">Buscar</button>    
</form>
<?php 
require('./procesar2.php');
if(isset($_POST['frutaEnv'])){
    echo resultadoFruta();
}
?>
 </body>
</html>