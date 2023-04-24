<?php

require "app.php";

function incluir_template(string $nombre, bool $inicio = false) {
    include TEMPLATES_URL . "/${nombre}.php";
}