<?php
// Inicia código PHP
// Observe el uso de echo con "" y, además de la forma de comentar

// Variables que se captan en el formulario
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op = $_POST["operacion"];

// Variables de salida
$resultado = 0;
$resultado2 = 0;

// Inicia el echo para el formulario
echo '<!-----insertando formulario con ctrl shift p b3-form dentro PHP ----->';
echo '<form autocomplete="off" action="index.php" method="POST" role="form">
    <div class="form-group">
        <br><legend>Ingrese Valor 1</legend><br>
        <input type="text" name="num1" placeholder="Ingrese sólo números">
        
        <br><br><legend>Ingrese Valor 2</legend><br>
        <input type="text" name="num2" placeholder="Ingrese sólo números">
        <label for=""><strong>ELIJA LA OPERACIÓN</strong></label>
        
        <select name="operacion" id=""> <!--ctrl shift p, elegir SELECT (para insertar combobox)-->
            <option value="1">SUMA</option>
            <option value="2">RESTA</option>
            <option value="3">MULTIPLICACIÓN</option>
            <option value="4">DIVISIÓN</option>
            <option value="5">PORCENTAJE</option>
            <option value="6">RAÍZ CUADRADA DE VALOR 1 Y 2</option>
        </select>
        
        <button type="submit" class="btn btn-primary btn-calcula">Calcular</button><br><br>
        <button type="reset" class="btn btn-default btn-limpiar">Limpiar casillas</button><br><br>
        <button type="submit" class="btn btn-success btn-enviar">Enviar</button>
    </div>
</form>'; // Finaliza el echo para el formulario
?>