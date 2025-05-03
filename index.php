<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller 4_Programando en PHP</title>
    
    <!--boostrap css-->

    <link rel="stylesheet" href="./css/boostrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <div><!--Inicia contenedor principal-->
        <?php include("menu.html") ?>
        <main class="mt-5"> <!--etiqueta para utilizar un archivo de estilos y aplicarlos a todos los elementos de la clase-->
            
            <di?v class="row"><!--Inicia row-->
                
                <div class="col-md-12 g-12 h-100"> <!--inicia columna de 12-->
                    
                    <div class="card-header"><!--inicio div para card-->
                        <h1 class="card-header">Elementos Básicos de la programación en PHP_Salida de datos</h1>
                    </div><!--fin div para card-->
                    <div><!--Inicio div para insertar formularios y código PHP-->

                        <!--incrustar form1.php-->
                        <?php include("./Componentes/index/form1.php") ?>

                    </div><!--fin div formularios-->
                </div><!--finaliza columna de 12-->
                    
                
            </div><!--fin row-->
            
        </main>
    </div><!--finaliza contenedor principal-->
    <?php include("./Componentes/footer.html") ?>

</body>
</html>