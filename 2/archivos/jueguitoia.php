<?php
session_start(); // Iniciamos la sesión para recordar el número secreto

// 1. Configuración inicial: Si no hay número secreto, creamos uno
if (!isset($_SESSION['numero_secreto'])) {
    $_SESSION['numero_secreto'] = rand(1, 100);
    $_SESSION['intentos'] = 0;
}

$mensaje = "";

// 2. Lógica del juego: Cuando el usuario envía un número
if (isset($_POST['adivinanza'])) {
    $user_num = (int)$_POST['adivinanza'];
    $_SESSION['intentos']++;

    if ($user_num < $_SESSION['numero_secreto']) {
        $mensaje = "¡Más alto! ⬆️";
    } elseif ($user_num > $_SESSION['numero_secreto']) {
        $mensaje = "¡Más bajo! ⬇️";
    } else {
        $mensaje = "¡FELICIDADES! 🎉 Adivinaste en " . $_SESSION['intentos'] . " intentos.";
        // Reiniciamos el juego borrando la sesión
        session_destroy();
    }
}

// 3. Reiniciar el juego manualmente
if (isset($_POST['reiniciar'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Juego PHP: Adivina el Número</title>
    <style>
        body { font-family: sans-serif; text-align: center; padding-top: 50px; background: #f4f4f4; }
        .card { background: white; padding: 20px; border-radius: 10px; display: inline-block; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        input { padding: 10px; width: 50px; }
        button { padding: 10px 20px; cursor: pointer; }
    </style>
</head>
<body>

    <div class="card">
        <h1>Adivina el número (1-100)</h1>
        <p><?php echo $mensaje; ?></p>

        <?php if (!str_contains($mensaje, 'FELICIDADES')): ?>
            <form method="post">
                <input type="number" name="adivinanza" required min="1" max="100">
                <button type="submit">Probar</button>
            </form>
        <?php else: ?>
            <form method="post">
                <button type="submit" name="reiniciar">Jugar de nuevo</button>
            </form>
        <?php endif; ?>
    </div>

</body>
</html>