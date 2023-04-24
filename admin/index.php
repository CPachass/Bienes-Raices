<?php 
    require "../includes/funciones.php";
    incluir_template("header");
?>

        <main class="contenedor seccion">
            <h1>Administrador de bienes raices</h1>
            <ul>
                <li class="seccion">
                    <a href="propiedades/crear.php" class="boton-verde">Nueva propiedad</a>
                </li>
                <li class="seccion">
                    <a href="propiedades/actualizar.php" class="boton-verde">Editar propiedad</a>
                </li>
                <li class="seccion">
                    <a href="propiedades/borrar.php" class="boton-verde">Eliminar propiedad</a>
                </li>
            </ul>
        </main>

<?php
    incluir_template("footer");
?>