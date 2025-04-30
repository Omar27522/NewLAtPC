<?php
class pageStructure {
    public $lang, $css, $crumbs, $logo;
    function buttons ($lang){
        $uri = $_SERVER['REQUEST_URI'];
        $routes = [
            //"/jesusChrist" => "/jesucristo",
            "/jesucristo" => "/jesusChrist",
            "/espa%C3%B1ol/" => "../",
        ];

        if ($lang == "es"){



        $var = isset($routes[$uri]) ? $routes[$uri] : "./";
        echo '<button><a href="./">Inicio</a></button>';
        echo '<button><a href="'.$var.'">English</a></button>';
        echo '<button><a href="../servicios/">Servicios</a></button>';
        echo '<button><a href="../contacto/">Contacto</a></button>';
        echo '<button><a href="../reseñas/">Reseñas</a></button>';
        }
        else {
            $var = isset($routes[$uri]) ? $routes[$uri] : "español/";
            echo '
            <button><a href="./">Home</a></button>';

            //<!-- When I click on Español, the page I am currently in should translate automatically, and vice-versa -->
            echo '<button><a href="'.$var.'">Español</a></button>';
            echo '<button><a href="./services/">Services</a></button>';
            echo '<button><a href="./contact/">Contact&nbsp;Us</a></button>';
            echo '<button><a href="./reviews/">Reviews</a></button>';
                    }
    }
    function menu ($lang) {
        if ($lang == 'es'){
        echo'<ul id="menu">
                        <li class="titleli">Nuestro Señor y Salvador Jesucristo</li>
                    <a href="https://www.vatican.va/includes/romancuria/es.html"
                        target="_blank">
                        <li><img src="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/lamb10.webp"
                                width="100%" height="auto"></li>
                    </a><a href="../jesucristo">
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
                    </ul>';
        }
        else {
            echo'
                                <ul id="menu">
                                    <li class="titleli">Our Lord and Savior Jesus Christ</li>
                                    <a href="https://www.vatican.va/roman_curia/pontifical_councils/interelg/documents/rc_pc_interelg_doc_20030203_new-age_en.html" target="_blank" alt="Jesus">
                                        <img src="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/lamb10.webp" width="100%" height="auto">
                                    </a>
                                    <a href="./jesusChrist">
                                        <li>Heavenly Father Tell me about the Web</li>
                                    </a><a href="./jesusChrist/parables"><!-- https://bibilium.com/38-parables-of-jesus-parables-of-jesus/ -->
                                        <li>Parables</li>
                                    </a><a href="#">
                                        <li>Sermons/Discourses</li>
                                    </a><a href="#">
                                        <li>The Apostles</li>
                                    </a><a href="#" target="_blank">
                                        <li>His Teachings</li>
                                    </a><a href="#" target="_blank">
                                        <li>Computer Backup</li>
                                    </a><a href="#" target="_blank">
                                        <li>Hardware/Parts</li>
                                    </a><a href="#" target="_blank">
                                        <li>Software/Programs</li>
                                    </a><a href="#" target="_blank">
                                        <li>Websites</li>
                                    </a><a href="#" target="_blank">
                                        <li>Passwords</li>
                                    </a><a href="#" target="_blank">
                                        <li>Gallery</li>
                                    </a>
                                             </ul>';
                                            }
    }
    function Spanish_is(){
       
        $this->lang = "lang=\"es-419\"";
        $this->css = '<link rel="stylesheet" href="../style.css">
                <link rel="stylesheet" href="../logo.css">
                <link rel="stylesheet" href="../terwanpop.css">';
        $this->crumbs = '<a href="../servicios/">Servicio</a>&nbsp;<a href="./partes/">Partes</a>&nbsp;<a href="./programas/">Software</a>';

        $this->logo = '<div class="logos"><span>LA</span>tinos<span>PC</span>.com
                    <small class="rtl">PC por Computadora Personal</small></div>';
    }
    function is_English(){
        
        $lang = "lang=\"en-US\"";
        $css = '<link rel="stylesheet" href="'.$dir.'code/style.css">
                <link rel="stylesheet" href="'.$dir.'code/logo.css">
                <link rel="stylesheet" href="'.$dir.'code/terwanpop.css">';
        $crumbs = '<a href="'.$dir.'services/">Service</a>&nbsp;<a href="'.$dir.'parts/">Parts</a>&nbsp;<a href="'.$dir.'programs/">Software</a>';

       /* $logo = '<img src="banner2.webp" class="logos">
                    <small>PC is for Personal Computer</small>';*/

        $logo = '<div class="logos"><span>LA</span>tinos<span>PC</span>.com
                    <small class="rtl">PC is for Personal Computer</small></div>';
    }

}
/*                                                              Think Of how far you've traveled, This is a Decent looking class,
                                                                but What do I know, just started using them.
                                                                Make it good, make better. This is some code that only you know
                                                                you changed. I must start using this file.

*/

$page = new pageStructure;
$page->Spanish_is();
$title ="Bienvenidos";
$content="This is Some Content Stuff. FUN!";
?>
<!DOCTYPE html>
<html <?php  echo $page->lang;/*Call the Language*/?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="LAtPC" />
    <link rel="manifest" href="/site.webmanifest" />
    <title>
        <?php echo $title; /* Call the title */?>
    </title>
    <?php echo $page->css; /* Call the CSS */?>
</head>

<body>
    <main>
        <header>
            <span class="crumbs">
                <!-- HERE ARE THE PAGE CRUMBS-->
                <?php echo $page->crumbs;/*Call the Crumbs*/?>
                <hr>
            </span>

            <a href="#" class="phone">
                909-276-7214
            </a>

            <div class="logo">
                <?php echo $page->logo; /*Call the Logo*/?>
            </div><br />
            <nav class="sticky">
                <!--    TerwanPOP    -->
                <div role="navigation" class="burg">
                    <div id="menuToggle"><input type="checkbox" />
                        <span></span><span></span><span></span>
                        <?php echo $page->menu($lang="es"); /*Call the menu*/?>
                    </div>
                </div>
                <!--    TerwanPOP Made by Erik Terwan    -->
                <?php echo $page->buttons($lang="es"); /*Call the menu buttons*/?>
            </nav>
        </header>
        <article>
            <section><?php
           echo $content;
               ?>
            </section>
        </article>
    </main>
    <footer id="footer">
        LAtinosPC.com © 2025
        <!-- <img src="banner.webp" style="width:100vw">-->
    </footer>
    <script>
    const menuToggleInput = document.querySelector('#menuToggle input');
    const body = document.querySelector('body');

    menuToggleInput.addEventListener('change', function() {
        if (menuToggleInput.checked) {
            body.classList.add('menu-open');
        } else {
            body.classList.remove('menu-open');
        }
    });
    </script>
</body>

</html>