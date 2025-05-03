<?php
// Inicia el echo para el formulario

echo '
<form method="POST" role="form" class="row g-3 justify-content-center" action="t4p2.php">

    <div class="col-md-4">
        <label for="validationDefaultName" class="form-label">Sueldo bruto</label>
        <div class="input-group">
            <span class="input-group-text" id="inputGroupPrepend2">$</span>
            <input type="text" class="form-control" id="validationDefaultName" aria-describedby="inputGroupPrepend2" required name="sueldobr">
        </div>
    </div>

    <div class="col-md-4">
        <label for="validationDefaultName" class="form-label">Ingreso por horas extras</label>
        <div class="input-group">
            <span class="input-group-text" id="inputGroupPrepend2">$</span>
            <input type="text" class="form-control" id="validationDefaultName" aria-describedby="inputGroupPrepend2" required name="pagoxhoras">
        </div>
    </div>

    <div id="boton" class="col-12">
        <button class="btn btn-primary" type="submit" name="boton">Calcular Salario</button>
        <button type="reset" class="btn btn-secondary btn-limpiar">Limpiar casillas</button>
    </div>

</form>';

// Finaliza el echo para el formulario
?>

