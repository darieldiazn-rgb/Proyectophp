<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Calculadora Básica</h2>
    <form method="post">
        <input type="number" name="num1" step="any" placeholder="Número 1" required>
        
        <select name="operacion">
            <option value="sumar">+</option>
            <option value="restar">-</option>
            <option value="multiplicar">*</option>
            <option value="dividir">/</option>
        </select>
        
        <input type="number" name="num2" step="any" placeholder="Número 2" required>
        <button type="submit" name="calcular">Calcular</button>
    </form>

    <?php
    if (isset($_POST['calcular'])) {
        $n1 = $_POST['num1'];
        $n2 = $_POST['num2'];
        $op = $_POST['operacion'];
        $resultado = 0;

        switch ($op) {
            case "sumar":
                $resultado = $n1 + $n2;
                break;
            case "restar":
                $resultado = $n1 - $n2;
                break;
            case "multiplicar":
                $resultado = $n1 * $n2;
                break;
            case "dividir":
                if ($n2 != 0) {
                    $resultado = $n1 / $n2;
                } else {
                    $resultado = "Error: División por cero";
                }
                break;
        }

        echo "<h3>Resultado: $resultado</h3>";
    }
    ?>
</body>
</html>