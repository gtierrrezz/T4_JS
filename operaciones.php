<?php
if (is_numeric($num1) && is_numeric($num2)) {
    if ($op == 1) {
        if ($num1 == null || $num2 == null) {
            echo '<div class="alert alert-warning" role="alert">FALTA UN VALOR POR INGRESAR</div>';
        } else {
            $resultado = $num1 + $num2;
            echo "<br>";
            echo '<div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Resultado</h5>
                        <p class="card-text">El resultado es: ' . $resultado . '</p>
                    </div>
                </div>';
        }
    }
    if ($op == 2) {
        $resultado = $num1 - $num2;
        echo "<br>";
        echo '<div class="card">
                <div class="card-body">
                    <h5 class="card-title">Resultado</h5>
                    <p class="card-text">El resultado es: ' . $resultado . '</p>
                </div>
            </div>';
    }
    if ($op == 3) {
        $resultado = $num1 * $num2;
        echo "<br>";
        echo '<div class="card">
                <div class="card-body">
                    <h5 class="card-title">Resultado</h5>
                    <p class="card-text">El resultado es: ' . $resultado . '</p>
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
                        <p class="card-text">El resultado es: ' . $resultado . '</p>
                    </div>
                </div>';
        }
    }

    // Comenzando a evaluar las operaciones
        if ($op == 5) {
            $resultado = pow($num1, $num2);
            echo "<br>";
            echo '<div class="card">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">Resultado</h5>';
            echo '<p class="card-text">El resultado es: ' . $resultado . '</p>';
            echo '</div>';
            echo '</div>';
        }
        if ($op == 6) {
            if ($num1 >= 0 && $num2 > 0) {
                $resultado = number_format(sqrt($num1), 4);
                $resultado2 = number_format(sqrt($num2), 4);
                echo "<br>";
                echo '<div class="card">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">Resultado 1</h5>';
                echo '<p class="card-text">La raíz del primer valor es: ' . $resultado . '</p>';
                echo '</div>';
                echo '<br><br>';
                echo '<div class="card">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">Resultado 2</h5>';
                echo '<p class="card-text">La raíz del segundo valor es: ' . $resultado2 . '</p>';
                echo '</div>';
                echo '</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error, ingrese números mayores o iguales a cero</div>';
            }
        }
    } else {
        echo '<div class="alert alert-warning" role="alert">Falta un valor por ingresar o ingresó letras!!!</div>';
    }

    // Cierra el principal de verificación de casillas completas

}
?>