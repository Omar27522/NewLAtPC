<?php
    $uri = $_SERVER['REQUEST_URI'];
    $routes = [
        //"/jesusChrist" => "/jesucristo",
        "/jesucristo" => "/jesusChrist",
        "/espa%C3%B1ol/" => "../",
        "/servicios" => "/services",
        "/hardware" => "/hardware",
        "/jesucristo/parabolas"=> "/jesusChrist/parables"
    ];

$var = isset($routes[$uri]) ? $routes[$uri] : "./";
?>
<button><a href="../espa%C3%B1ol">Inicio</a></button>
<button><a href="<?php echo rtrim($var, "/"); ?>">English</a></button>
<button><a href="../servicios">Servicios</a></button>
<button><a href="../contacto">Contacto</a></button>
<button><a href="../reseñas">Reseñas</a></button>