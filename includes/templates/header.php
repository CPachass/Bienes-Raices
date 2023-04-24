<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bienes Raices</title>

        <!--Styles-->
        <link rel="stylesheet" href="/build/css/app.css">
        <!--Icon-->
        
    </head>
    <body>
        <header class="header <?php echo $inicio ? "inicio" : "";?>">
            <div class="dark-mode contenedor">
                <img src="/build/img/dark-mode.svg " alt="imagen dark mode">
            </div>
            <div class="contenedor contenido-header">
                <div class="barra">
                    <a href="/">
                        <img src="/build/img/logo.svg" alt="Logotido de Bienes Raices">
                    </a>
                    <div class="mobile-menu">
                        <img src="/build/img/barras.svg" alt="icono del menu desplegable">
                    </div>
                    <nav class="navegacion">
                        <a href="/nosotros.php">Nosotros</a>
                        <a href="/anuncios.php">Anuncios</a>
                        <a href="/blog.php">Blog</a>
                        <a href="/contacto.php">Contacto</a>
                    </nav>
                </div><!--.barra-->
                <?php if($inicio) {?>
                    <h1>Venta de Casa y Departamentos Exclusivos de Lujo</h1>
                <?php }?>
            </div> <!-- logo y navegacion-->
        </header>