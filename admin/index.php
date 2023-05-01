<?php 
    /* Consultar la base de datos para listar todas las propiedades en esta */
    // Paso 1: Importar la conexión
    require "../includes/config/database.php";
    $db = conectar_db();
    // Paso 2: Escribir el Query (la consulta a la base de datos)
    $query = "SELECT * FROM propiedades";
    // Paso 3: Realizar la consulta a la BD
    $resultado_consulta = mysqli_query($db, $query);
    // Mostrar mensaje condicional
    $propiedad_creada = $_GET["creado"] ?? null; // Si no existe le asigna null

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $id = $_POST["id"];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if ($id) {
            // Eliminar la imagen local
            $query = "SELECT imagen FROM propiedades WHERE id =${id}";
            $resultado_consulta = mysqli_query($db, $query);
            $propiedad = mysqli_fetch_assoc($resultado_consulta);;
            unlink("../imagenes/" . $propiedad["imagen"]);

            // Eliminar la propiedad
            $query = "DELETE FROM propiedades WHERE id = ${id}";
            $resultado_consulta = mysqli_query($db, $query);
            if ($resultado_consulta) {
                header("Location: /admin/index.php?creado=3");
            }
        }
    }

    // Incluir el template del header
    require "../includes/funciones.php";
    incluir_template("header");
?>
        <main class="contenedor seccion">
            <h1>Administrador de bienes raices</h1>

            <!-- Si el mensaje condicional es != de null, se crea este div -->
            <?php if ($propiedad_creada === "1") : ?>
                <div class="alerta alerta-correcto">Propiedad creada correctamente</div>
            <?php elseif ($propiedad_creada === "2") : ?>
                <div class="alerta alerta-correcto">Propiedad actualizada correctamente</div>
            <?php elseif ($propiedad_creada === "3") : ?>
                <div class="alerta alerta-correcto">Propiedad eliminada correctamente</div>
            <?php endif;?>
            <a href="propiedades/crear.php" class="boton-verde">Nueva propiedad</a>

            <table class="propiedades-listado seccion">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Imagen</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody> <!-- Paso 4: Mostrar los resultados -->
                    <?php while ($propiedad = mysqli_fetch_assoc($resultado_consulta)) : ?>
                        <tr>
                        <td><?php echo $propiedad["id"]; ?></td>
                        <td><?php echo $propiedad["titulo"]; ?></td>
                        <td>
                            <img src="../imagenes/<?php echo $propiedad["imagen"];?>" alt="">
                        </td>
                        <td><?php echo $propiedad["precio"]; ?></td>
                        <td>
                            <a href="propiedades/actualizar.php?id=<?php echo $propiedad["id"];?>" class="boton boton-amarillo-block">Modificar</a>
                            <form method="POST" class="w-100">
                                <input type="hidden" name="id" value="<?php echo $propiedad["id"]; ?>">
                                <input type="submit" class="w-100 boton boton-rojo-block" value="eliminar">
                            </form>

                        </td>
                    </tr>  
                    <?php endwhile;?>
                </tbody>
            </table><!--.propiedades listado-->
        </main>

<?php
    // Paso 5: Cerrar la conexión
    mysqli_close($db);

    incluir_template("footer");
?>