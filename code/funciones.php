<?php
function is_spanish(){
    global $lang, $title, $css, $crumbs;
    $lang = "lang=\"es-419\"";
    $title ="Bienvenidos";
    $css = '<link rel="stylesheet" href="../code/style.css">
            <link rel="stylesheet" href="../code/terwanpop.css">';
    $crumbs = '<a href="./servicio/">Servicio</a>&nbsp;<a href="./partes/">Partes</a>&nbsp;<a href="./programas/">Software</a>';
}
?>