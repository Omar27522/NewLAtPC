<?php
class is_Spanish {
    public $lang, $css, $crumbs, $logo ,$nav_menu, $nav_buttons,$dir;
    function structure() {
        $this->lang = "lang=\"es-419\"";
        $this->css = '<link rel="stylesheet" href="../code/style.css">
            <link rel="stylesheet" href="../code/logo.css">
            <link rel="stylesheet" href="../code/terwanpop.css">';
        $this->crumbs = '<a href="../servicios/">Servicio</a>&nbsp;<a href="./partes/">Partes</a>&nbsp;<a href="./programas/">Software</a>';
        $this->logo = '<div class="logos"><span>LA</span>tinos<span>PC</span>.com
                            <small class="rtl">PC por Computadora Personal</small></div>';
    }

    public $uri, $var,$routes;
    function nav_buttons() {
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->routes = [
            //"/jesusChrist" => "/jesucristo",
            "/jesucristo" => "/jesusChrist",
            "/test_classes/page.php" => "/jesusChrist"
        ];

        $this->var = isset($this->routes[$this->uri]) ? $this->routes[$this->uri] : "#itWorks";
        ?>
        <button><a href="./">Inicio</a></button>
        <button><a href="<?php echo $this->var; ?>">English</a></button>
        <button><a href="../servicios/">Servicios</a></button>
        <button><a href="../contacto/">Contacto</a></button>
        <button><a href="../reseñas/">Reseñas</a></button>
        <?php
    }

    function nav_menu() {
        ?>
        <ul id="menu">
            <li class="titleli">Nuestro Señor y Salvador Jesucristo</li>
                <a href="https://www.vatican.va/includes/romancuria/es.html"target="_blank">
            <li>    <img src="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/lamb10.webp" width="100%" height="auto"></li>
                </a>
        <a href="#">
            <li>Padre en el Cielo dime acerca de la Web</li>
        </a><a href="https://ancladoencristo.org/las-parabolas-de-jesus-lista-completa/">
                <li>Parabolas</li>
            </a><a href="#">
                <li>Sermones/Discursos</li>
            </a><a href="#">
                <li>Los Apóstoles</li>
            </a><a href="#" target="_blank">
                <li>Las Enseñanzas</li>
            </a><a href="#" target="_blank">
                <li>Respaldos PC</li>
            </a><a href="#" target="_blank">
                <li>Hardware/Partes</li>
            </a><a href="#" target="_blank">
                <li>Software/Programas</li>
            </a><a href="#" target="_blank">
                <li>Sitios Web</li>
            </a><a href="#" target="_blank">
                <li>Contraseñas</li>
            </a><a href="#" target="_blank">
                <li>Galería</li>
            </a>
        </ul>
        <?php
    }
}
?>