<?php 
    require "./includes/funciones.php";
    incluir_template("header");
?>
        <main class="contenedor seccion">
            <h1>Anuncios</h1>
            <?php 
                $limite = 20;
                include "includes/templates/anuncios.php";
            ?>
        </main>

<?php
    incluir_template("footer");
?>