<?php
function is_english(){
    global $lang,$title, $css, $crumbs, $logo ,$nav_menu, $nav_buttons;
    $lang = "lang=\"en-US\"";
    $title ="Welcome";
    $css = '<link rel="stylesheet" href="./code/style.css">
            <link rel="stylesheet" href="./code/logo.css">
            <link rel="stylesheet" href="./code/terwanpop.css">';
    $crumbs = '<a href="./services/">Service</a>&nbsp;<a href="./parts/">Parts</a>&nbsp;<a href="./programs/">Software</a>';

   /* $logo = '<img src="banner2.webp" class="logos">
                <small>PC is for Personal Computer</small>';*/

    $logo = '<div class="logos"><div class="logo-text"><span>LA</span>tinos<span>PC</span>.com</div><small>PC is for Personal Computer</small></div>';

        ob_start();
            include ('./code/includes/en/nav_menu.php');
    $nav_menu = ob_get_clean();

        ob_start();
            include ('./code/includes/en/nav_buttons.php');
    $nav_buttons = ob_get_clean();
}
?>