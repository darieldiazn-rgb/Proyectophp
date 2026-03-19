<?php
// Lógica de procesamiento
$display = "0";
if (isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['op'])) {
    $n1 = (float)$_POST['n1'];
    $n2 = (float)$_POST['n2'];
    $op = $_POST['op'];

    switch ($op) {
        case '+': $display = $n1 + $n2; break;
        case '-': $display = $n1 - $n2; break;
        case '*': $display = $n1 * $n2; break;
        case '/': $display = ($n2 != 0) ? $n1 / $n2 : "Error"; break;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; padding-top: 50px; background: #f4f4f9; }
        
        /* Contenedor Cuadrado */
        .calculadora {
            width: 300px;
            background: #333;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
        }

        .pantalla {
            background: #a1b56c;
            color: #222;
            font-family: 'Courier New', monospace;
            text-align: right;
            padding: 15px;
            font-size: 1.5rem;
            margin-bottom: 20px;
            border-radius: 5px;
            min-height: 30px;
        }

        /* Rejilla de botones */
        .grid-botones {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }

        input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: none;
            box-sizing: border-box;
        }

        button {
            grid-column: span 4; /* El botón de igual ocupa toda la fila */
            padding: 15px;
            background: #ff9500;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
            cursor: pointer;
        }

        button:hover { background: #e08400; }
    </style>
</head>
<body>

<div class="calculadora">
    <div class="pantalla"><?php echo $display; ?></div>
    
    <form method="post">
        <input type="number" name="n1" step="any" placeholder="Primer número" required>
        
        <div style="display: flex; gap: 10px; margin-bottom: 10px;">
            <select name="op" required>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">×</option>
                <option value="/">÷</option>
            </select>
        </div>

        <input type="number" name="n2" step="any" placeholder="Segundo número" required>
        
        <div class="grid-botones">
            <button type="submit">CALCULAR</button>
        </div>
    </form>
</div>

</body>
</html>