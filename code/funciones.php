<?php
function is_spanish(){
    global $lang, $title, $css, $crumbs, $logo, $nav_menu, $nav_buttons;
    $lang = "lang=\"es-419\"";
    $title ="Bienvenidos";
    $css = '<link rel="stylesheet" href="../code/style.css">
            <link rel="stylesheet" href="../code/terwanpop.css">';
    $crumbs = '<a href="./servicio/">Servicio</a>&nbsp;<a href="./partes/">Partes</a>&nbsp;<a href="./programas/">Software</a>';

    $logo = '<span>LA</span>tinos<span>PC</span>.com
                <small>PC por Computadora Personal</small>';

        ob_start();
            include ('../code/content/es/nav_menu.php');
    $nav_menu = ob_get_clean();

        ob_start();
            include ('../code/content/es/nav_buttons.php');
    $nav_buttons = ob_get_clean();
}
?>