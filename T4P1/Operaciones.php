<?php
if (is_numeric($num1) && is_numeric($num2)) {
    if ($num1 == null || $num2 == null) {
        echo '<div class="alert alert-warning" role="alert">FALTA UN VALOR POR INGRESAR</div>';
    } else {
        if ($op == 1) {
            $resultado = $num1 + $num2;
            echo "<br>";
            echo '<div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Resultado</h5>
                        <p class="card-text">El resultado es : ' . $resultado . '</p>
                    </div>
                  </div>';
        }

        if ($op == 2) {
            $resultado = $num1 - $num2;
            echo "<br>";
            echo '<div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Resultado</h5>
                        <p class="card-text">El resultado es : ' . $resultado . '</p>
                    </div>
                  </div>';
        }

        if ($op == 3) {
            $resultado = $num1 * $num2;
            echo "<br>";
            echo '<div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Resultado</h5>
                        <p class="card-text">El resultado es : ' . $resultado . '</p>
                    </div>
                  </div>';
        }

        if ($op == 4) {
            if ($num2 == 0) {
                echo '<div class="alert alert-danger" role="alert">Error, imposible dividir entre cero!!!!</div>';
            } else {
                $resultado = $num1 / $num2;
                echo "<br>";
                echo '<div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Resultado</h5>
                            <p class="card-text">El resultado es : ' . $resultado . '</p>
                        </div>
                      </div>';
            }
        }

        if ($op == 5) {
            $resultado = pow($num1, $num2);
            echo "<br>";
            echo '<div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Resultado</h5>
                        <p class="card-text">El resultado es : ' . $resultado . '</p>
                    </div>
                  </div>';
        }

        if ($op == 6) {
            if ($num1 >= 0 && $num2 >= 0) {
                $resultado = number_format(sqrt($num1), 4);
                $resultado2 = number_format(sqrt($num2), 4);
                echo "<br>";
                echo '<div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Resultado 1</h5>
                            <p class="card-text">La raíz del primer valor es: ' . $resultado . '</p>
                        </div>
                      </div>';
                echo "<br>";
                echo '<div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Resultado 2</h5>
                            <p class="card-text">La raíz del segundo valor es: ' . $resultado2 . '</p>
                        </div>
                      </div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error, ingrese números mayores o iguales a cero</div>';
            }
        }
    }
} else {
    if (isset($_POST["num1"]) && isset($_POST["num2"])) {
        echo '<div class="alert alert-warning" role="alert">Falta un valor por ingresar o ingresó letras!!!</div>';
    }
}
// Cierra el if principal de verificación de casillas completas
?>
<!-- Termina código PHP -->