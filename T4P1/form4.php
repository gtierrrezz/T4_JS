<!DOCTYPE html>
<html>
<head>
    <title>Programa 4 - Trigonometría</title>
</head>
<body>

<?php include("../base/menu.php"); ?>

    <h2>Cálculo trigonométrico de un ángulo</h2>
    <form method="post">
        <label for="angulo">Ingrese un ángulo en grados:</label>
        <input type="number" name="angulo" step="any" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $grados = $_POST["angulo"];
        $radianes = deg2rad($grados);

        $seno = sin($radianes);
        $coseno = cos($radianes);
        $tangente = tan($radianes);

        // Determinar el cuadrante o eje
        $modulo = fmod($grados, 360);
        if ($modulo < 0) {
            $modulo += 360; // Asegurar ángulo positivo
        }

        if ($modulo == 0 || $modulo == 180 || $modulo == 360) {
            $ubicacion = "Eje X";
        } elseif ($modulo == 90 || $modulo == 270) {
            $ubicacion = "Eje Y";
        } elseif ($modulo > 0 && $modulo < 90) {
            $ubicacion = "Primer cuadrante";
        } elseif ($modulo > 90 && $modulo < 180) {
            $ubicacion = "Segundo cuadrante";
        } elseif ($modulo > 180 && $modulo < 270) {
            $ubicacion = "Tercer cuadrante";
        } else {
            $ubicacion = "Cuarto cuadrante";
        }

        echo "<h3>Resultados:</h3>";
        echo "Ángulo ingresado: $grados&nbsp;&deg;<br>";
        echo "Seno: " . round($seno, 4) . "<br>";
        echo "Coseno: " . round($coseno, 4) . "<br>";
        echo "Tangente: " . (abs($coseno) < 1e-10 ? "Indefinida" : round($tangente, 4)) . "<br>";
        echo "Ubicación: $ubicacion<br>";
    }
    ?>

    <?php include("footer.php"); ?>

</body>
</html>
