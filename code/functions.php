<?php
function is_english(){
    global $lang, $css, $crumbs, $logo ,$nav_menu, $nav_buttons,$dir;
    $lang = "lang=\"en-US\"";
    $css = '<link rel="stylesheet" href="'.$dir.'code/style.css">
            <link rel="stylesheet" href="'.$dir.'code/logo.css">
            <link rel="stylesheet" href="'.$dir.'code/terwanpop.css">';
    $crumbs = '<a href="'.$dir.'services">Service</a>&nbsp;<a href="'.$dir.'parts">Parts</a>&nbsp;<a href="'.$dir.'programs">Software</a>';

   /* $logo = '<img src="banner2.webp" class="logos">
                <small>PC is for Personal Computer</small>';*/

    $logo = '<div class="logos"><span>LA</span>tinos<span>PC</span>.com
                <small class="rtl">PC is for Personal Computer</small></div>';

        ob_start();
            include ($dir.'code/includes/en/nav_menu.php');
    $nav_menu = ob_get_clean();

        ob_start();
            include ($dir.'code/includes/en/nav_buttons.php');
    $nav_buttons = ob_get_clean();
}
?>