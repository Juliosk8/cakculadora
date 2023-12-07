<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora php</title>
</head>
<body>
    <h2>Calculadora PHP</h2>
    <form method="post" action="">
        <input type="number" name="num1" placeholder="Ingrese el primer número" step="any" required><br><br>
        <input type="number" name="num2" placeholder="Ingrese el segundo número" step="any" required><br><br>
        <select name="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select><br><br>
        <input type="submit" name="calcular" value="Calcular">
    </form>
    </body>
           </html>

    <?php
    if (isset($_POST['calcular'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];
        $resultado = 0;

        switch ($operacion) {
            case 'suma':
                $resultado = $num1 + $num2;
                break;
            case 'resta':
                $resultado = $num1 - $num2;
                break;
            case 'multiplicacion':
                $resultado = $num1 * $num2;
                break;
            case 'division':
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    echo "No se puede dividir por cero.";
                    break;
                }
        }

        echo  "<h3>Resultado:</h3>";
        echo $resultado;
    }
    ?> 