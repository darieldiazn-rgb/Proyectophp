<?php
$opciones = ['Piedra', 'Papel', 'Tijera'];
$resultado = "";

if (isset($_POST['eleccion'])) {
    $usuario = $_POST['eleccion'];
    $maquina = $opciones[array_rand($opciones)]; // La máquina elige aleatoriamente

    if ($usuario === $maquina) {
        $resultado = "Empate: ambos eligieron $usuario.";
    } elseif (
        ($usuario == 'Piedra' && $maquina == 'Tijera') ||
        ($usuario == 'Papel' && $maquina == 'Piedra') ||
        ($usuario == 'Tijera' && $maquina == 'Papel')
    ) {
        $resultado = "¡Ganaste! Tú elegiste $usuario y la máquina $maquina.";
    } else {
        $resultado = "Perdiste. Tú elegiste $usuario y la máquina $maquina.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Piedra, Papel o Tijera</title>
    <style>
        body { font-family: 'Arial', sans-serif; text-align: center; margin-top: 50px; }
        .juego { border: 2px solid #333; padding: 20px; display: inline-block; border-radius: 15px; }
        button { padding: 10px 20px; font-size: 16px; cursor: pointer; margin: 5px; }
    </style>
</head>
<body>

<div class="juego">
    <h1>Piedra, Papel o Tijera</h1>
    <form method="post">
        <button type="submit" name="eleccion" value="Piedra">Piedra</button>
        <button type="submit" name="eleccion" value="Papel">Papel</button>
        <button type="submit" name="eleccion" value="Tijera">Tijera</button>
    </form>
    
    <h2 style="color: blue;"><?php echo $resultado; ?></h2>
</div>

</body>
</html>