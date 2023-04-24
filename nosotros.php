<?php 
    require "./includes/funciones.php";
    incluir_template("header");
?>
        <main class="contenedor seccion">
            <h1>Conoce sobre nosotros</h1>
            <div class="nosotros">
                <div class="nosotros-imagen">
                    <picture>
                        <source srcset="build/img/nosotros.avif" type="image/avif">
                        <source srcset="build/img/nosotros.webp" type="image/webp">
                        <img loading="lazy"  width="200" height="300" src="build/img/nosotros.jpg" alt="imagen alterna nosotros">
                    </picture>
                </div><!--.nosotros-imgaen-->
                <div class="nosotros-texto">
                    <h4>25 Años de Experiencia</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam cumque tempore rerum dolore quae architecto.</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam cumque tempore rerum dolore quaein quisquam commodi eum, esse quam itaque.</p>
                </div>
            </div>
        </main>

        <section class="contenedor seccion">
            <h1>Más sobre nosotros</h1>
            <section class="iconos-nosotros">
                <div class="icono">
                    <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                    <h3>Seguridad</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laboriosam ex ullam voluptas in, soluta aliquam quod ab distinctio harum perspiciatis sequi doloribus amet recusandae velit itaque repellendus aspernatur modi.</p>
                </div>
                <div class="icono">
                    <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                    <h3>Precio</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laboriosam ex ullam voluptas in, soluta aliquam quod ab distinctio harum perspiciatis sequi doloribus amet recusandae velit itaque repellendus aspernatur modi.</p>
                </div>
                <div class="icono">
                    <img src="build/img/icono3.svg" alt="Icono a tiempo" loading="lazy">
                    <h3>A tiempo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laboriosam ex ullam voluptas in, soluta aliquam quod ab distinctio harum perspiciatis sequi doloribus amet recusandae velit itaque repellendus aspernatur modi.</p>
                </div>
            </section><!--.iconos-nosotros-->
        </section> <!--.seccion sobre nosotros-->

<?php
        incluir_template("footer");
?>