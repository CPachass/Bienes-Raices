<?php
    require  __DIR__ . "/../config/database.php";
    $db = conectar_db();

    $query = "SELECT * FROM propiedades LIMIT ${limite}";
    $resultado = mysqli_query($db, $query);
?>
<div class="anuncios">
    <?php while($propiedad = mysqli_fetch_assoc($resultado)) : ?>
    <div class="anuncio">
        <img loading="lazy" width="200" height="300" src="/imagenes/<?php echo $propiedad["imagen"]; ?>" alt="imagen de anuncio">
        <div class="anuncio-contenido">
            <h3 class="no-seleccionar"><?php echo $propiedad["titulo"];?></h3>
            <p class="no-seleccionar"><?php echo $propiedad["descripcion"];?></p>
            <p class="precio no-seleccionar"><?php echo "$" . $propiedad["precio"];?></p>
            <ul class="caracteristicas-iconos no-seleccionar">
                <li>
                    <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p><?php echo $propiedad["wc"];?></p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p><?php echo $propiedad["estacionamiento"];?></p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                    <p><?php echo $propiedad["habitaciones"]?></p>
                </li>
            </ul>
            <a href="anuncio.php?id=<?php echo $propiedad["id"];?>" class="boton-amarillo-block">Ver propiedad</a>
        </div><!--.anuncio-contenido-->
    </div><!--.anuncio-->
    <?php endwhile; ?>
</div> <!--.anuncios-->

<?php
    mysqli_close($db);
?>