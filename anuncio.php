<?php 
    $id = $_GET["id"];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header("Location: /");
    }

    require "includes/config/database.php";
    $db = conectar_db();
    $query = "SELECT * FROM propiedades WHERE id = ${id}";
    $resultado = mysqli_query($db, $query);
    if($resultado->num_rows === 0) {
        header("Location: /");
    }

    $propiedad = mysqli_fetch_assoc($resultado);

    require "./includes/funciones.php";
    incluir_template("header");
?>
        <main class="contenedor seccion propiedad">
            <h1><?php echo $propiedad["titulo"]?></h1>
            <img loading="lazy"  width="200" height="300" src="imagenes/<?php echo $propiedad["imagen"];?>" alt="imagen de anuncio">
            <div class="resumen-propiedad">
                <p class="precio no-seleccionar"><?php echo "$" . $propiedad["precio"];?></p>
                <ul class="caracteristicas-iconos caracteristicas-iconos-propiedad no-seleccionar">
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
                        <p><?php echo $propiedad["habitaciones"];?></p>
                    </li>
                </ul>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae, eligendi quisquam aliquam et animi aut maiores odio accusantium cumque, aliquid ab a quas magnam inventore ipsum. Ab distinctio modi reiciendis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, reprehenderit in aliquam porro consectetur, sed facilis ea nobis ex quos aperiam rem? Debitis id illum temporibus iure ratione deleniti enim! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est quo tempora temporibus dolore commodi sed quaerat dignissimos optio sint fuga eveniet in adipisci libero mollitia ex necessitatibus, ab, ducimus neque.</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos inventore quisquam quam laborum soluta blanditiis. Recusandae incidunt quae hic perferendis corrupti quasi reprehenderit, corporis nisi tempore nam saepe earum sint! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus quas blanditiis harum alias voluptate corrupti modi laudantium sequi recusandae quo. Aut, aliquid? Molestiae qui eveniet ab quibusdam voluptatem voluptatum rerum?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates eum maiores sit tempora voluptatibus dolor sint aliquid nam amet dolorum, suscipit repudiandae atque.</p>
            </div><!--.anuncio-contenido-->
        </main>
        
<?php
    incluir_template("footer");
?>