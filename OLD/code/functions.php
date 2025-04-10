<?php
class atlas_directory {
    private $isSubdirectory;
    private $lang = "lang=\"en-US\"";
    private $c_ss = "code/style.css";
    /* My approach will be to maybe declare an empty variable for the function to use it how it should
    private $c_ss = "a";
    //Then in the function decide what directory is it. 1st, 2nd, 3rd, etc.
    public function getCss() {
        $path = ($this->isSubdirectory) ? "../" : (($this->is3rd_directory) ? "../../" : "./");
    return "\"".$path.$c_ss."\"";
    }
    //perhaps this approach would work better, since the changes to the code will only need to be made in one place.
    I'm going to take a break from this for now, and try to come up with a elegant solution for this problem.
    */

    private $c_ss2 = "./code/terwanpop.css";
    private $crumbs = '<a href="./service/">Service</a>&nbsp;<a href="./parts/">Parts</a>&nbsp;<a href="./apps/">Software</a>';
    private $logo = '<small>PC is for Personal Computer</small>';
    private $nav_menu = '<li class="titleli">Our Lord and Savior Jesufsdfs Christ</li><a href="https://www.vatican.va/roman_curia/pontifical_councils/interelg/documents/rc_pc_interelg_doc_20030203_new-age_en.html" target="_blank"><li><img src="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/lamb10.webp"width="100%"height= "auto"></li></a><a href="#"><li>Heavenly Father Tell me about the Web</li></a><a href="#"><li>Our Lord and Savior Jesus Christ</li></a><a href="#"><li>Info</li></a><a href="#"><li>Contact</li></a><a href="https://erikterwan.com/" target="_blank"><li>Show me more</li></a>';
    private $nav_buttons = '<button><a href="./">Home</a></button><button><a href="./es/">Español</a></button><button><a href="./services/">Services</a></button><button><a href="./contact/">Contact&nbsp;Us</a></button><button><a href="./reviews/">Reviews</a></button>';
    private $footer = 'Site\'s footer';
    function __construct($isSubdirectory = false) {
        $this->isSubdirectory = $isSubdirectory;
    }

    public function getLang() {
        return $this->lang;
    }

    public function getCss() {
        $path = ($this->isSubdirectory) ? "../" : "./";
        return "\"".$path.$this->c_ss."\"";
    }

    public function getCss2() {
        $path = ($this->isSubdirectory) ? "../" : "./";
        return "\"".$path.$this->c_ss2."\"";
    }

    public function getCrumbs() {
        $path = ($this->isSubdirectory) ? "../" : "./";
        return '<a href="'.$path.'service/">Service</a>&nbsp;<a href="'.$path.'parts/">Parts</a>&nbsp;<a href="'.$path.'apps/">Software</a>';
    }

    public function getLogo() {
        return $this->logo;
    }

    public function getNavMenu() {
        return $this->nav_menu;
    }

    public function getNavButtons() {
        $path = ($this->isSubdirectory) ? "../" : "./";
        return '<button><a href="'.$path.'">Home</a></button><button><a href="'.$path.'es/">Español</a></button><button><a href="'.$path.'services/">Services</a></button><button><a href="'.$path.'contact/">Contact&nbsp;Us</a></button><button><a href="'.$path.'reviews/">Reviews</a></button>';
    }

    public function getFooter() {
        return $this->footer;
    }
}
class directory1    {
    public $lang;
    public $c_ss;
    public $c_ss2;
    public $crumbs;
    public $logo;
    public $nav_menu;
    public $nav_buttons;
    public $footer;
    function __construct()  {

        $this->lang="lang=\"en-US\"";
        $this->c_ss ="\"./code/style.css\"";//I have to figure out a way to merge these two together.
        $this->c_ss2 ="\"./code/terwanpop.css\"";
        $this->crumbs  =  '<a href="./service/">Service</a>&nbsp;<a href="./parts/">Parts</a>&nbsp;<a href="./apps/">Software</a>';
        $this->logo = '<small>PC is for Personal Computer</small>';
        $this->nav_menu ='<li class="titleli">Our Lord and Savior Jesus Christ</li><a href="https://www.vatican.va/roman_curia/pontifical_councils/interelg/documents/rc_pc_interelg_doc_20030203_new-age_en.html" target="_blank"><li><img src="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/lamb10.webp"width="100%"height= "auto"></li></a><a href="#"><li>Heavenly Father Tell me about the Web</li></a><a href="#"><li>Our Lord and Savior Jesus Christ</li></a><a href="#"><li>Info</li></a><a href="#"><li>Contact</li></a><a href="https://erikterwan.com/" target="_blank"><li>Show me more</li></a>';
        $this->nav_buttons ='<button><a href="./">Home</a></button><button><a href="./es/">Español</a></button><button><a href="./services/">Services</a></button><button><a href="./contact/">Contact&nbsp;Us</a></button><button><a href="./reviews/">Reviews</a></button>';
        $this->footer = 'Site\'s footer';
    }
}

