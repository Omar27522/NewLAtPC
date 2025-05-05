<?php
function is_spanish(){
    global $lang, $title, $css, $crumbs, $logo, $nav_menu, $nav_buttons,$dir;
    $lang = "lang=\"es-419\"";
    $css = '<link rel="stylesheet" href="'.$dir.'code/style.css">
            <link rel="stylesheet" href="'.$dir.'code/logo.css">
            <link rel="stylesheet" href="'.$dir.'code/terwanpop.css">';
    $crumbs = '<a href="'.$dir.'servicios">Servicio</a>&nbsp;<a href="./partes">Partes</a>&nbsp;<a href="./programas/">Software</a>';

    $logo = '<div class="logos"><span>LA</span>tinos<span>PC</span>.com
                <small class="rtl">PC por Computadora Personal</small></div>';

        ob_start();
            include (''.$dir.'code/includes/es/nav_menu.php');
    $nav_menu = ob_get_clean();

        ob_start();
            include (''.$dir.'code/includes/es/nav_buttons.php');
    $nav_buttons = ob_get_clean();
}
?>