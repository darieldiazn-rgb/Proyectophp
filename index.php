<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Dariel</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="./image/favicon.png" type="image/png">
    <script src="main.js"></script>
  </head>
  <body>
    <?php 
$fecha = date("d-m-y");
$nombre = "Dariel";
echo "<h1>Hola Mundo desde PHP</h1>";
echo "<p>Soy <strong>".$nombre."</strong> y hoy es ".$fecha."</p>";
echo "<small>Este es un texto pequeño</small>";
?>
  </body>
</html>