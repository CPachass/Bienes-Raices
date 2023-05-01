<?php 
    // Base de datos
    require "../../includes/config/database.php";
    $db = conectar_db();
    // Arreglo con mensajes de errores
    $errores = [];
    // Consultar por los vendedores disponibles
    $consulta = " SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);
    // Setear los valores de los campos
    $titulo = "";
    $precio = "";
    $descripcion = "";
    $habitaciones = "";
    $wc = "";
    $estacionamiento = "";
    $vendedor = "";
    $creado = "";
    // Ejecuta este código una vez el usuario envió el formulario
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Evita inyecciones SQL
        $titulo = mysqli_real_escape_string($db, $_POST["titulo"]);
        $precio = mysqli_real_escape_string($db, $_POST["precio"]);
        $descripcion = mysqli_real_escape_string($db, $_POST["descripcion"]);
        $habitaciones = mysqli_real_escape_string($db, $_POST["habitaciones"]);
        $wc = mysqli_real_escape_string($db, $_POST["wc"]);
        $estacionamiento = mysqli_real_escape_string($db, $_POST["estacionamiento"]);
        $vendedor = mysqli_real_escape_string($db, $_POST["vendedor"]);
        $creado = date("Y/m/d");

        // Asignar una imagen a una variable
        $imagen = $_FILES["imagen"];

        if(!$titulo) { $errores[] = "Debes agregar un título"; }
        if(!$precio) { $errores[] = "Debes agregar un precio"; }
        if (!$imagen["name"]) { $errores[] = "Debes agregar una imagen"; }
        if ($imagen["size"] > 1000 * 1000) { $errores[] = "La imagen es muy pesada"; }  // 1Mb máximo
        if(!$descripcion && strlen($descripcion) < 50) { $errores[] = "Debes agregar una descripción de al menos 50 caracteres"; }
        if(!$habitaciones) { $errores[] = "Debes agregar el número de habitaciones"; }
        if(!$estacionamiento) { $errores[] = "Debes agregar el número de estacionamientos"; }
        if(!$wc) { $errores[] = "Debes agregar el número de baños"; }
        if(!$vendedor) { $errores[] = "Debes elegir un vendedor"; }
        
        if(empty($errores)) {
            /* SUBIDA DE ARCHIVOS */
            // Creamos la carpeta si no existe
            $carpeta_imagenes = "../../imagenes/";
            if(!is_dir($carpeta_imagenes)) {
                mkdir($carpeta_imagenes);
            }
            // Generar un nombre único
            $nombre_imagen = md5(uniqid(rand())) . ".jpg";
            // Subir la imagen
            move_uploaded_file($imagen["tmp_name"], $carpeta_imagenes . $nombre_imagen);
            // Crear el comando SQL para hacer la inserción
            $query = "INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado, vendedores_id) VALUES ('$titulo', '$precio', '$nombre_imagen', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado','$vendedor')";

            // Insertar en la base de datos
            $resultado = mysqli_query($db, $query);
            if ($resultado) {
                // Redireccionar al usuario   
                header("Location: /admin/index.php?creado=1");
            }
        }
    }

    require "../../includes/funciones.php";
    incluir_template("header");
?>

        <main class="contenedor seccion">
            <h1>Crear</h1>

            <a href="../index.php" class="boton-verde">Volver</a>

            <?php foreach($errores as $error) : ?>
                <div class="alerta alerta-error">
                    <?php echo $error; ?>
                </div>
            <?php endforeach; ?>

            <form class="formulario" method="POST" action="../propiedades/crear.php" enctype="multipart/form-data">
                <fieldset class="fieldset">
                    <legend>Información general</legend>

                    <!--Nombre propiedad-->
                    <label for="titulo" class="campo">
                        <span class="campo-label">Título:</span>
                        <input type="text" id="titulo" name="titulo" placeholder="Título propiedad" class="campo-valor" value="<?php echo $titulo;?>">
                    </label>

                    <!--Precio propiedad-->
                    <label for="precio" class="campo">
                        <span class="campo-label">Precio:</span>
                        <input type="number" id="precio" name="precio" placeholder="Precio propiedad" class="campo-valor" value="<?php echo $precio;?>">
                    </label>

                    <!--Imagen propiedad-->
                    <label for="imagen" class="campo">
                        <span class="campo-label">Imagen de la propiedad:</span>
                        <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">
                    </label>

                    <!--Descripción-->
                    <label for="descripcion" class="campo">
                        <span class="campo-label">Descripción:</span>
                        <textarea id="descripcion" name="descripcion" class="campo-valor" ><?php echo $descripcion;?></textarea>
                    </label>
                </fieldset>    

                <fieldset class="fieldset">
                    <legend>Detalles propiedad</legend>
                    <!--Habitaciones propiedad-->
                    <label for="habitaciones" class="campo">
                        <span class="campo-label">Número de habitaciones:</span>
                        <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" class="campo-valor" min="1" max="9" value="<?php echo $habitaciones;?>">
                    </label>
                    <!--Baños propiedad-->
                    <label for="wc" class="campo">
                        <span class="campo-label">Número de baños:</span>
                        <input type="number" id="wc" name="wc" placeholder="Ej: 2" class="campo-valor" min="1" max="9" value="<?php echo $wc;?>">
                    </label>
                    <!--Estacionamientos propiedad-->
                    <label for="estacionamiento" class="campo">
                        <span class="campo-label">Número de espacios de estacionamiento:</span>
                        <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 2" class="campo-valor" min="1" max="9" value="<?php echo $estacionamiento;?>">
                    </label>
                </fieldset>                 

                <fieldset class="fieldset">
                    <legend>Vendedor</legend>
                    <select name="vendedor" id="" value="<?php echo $vendedor;?>">
                        <option value="" selected disabled>-- Seleccione --</option>
                        <?php while($vendedor_actual = mysqli_fetch_assoc($resultado)) : ?>
                            <option <?php echo $vendedor === $vendedor_actual["id"] ? "selected" : ""  ;?>  value="<?php echo $vendedor_actual["id"]; ?>"> <?php echo $vendedor_actual["nombre"] . " " . $vendedor_actual["apellido"]; ?> </option>
                        <?php endwhile; ?>
                    </select>
                </fieldset>        

                <input type="submit" value="Crear propiedad" class="boton-verde seccion">
            </form>
        </main>

<?php
    incluir_template("footer");
?>