<?php 
    require "./includes/funciones.php";
    $inicio = true;
    incluir_template("header", $inicio);
?>

        <main class="contenedor seccion">
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
        </main> <!--.seccion sobre nosotros-->

        <section class="contenedor seccion">
            <h2>Casas y Departamentos en Venta</h2>
            <?php
                $limite = 3;
                include "includes/templates/anuncios.php";
                // incluir_template("anuncios");
            ?>
            <div class="alinear-derecha">
                <a href="anuncios.php" class="boton-verde">Ver Todas</a>
            </div>
        </section> <!--.seccion casas y departamentos en venta-->

        <section class="imagen-contacto">
            <h2>Encuentra la casa de tus sueños</h2>
            <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad.</p>
            <a href="contacto.php" class="boton-amarillo">Contáctanos</a>
        </section>

        <div class="contenedor seccion seccion-inferior">
            <section class="blog">
                <h3>Nuestro Blog</h3>
                <article class="entrada-blog">
                    <div class="imagen">
                        <picture>
                            <source srcset="build/img/blog1.avif" type="image/avif">
                            <source srcset="build/img/blog1.webp" type="image/webp">
                            <img loading="lazy"  width="200" height="300" src="build/img/blog1.jpg" alt="imagen de la entrada de blog">
                        </picture>
                    </div><!--.imagen-->
                    <div class="entrada-texto">
                        <a href="entrada.php">
                            <h4>Terraza en el techo de tu casa.</h4>
                            <p>Escrito el: <span>20/04/2023</span> por: <span>Admin</span></p>
                            <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero.</p>
                        </a>
                    </div><!--.entrada-texto-->
                </article><!--.entrada-blog-->
                <article class="entrada-blog">
                    <div class="imagen">
                        <picture>
                            <source srcset="build/img/blog2.avif" type="image/avif">
                            <source srcset="build/img/blog2.webp" type="image/webp">
                            <img loading="lazy"  width="200" height="300" src="build/img/blog2.jpg" alt="imagen de la entrada de blog">
                        </picture>
                    </div><!--.imagen-->
                    <div class="entrada-texto">
                        <a href="entrada.php">
                            <h4>Guía para la decoración de tu hogar.</h4>
                            <p>Escrito el: <span>20/04/2023</span> por: <span>Admin</span></p>
                            <p>Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio.</p>
                        </a>
                    </div><!--.entrada-texto-->
                </article><!--.entrada-blog-->
            </section><!--.blog-->

            <section class="testimoniales">
                <h3>Testimoniales</h3>

                <div class="testimonial">
                    <blockquote>
                        El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.
                    </blockquote>
                    <p>- Víctor Flores Juárez</p>
                </div>
            </section> <!--.testimoniales-->
        </div><!--.seccion zona del blog y testimoniales-->
<?php
    incluir_template("footer");
?>