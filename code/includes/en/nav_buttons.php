<?php
    $uri = $_SERVER['REQUEST_URI'];
    $routes = [
        "/jesusChrist" => "/jesucristo",
        //"/jesucristo/" => "/jesusChrist/"
        "/services" => "/servicios",
        "/hardware" => "/hardware",
        "/jesusChrist/parables"=> "/jesucristo/parabolas",
        "/parts"=> "/partes",
        "/programs"=> "/programas"
    ];

$var = isset($routes[$uri]) ? $routes[$uri] : "español/";
?>
<button><a href="../">Home</a></button>
<!-- When I click on Español, the page I am currently in should translate automatically, and vice-versa -->
<button><a href="<?php echo rtrim($var, "/"); ?>">Español</a></button>
<button><a href="./services">Services</a></button>
<button><a href="./contact">Contact&nbsp;Us</a></button>
<button><a href="./reviews">Reviews</a></button>