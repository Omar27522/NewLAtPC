<?php
function is_english(){
    global $lang,$title, $css, $crumbs;
    $lang = "lang=\"en-US\"";
    $title ="Welcome";
    $css = '<link rel="stylesheet" href="./code/style.css">
            <link rel="stylesheet" href="./code/terwanpop.css">';
    $crumbs = '<a href="./service/">Service</a>&nbsp;<a href="./parts/">Parts</a>&nbsp;<a href="./programs/">Software</a>';
}
?>