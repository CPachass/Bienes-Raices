<?php 
    require "./includes/funciones.php";
    incluir_template("header");
?>

        <main class="contenedor seccion">
            <h1>Blog</h1>
            <section class="blog contenido-centrado">
                <article class="entrada-blog">
                    <div class="imagen">
                        <picture>
                            <source srcset="build/img/blog1.avif" type="image/avif">
                            <source srcset="build/img/blog1.webp" type="image/webp">
                            <img loading="lazy"  width="200" height="300" src="build/img/blog1.jpg" alt="imagen de la entrada de blog">
                        </picture>
                    </div><!--.imagen-->
                    <div class="entrada-texto">
                        <a href="entrada.html">
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
                        <a href="entrada.html">
                            <h4>Construye una alberca en tu hogar.</h4>
                            <p>Escrito el: <span>20/04/2023</span> por: <span>Admin</span></p>
                            <p>Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio.</p>
                        </a>
                    </div><!--.entrada-texto-->
                </article><!--.entrada-blog-->
                <article class="entrada-blog">
                    <div class="imagen">
                        <picture>
                            <source srcset="build/img/blog3.avif" type="image/avif">
                            <source srcset="build/img/blog3.webp" type="image/webp">
                            <img loading="lazy"  width="200" height="300" src="build/img/blog3.jpg" alt="imagen de la entrada de blog">
                        </picture>
                    </div><!--.imagen-->
                    <div class="entrada-texto">
                        <a href="entrada.html">
                            <h4>Guía para la decoración de tu hogar.</h4>
                            <p>Escrito el: <span>20/04/2023</span> por: <span>Admin</span></p>
                            <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero.</p>
                        </a>
                    </div><!--.entrada-texto-->
                </article><!--.entrada-blog-->
                <article class="entrada-blog">
                    <div class="imagen">
                        <picture>
                            <source srcset="build/img/blog4.avif" type="image/avif">
                            <source srcset="build/img/blog4.webp" type="image/webp">
                            <img loading="lazy"  width="200" height="300" src="build/img/blog4.jpg" alt="imagen de la entrada de blog">
                        </picture>
                    </div><!--.imagen-->
                    <div class="entrada-texto">
                        <a href="entrada.html">
                            <h4>Guía para la decoración de habitación.</h4>
                            <p>Escrito el: <span>20/04/2023</span> por: <span>Admin</span></p>
                            <p>Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio.</p>
                        </a>
                    </div><!--.entrada-texto-->
                </article><!--.entrada-blog-->
                
            </section><!--.blog-->
        </main>

<?php
    incluir_template("footer");
?>