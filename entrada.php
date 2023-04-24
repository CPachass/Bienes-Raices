<?php 
    require "./includes/funciones.php";
    incluir_template("header");
?>

        <main class="contenedor seccion contenido-centrado">
            <h1>Consejos para tener una alberca en tu casa sin gastar demasiado</h1>
            <picture>
                <source srcset="build/img/destacada2.avif" type="image/avif">
                <source srcset="build/img/destacada2.webp" type="image/webp">
                <img loading="lazy"  width="200" height="300" src="build/img/destacada2.jpg" alt="">
            </picture>
            <div class="entrada-texto seccion">
                <p>Escrito el: <span>20/04/2023</span> por: <span>Admin</span></p>
                <p class="texto-justificado">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut officiis, voluptate nulla recusandae ducimus quisquam dolores voluptatum vel soluta est quod optio reiciendis consectetur illum dicta quis amet non? Maiores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum tempora quos numquam reprehenderit itaque quasi, veniam omnis! Sequi aperiam consequuntur aspernatur, debitis autem perferendis harum, hic iure dolores placeat ratione?</p>
                <p class="texto-justificado">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut officiis, voluptate nulla recusandae ducimus quisquam dolores voluptatum vel soluta est quod optio reiciendis consectetur illum dicta quis amet non? Maiores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum tempora quos numquam reprehenderit itaque quasi, veniam omnis! Sequi aperiam consequuntur aspernatur, debitis autem perferendis harum, hic iure dolores placeat ratione?</p>
            </div><!--.entrada-texto-->
        </main>

<?php
    incluir_template("footer");
?>