class directory2    {
    public $lang;
    public $c_ss;
    public $c_ss2;
    public $crumbs;
    public $logo;
    public $nav_menu;
    public $nav_buttons;
    public $footer;
    function __construct()  {

        $this->lang="lang=\"en-US\"";
        $this->c_ss ="\"../code/style.css\"";//Took several minutes to figure this out XD
        $this->c_ss2 ="\"../code/terwanpop.css\"";
        $this->crumbs  =  '<a href="../service/">Service</a>&nbsp;<a href="../parts/">Parts</a>&nbsp;<a href="../apps/">Software</a>';
        $this->logo = '<small>PC is for Personal Computer</small>';
        $this->nav_menu ='<li class="titleli">Our Lord and Savior Jesus Christ $til</li><a href="https://www.vatican.va/roman_curia/pontifical_councils/interelg/documents/rc_pc_interelg_doc_20030203_new-age_en.html" target="_blank"><li><img src="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/lamb10.webp"width="100%"height= "auto"></li></a><a href="#"><li>Heavenly Father Tell me about the Web</li></a><a href="#"><li>Our Lord and Savior Jesus Christ</li></a><a href="#"><li>Info</li></a><a href="#"><li>Contact</li></a><a href="https://erikterwan.com/" target="_blank"><li>Show me more</li></a>';
        $this->nav_buttons ='<button><a href="../">Home</a></button><button><a href="../es/">Español</a></button><button><a href="../services/">Services</a></button><button><a href="../contact/">Contact&nbsp;Us</a></button><button><a href="../reviews/">Reviews</a></button>';
        $this->footer = 'Site\'s footer';
    }
}

class es_directory2    {

    public $lang;
    public $c_ss;
    public $c_ss2;
    public $crumbs;
    public $logo;
    public $nav_menu;
    public $nav_buttons;
    public $footer;
    function __construct()  {

        $this->lang="lang=\"es-US\"";
        $this->c_ss ="\"../code/style.css\"";//Took several minutes to figure this out XD
        $this->c_ss2 ="\"../code/terwanpop.css\"";
        $this->crumbs  =  '<a href="../servicio/"> Servicio</a>&nbsp;<a href="../partes/">Partes</a>&nbsp;<a href="../software/">Apps</a>';
        $this->logo = '<small>PC por Computadora Personal</small>';
        $this->nav_menu ='<li class="titleli">Nuestro Señor y Salvador Jesus Cristo</li><a href="https://www.vatican.va/roman_curia/pontifical_councils/interelg/documents/rc_pc_interelg_doc_20030203_new-age_en.html" target="_blank"><li><img src="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/lamb10.webp"width="100%"height= "auto"></li></a><a href="#"><li>Padre en el Cielo dime acerca de la Web</li></a><a href="#"><li>Nuestro Señor y Salvador Jesus Cristo</li></a><a href="#"><li>Informacion</li></a><a href="#"><li>Contacto</li></a><a href="https://erikterwan.com/" target="_blank"><li>Descubre mas!</li></a>';
        $this->nav_buttons ='<button><a href="../es/">Inicio</a></button><button><a href="../">English</a></button><button><a href="../servicios/">Servicios</a></button><button><a href="../contacto/">Contacta&nbsp;Nos</a></button><button><a href="../criticas/">Reseñas</a></button>';
        $this->footer = 'Piecera del Sitio';
    }
}
/*$code = new es_directory2();
echo $code->c_ss;*/


function titles() {
    // Get the current URL path
    $url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    // Split the URL path into an array of directory names
    $directories = explode('/', rtrim($url_path, '/'));

    // Get the last directory name (page name)
    $page = end($directories);

    // Define titles based on the page name
    switch ($page) {
        case 'services':
            echo "Services";
            break;
        case 'about':
            echo "Title for About Page";
            break;
        case 'apps':
            echo "Software";
            break;
        case 'reviews':
            echo "Reviews";
            break;
        case 'service':
            echo "Service and Repair";
            break;
        case 'parts':
            echo "Hardware";
            break;
        case 'contact':
            echo "Contact";
            break;
        case 'es':
            echo "Español";
            break;
        case 'servicio':
            echo "Servicio";
            break;
        case 'partes':
            echo "Hardware";
            break;
        case 'software':
            echo "Apps";
            break;
        case 'servicios':
            echo "Servicios";
            break;
        case 'contacto':
            echo "Contactenos";
            break;
        case 'criticas':
            echo "Reseñas";
            break;
        default:
            echo "LATPC";
            break;
    }
}

// Call the function to output the title


?>