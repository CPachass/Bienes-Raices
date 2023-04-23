document.addEventListener("DOMContentLoaded", function() {
    dark_mode();
    ocultar_requeridos();
    eventListeners();
});

function dark_mode() {
    const prefiere_darkmode = window.matchMedia('(prefers-color-scheme: dark)');

    // Ver si el usuario tiene dark mode en su sistema operativo
    if (prefiere_darkmode.matches) {
        document.body.classList.add("dark-mode-all");
    } else {
        document.body.classList.remove("dark-mode-all");
    }

    // Actualizarlo de forma constante
    prefiere_darkmode.addEventListener("change", function() {
        if (prefiere_darkmode) {
            document.body.classList.add("dark-mode-all");
        } else {
            document.body.classList.remove("dark-mode-all");
        }
    });

    const boton_dark_mode = document.querySelector(".dark-mode img");
    boton_dark_mode.addEventListener("click", function() {
        document.body.classList.toggle("dark-mode-all");
    });
}

function ocultar_requeridos() {
    const navegacion = document.querySelector(".navegacion");
    if (window.innerWidth < 768) {
        navegacion.classList.add("ocultar");
    }
}

function eventListeners() {
    /* Desplegar menu hamburguesa */
    const mobile_menu = document.querySelector(".mobile-menu img");
    mobile_menu.addEventListener("click", function() {
        navegacion_responsive();
    })

    /* Mirar por el ancho de la ventana para ocultar o mostrar */
    window.addEventListener("resize", function() {
        navegacion_responsive_resize();
    });
}

function navegacion_responsive() {
    const navegacion = document.querySelector(".navegacion");
    if (navegacion.classList.contains("ocultar")) {
        navegacion.classList.remove("ocultar");
    } else {
        navegacion.classList.add("ocultar");
    }
}

function navegacion_responsive_resize() {
    const ancho_ventana = window.innerWidth;
    const navegacion = document.querySelector(".navegacion");
    if (ancho_ventana < 768) {
        navegacion.classList.add("ocultar")
    } else {
        navegacion.classList.remove("ocultar");
    }
}