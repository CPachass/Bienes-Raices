<?php 
    require "./includes/funciones.php";
    incluir_template("header");
?>

        <main class="contenedor seccion contacto">
            <h1>Contacto</h1>

            <picture>
                <source srcset="build/img/destacada3.avif" type="image/avif">
                <source srcset="build/img/destacada3.webp" type="image/webp">
                <img loading="lazy"  width="200" height="300" src="build/img/destacada3.jpg" alt="">
            </picture>

            <h2>Llene el formulario de contacto</h2>

            <form class="formulario">
                <fieldset class="fieldset">
                    <legend>Información personal</legend>
                    <label for="nombre" class="campo">
                        <span class="campo-label">Nombre:</span>
                        <input type="text" placeholder="Tu nombre" id="nombre" class="campo-valor">
                    </label>
                    <label for="email" class="campo">
                        <span class="campo-label">Email:</span>
                        <input type="email" placeholder="Tu email" id="email" class="campo-valor">
                    </label>
                    <label for="telefono" class="campo">
                        <span class="campo-label">Teléfono:</span>
                        <input type="tel" placeholder="Tu teléfono" id="telefono" class="campo-valor">
                    </label>
                    <label for="mensaje" class="campo">
                        <span class="campo-label">Mensaje:</span>
                        <textarea name="textarea" class="campo-valor"></textarea>
                    </label>
                </fieldset> <!--.informacion personal-->

                <fieldset>
                    <legend>Información sobre propiedad</legend>
                    <label for="seleccion" class="campo">
                        <span class="campo-label">Vende o compra</span>
                        <select name="select" id="seleccion" class="campo-valor">
                            <option value="default" disabled selected>-- Seleccione --</option>
                            <option value="vendo">Vendo</option>
                            <option value="compro">Compro</option>
                          </select>
                    </label>
                    <label for="cantidad" class="campo">
                        <span class="campo-label">Cantidad</span>
                        <input type="number" id="cantidad" class="campo-valor" min="1" max="20">
                    </label>
                </fieldset> <!--.informacion sobre propiedad-->

                <fieldset>
                    <legend>Contacto</legend>
                    <div class="campo">
                        <span class="campo-label campo-smaller">Como desea ser contactado:</span>
                        <label for="opcion_telefono" class="campo campo-inline">
                            <span class="campo-label campo-label-inline">Teléfono</span>
                            <input type="radio" name="seleccion-forma-contacto" id="opcion_telefono">
                        </label>
                        <label for="opcion_email" class="campo campo-inline">
                            <span class="campo-label campo-label-inline">E-mail</span>
                            <input type="radio" name="seleccion-forma-contacto" id="opcion_email">
                        </label>
                    </div><!-- seleccion de email o telefono-->

                    <span class="campo-label campo-smaller">Si eligió teléfono, seleccione día y hora:</span>
                    <label for="dia" class="campo">
                        <span class="campo-label">Fecha:</span>
                        <input type="date" id="dia" class="campo-valor">
                    </label>
                    <label for="hora" class="campo">
                        <span class="campo-label">Hora:</span>
                        <input type="time" id="hora" class="campo-valor" min="09:00" max="18:00">
                    </label>
                </fieldset> <!--.contacto-->

                <input type="submit" value="Enviar" class="boton-verde seccion">
            </form>
        </main>

<?php
    incluir_template("footer");
?>