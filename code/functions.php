<?php
function is_english(){
    global $lang,$title, $css, $crumbs, $logo ,$nav_menu, $nav_buttons;
    $lang = "lang=\"en-US\"";
    $title ="Welcome";
    $css = '<link rel="stylesheet" href="./code/style.css">
            <link rel="stylesheet" href="./code/terwanpop.css">';
    $crumbs = '<a href="./service/">Service</a>&nbsp;<a href="./parts/">Parts</a>&nbsp;<a href="./programs/">Software</a>';

    $logo = '<span>LA</span>tinos<span>PC</span>.com
                <small>PC is for Personal Computer</small>';

        ob_start();
            include ('./code/content/en/nav_menu.php');
    $nav_menu = ob_get_clean();

        ob_start();
            include ('./code/content/en/nav_buttons.php');
    $nav_buttons = ob_get_clean();
}
?>