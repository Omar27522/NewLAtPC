<?php

$title = "Hardware";
$dir = '../';

function content() {
    
    $hardwareTitulos = [
    'cc'   => 'Console Controllers',
    'cpu'  => 'CPU',
    'ram'  => 'RAM',
    'ssd'  => 'SSD',
    'psu'  => 'Fuente de Poder',
    'gpu'  => 'Tarjeta de Procesamiento Gráfico',
    'pci'  => 'Tarjetas PCI',
    'ratón' => 'Ratón',
    'escritorio'  => 'Escritorios',
    'silla'  => 'Sillas',
    'enfriamiento'=> 'Enfriamiento',
    'tableta' => 'Tabletas',
    'micro'  => 'Micrófonos',
    'pantalla' => 'Pantallas',
    'audífonos' => 'Audífonos',
    'headset' => 'Auriculares totales',
    'impresora' => 'Impresoras',
    'escáner' => 'Escáner',
    'chasis'  => 'Carcasa del PC',
    'teclado'  => 'Teclado',
    'joystick'  => 'Joysticks',
    'auriculares' => 'Auriculares',
    'memoria_portable'  => 'Memoria Portable',
    'controlador' => 'Controladores',
    'mezclador_de_audio' => 'Mezclador de Audio',
    'motherboard' => 'Motherboard',
    'lápiz' => 'Plumas, Lapices, Tabletas',
    'almohadillas_anti-deslizantes' => 'Alfombrillas Antideslizantes',
    'bocinas_y_Subwoofers' => 'Bocinas y Subwoofers',
    'uniformes' => 'Uniformes'
    ];

    $titulo = 'Hardware'; // Default title
    foreach ($hardwareTitulos as $llave => $valor) {
        if (isset($_GET[$llave])) {
            $titulo = $valor;
            break;
        }
    }

    $directoryPath = '../../';
    $hardware ='active';

    // Descripciones y Palabras Clave.
    if (isset($_GET)) :
    switch (key($_GET)) :
                case 'cpu':
                    $palabrasClave = '<meta name="keywords" content="CPU, Procesador, Unidad Central de Procesamiento, Intel, AMD">';
                    $descripción = '<meta name="description" content="Explora nuestra selección de CPUs, incluyendo procesadores Intel y AMD para mejorar el rendimiento de tu computadora.">';
                    break;
                case 'cooling':
                    $palabrasClave = '<meta name="keywords" content="Enfriamiento, Ventiladores, Disipadores de calor, Pasta térmica, Soluciones de enfriamiento">';
                    $descripción = '<meta name="description" content="Explora diversas soluciones de enfriamiento, incluyendo ventiladores, disipadores de calor y pasta térmica para mantener tus componentes de computadora funcionando frescos y de manera eficiente.">';
                    break;
                case 'chassis':
                    $palabrasClave = '<meta name="keywords" content="Chasis, Caja de computadora, Caja torre, Torre media, Torre completa, Ventiladores para caja">';
                    $descripción = '<meta name="description" content="Encuentra el chasis perfecto para tu construcción, incluyendo cajas torre, torres medias y torres completas. Elige entre una variedad de diseños y características.">';
                    break;
                case 'gpu':
                    $palabrasClave = '<meta name="keywords" content="GPU, Tarjeta gráfica, Tarjeta de video, NVIDIA, AMD, GPU para juegos">';
                    $descripción = '<meta name="description" content="Navega por nuestra selección de GPUs y tarjetas gráficas, incluyendo opciones de NVIDIA y AMD. Encuentra la GPU adecuada para juegos, trabajo creativo y más.">';
                    break;
                case 'motherboard':
                    $palabrasClave = '<meta name="keywords" content="Placa base, Tarjeta madre, Placa base de computadora, ATX, Micro ATX, Chipset">';
                    $descripción = '<meta name="description" content="Encuentra una amplia gama de placas base para tu construcción, incluyendo ATX, Micro ATX y otros factores de forma. Explora diferentes chipsets y características.">';
                    break;
                case 'ssd':
                    $palabrasClave = '<meta name="keywords" content="SSD, Unidad de estado sólido, Almacenamiento SSD, SSD SATA, SSD NVMe">';
                    $descripción = '<meta name="description" content="Actualiza tu computadora con una unidad de estado sólido (SSD) para un rendimiento más rápido y confiable. Elige entre SSD SATA y SSD NVMe.">';
                    break;
                case 'ram':
                    $palabrasClave = '<meta name="keywords" content="RAM, Memoria de computadora, RAM DDR4, RAM DDR5, Módulos de memoria, Actualización de memoria, RAM de alta velocidad">';
                    $descripción = '<meta name="description" content="Mejora el rendimiento de tu computadora con módulos de RAM de alta calidad. Explora nuestra gama de RAM DDR4 y DDR5 para un rendimiento mejorado y velocidad. Encuentra la actualización de memoria adecuada para tu sistema.">';
                    break;
                case 'mouse':
                case 'computer_mouse':
                case 'raton':
                case 'ratón':
                    $palabrasClave = '<meta name="keywords" content="Ratón, Mouse, Ratón de computadora, Ratón para juegos, Ratón inalámbrico, Ratón con cable">';
                    $descripción = '<meta name="description" content="Descubre una variedad de ratones para computadora, incluyendo ratones para juegos, opciones inalámbricas y con cable. Encuentra el ratón perfecto para tus necesidades.">';
                    break;
                case 'keyboard':
                case 'teclado':
                    $palabrasClave = '<meta name="keywords" content="Teclado, Teclado de computadora, Teclado mecánico, Teclado de membrana, Teclado para juegos">';
                    $descripción = '<meta name="description" content="Explora nuestra selección de teclados para computadora, incluyendo teclados mecánicos, de membrana y para juegos. Elige el teclado adecuado para tu escritura y necesidades de juego.">';
                    break;
                case 'display':
                case 'pantalla':
                    $palabrasClave = '<meta name="keywords" content="Pantalla, Monitor, Monitor de computadora, Monitor LCD, Monitor LED, Monitor 4K">';
                    $descripción = '<meta name="description" content="Encuentra el monitor ideal para tu configuración, incluyendo pantallas LCD, LED y 4K. Explora varios tamaños y resoluciones para adaptarse a tus necesidades.">';
                    break;
                case 'external_memory_drives':
                case 'external_drives':
                case 'memoria_externa':
                    $palabrasClave = '<meta name="keywords" content="Unidades externas, Memoria externa, Unidades USB, Unidades externas de disco duro, Unidades externas SSD">';
                    $descripción = '<meta name="description" content="Navega por nuestras unidades externas para necesidades adicionales de almacenamiento. Elige entre unidades USB, discos duros externos y unidades SSD externas.">';
                    break;
                case 'pci_cards':
                case 'pci':
                    $palabrasClave = '<meta name="keywords" content="Tarjetas PCI, Tarjetas de expansión, Tarjetas gráficas, Tarjetas de sonido, Tarjetas de red">';
                    $descripción = '<meta name="description" content="Mejora tu computadora con tarjetas PCI, incluyendo tarjetas gráficas, de sonido y de red. Expande las capacidades de tu sistema con nuestra selección.">';
                    break;
                case 'power_supply':
                case 'psu':
                    $palabrasClave = '<meta name="keywords" content="PSU, Fuente de poder, Fuente de alimentación de computadora, Potencia, PSU modular, PSU no modular">';
                    $descripción = '<meta name="description" content="Elige la fuente de alimentación (PSU) adecuada para tu computadora. Ofrecemos fuentes modulares y no modulares con diferentes potencias para adaptarse a tus necesidades.">';
                    break;
                case 'scanners':
                case 'escáner':
                    $palabrasClave = '<meta name="keywords" content="Escáneres, Escáner de documentos, Escáner plano, Escáner alimentador">';
                    $descripción = '<meta name="description" content="Encuentra el escáner perfecto para tus necesidades, incluyendo escáneres de documentos, escáneres planos y escáneres alimentadores para uso doméstico o de oficina.">';
                    break;
                case 'printers':
                case 'printer':
                    $palabrasClave = '<meta name="keywords" content="Impresoras, Impresora de computadora, Impresora de inyección de tinta, Impresora láser, Impresora multifuncional">';
                    $descripción = '<meta name="description" content="Explora nuestra gama de impresoras, incluyendo impresoras de inyección de tinta, láser y multifuncionales. Encuentra la impresora adecuada para tus necesidades en casa o en la oficina.">';
                    break;
                case 'controllers':
                    $palabrasClave = '<meta name="keywords" content="Controladores, Gamepad, Controlador de juegos, Controlador de computadora">';
                    $descripción = '<meta name="description" content="Descubre varios controladores y gamepads para una experiencia de juego mejorada. Encuentra controladores compatibles con tu sistema y juegos.">';
                    break;
                case 'cc':
                    $palabrasClave = '<meta name="keywords" content="Controladores de consola, Controladores de consola de juegos, Controladores de Xbox, Controladores de PlayStation">';
                    $descripción = '<meta name="description" content="Navega por nuestra selección de controladores de consola, incluyendo controladores de Xbox y PlayStation. Encuentra el controlador perfecto para tu consola de juegos.">';
                    break;
                case 'joystick':
                case 'joysticks':
                    $palabrasClave = '<meta name="keywords" content="Joystick, Joystick de computadora, Joystick para juegos, Controlador de vuelo">';
                    $descripción = '<meta name="description" content="Encuentra joysticks y controladores de vuelo de alta calidad para juegos y simulación. Mejora tu experiencia de juego con control y retroalimentación precisos.">';
                    break;
                case 'tablets':
                    $palabrasClave = '<meta name="keywords" content="Tabletas, Tableta de computadora, Tableta Android, Tableta iOS, Tableta Windows">';
                    $descripción = '<meta name="description" content="Explora nuestra gama de tabletas, incluyendo Android, iOS y Windows. Encuentra la tableta perfecta para productividad, entretenimiento y más.">';
                    break;
                case 'microphones':
                case 'microphone':
                    $palabrasClave = '<meta name="keywords" content="Micrófono, Micrófono de computadora, Micrófono USB, Micrófono de condensador, Micrófono dinámico">';
                    $descripción = '<meta name="description" content="Elige entre una variedad de micrófonos, incluyendo USB, de condensador y dinámicos para grabación de audio clara y comunicación.">';
                    break;
                case 'headsets':
                    $palabrasClave = '<meta name="keywords" content="Auriculares, Auriculares de computadora, Auriculares para juegos, Auriculares inalámbricos, Auriculares con cancelación de ruido">';
                    $descripción = '<meta name="description" content="Descubre nuestra gama de auriculares, incluyendo opciones para juegos, inalámbricos y con cancelación de ruido. Encuentra auriculares que se adapten a tu estilo y necesidades.">';
                    break;
                case 'audífonos':
                    $palabrasClave = '<meta name="keywords" content="Audífonos, Audífonos de computadora, Audífonos de alta fidelidad, Audífonos inalámbricos, Audífonos con cable">';
                    $descripción = '<meta name="description" content="Explora audífonos de alta fidelidad y opciones inalámbricas para una experiencia de audio superior. Encuentra el par perfecto para tus necesidades de escucha.">';
                    break;
                case 'audio_mixers':
                case 'audiomixer':
                    $palabrasClave = '<meta name="keywords" content="Mezcladores de audio, Mezclador de sonido, Mezclador de música, Mezclador de audio USB">';
                    $descripción = '<meta name="description" content="Encuentra mezcladores de audio de alta calidad para tus necesidades de grabación y transmisión. Explora opciones USB y otros mezcladores para una mezcla de sonido profesional.">';
                    break;
                case 'gaming_uniforms':
                case 'uniforms':
                    $palabrasClave = '<meta name="keywords" content="Uniformes de juego, Ropa de equipo de juego, Uniformes de eSports, Camisetas de juegos">';
                    $descripción = '<meta name="description" content="Explora uniformes de juego y ropa de equipo para eSports. Encuentra camisetas y uniformes diseñados para los entusiastas de los videojuegos y los jugadores profesionales.">';
                    break;
                case 'pens_pencils_tablets':
                case 'pens_and_pencils_and_stylus':
                    $palabrasClave = '<meta name="keywords" content="Lápices, Plumas, Tabletas, Stylus, Accesorios de escritura">';
                    $descripción = '<meta name="description" content="Encuentra lápices, plumas y tabletas para todas tus necesidades de escritura y dibujo. Explora una variedad de stylus y accesorios para mejorar tu experiencia de escritura.">';
                    break;
                case 'chairs':
                    $palabrasClave = '<meta name="keywords" content="Sillas, Sillas de computadora, Sillas ergonómicas, Sillas para juegos, Sillas de oficina">';
                    $descripción = '<meta name="description" content="Descubre nuestra selección de sillas para computadora, incluyendo sillas ergonómicas, para juegos y de oficina. Encuentra la silla perfecta para tu comodidad y soporte.">';
                    break;
                case 'desks':
                    $palabrasClave = '<meta name="keywords" content="Escritorios, Escritorio de computadora, Escritorio de oficina, Escritorio para juegos, Escritorio ajustable">';
                    $descripción = '<meta name="description" content="Encuentra el escritorio ideal para tu configuración, incluyendo escritorios para oficina, juegos y ajustables. Elige el diseño que mejor se adapte a tus necesidades y espacio.">';
                    break;
                case 'anti_slip_mats':
                case 'antislipmats':
                    $palabrasClave = '<meta name="keywords" content="Alfombrillas antideslizantes, Alfombrillas para escritorio, Almohadillas para ratón, Alfombrillas para teclado">';
                    $descripción = '<meta name="description" content="Explora alfombrillas antideslizantes y para escritorio para mantener tu área de trabajo organizada y prevenir deslizamientos. Encuentra almohadillas para ratón y teclado para mayor comodidad.">';
                    break;
                case 'speakers_and_subwoofers':
                    $palabrasClave = '<meta name="keywords" content="Altavoces, Subwoofers, Altavoces de computadora, Sonido envolvente, Sistema de audio">';
                    $descripción = '<meta name="description" content="Mejora tu experiencia de audio con altavoces y subwoofers de alta calidad. Explora opciones para altavoces de computadora y sistemas de sonido envolvente.">';
                    break;
                default:
                    $palabrasClave = '<meta name="keywords" content="CPU, RAM, HDD, SSD, Placa base, PSU, Dispositivos de E/S, Periféricos, GPU, Chasis, Enfriadores, Ratón, Teclado, Pantalla, Unidades externas, Tarjetas PCI, Escáneres, Impresoras, Controladores de consola, Joysticks, Tablets, Micrófonos, Auriculares, Mezclador de audio, Controladores, Uniformes de juego, Bolígrafos, Lápices, Sillas, Escritorios, Alfombrillas antideslizantes, Altavoces y subwoofers">';
                    $descripción = '<meta name="description" content="Explora una amplia gama de componentes y periféricos para computadoras incluyendo CPU, RAM, HDD, SSD, Placa base, PSU, Dispositivos de E/S, Periféricos, GPU, Chasis, Enfriadores, Ratón, Teclado, Pantalla, Unidades externas, Tarjetas PCI, Escáneres, Impresoras, Controladores de consola, Joysticks, Tablets, Micrófonos, Auriculares, Mezclador de audio, Controladores, Uniformes de juego, Bolígrafos, Lápices, Sillas, Escritorios, Alfombrillas antideslizantes, Altavoces y subwoofers. Encuentra todo lo que necesitas para tu computadora y configuración de juegos." />';
                    break;
    endswitch;
endif;
#---->PAGINA<----



    $hw = 'es';
	$include_path = '../../include/_works/_hardware/';
	$include_path_vars = '../../español/hardware/';
	$include_pathV = $include_path_vars;

 //Paginas del Hardware individuales
if (isset($_GET)) :
    switch (key($_GET)) :
        case 'cpu':
        case 'Procesador':
			include ($include_pathV. 'cpu.php');
            include ($include_path . 'cpu.php');
            break;
        case 'cooling':
        case 'enfriamiento':
            include ($include_pathV. 'enfriamiento.php');
            include ($include_path . 'cooling.php');
            break;
        case 'chassis':
        case 'carcasa':
            include ($include_pathV. 'chasis.php');
            include ($include_path . 'chassis.php');
            break;
        case 'gpu':
        case 'tarjeta_grafica':
            include ($include_pathV. 'gpu.php');
            include ($include_path . 'gpu.php');
            break;
        case 'motherboard':
            include ($include_pathV. 'motherboard.php');
            include ($include_path . 'motherboard.php');
            break;
        case 'ssd':
            include ($include_pathV. 'ssd.php');
            include ($include_path . 'ssd.php');
            break;
        case 'ram':
            include ($include_pathV. 'ram.php');
            include ($include_path . 'ram.php');
            break;
        case 'mouse':
        case 'computer_mouse':
        case 'raton':
        case 'ratón':
            include ($include_pathV. 'raton.php');
            include ($include_path . 'mouse.php');
            break;
        case 'keyboard':
        case 'teclado':
            include ($include_pathV. 'teclado.php');
            include ($include_path . 'keyboard.php');
            break;
        case 'display':
        case 'pantalla':
            include ($include_pathV. 'pantalla.php');
            include ($include_path . 'display.php');
            break;
        case 'external_memory_drives':
        case 'external_drives':
        case 'memoria_externa':
            include ($include_pathV. 'memoria_externa.php');
            include ($include_path . 'external_memory_drives.php');
            break;
        case 'tarjeta_pci':
        case 'pci':
            include ($include_pathV. 'tarjeta_pci.php');
            include ($include_path . 'pci_cards.php');
            break;
        case 'fuente_de_poder':
        case 'psu':
            include ($include_pathV. 'fuente_de_poder.php');
            include ($include_path . 'psu.php');
            break;
        case 'escáner':
        case 'scanners':
            include ($include_pathV. 'scaners.php');
            include ($include_path . 'scanners.php');
            break;
        case 'impresora':
        case 'printer':
            include ($include_pathV. 'impresoras.php');
            include ($include_path . 'printers.php');
            break;
        case 'controllers':
        case 'controladores':
            include ($include_pathV. 'controladores.php');
            include ($include_path . 'controllers.php');
            break;
        case 'cc':
        case 'mando_de_consola':
            include ($include_pathV. 'mando_de_consola.php');
            include ($include_path . 'console_controllers.php');
            break;
        case 'joystick':
        case 'joysticks':
            include ($include_pathV. 'joystick.php');
            include ($include_path . 'joystick.php');
            break;
        case 'tabletas':
            include ($include_pathV. 'tabletas.php');
            include ($include_path . 'tablets.php');
            break;
        case 'microfonos':
        case 'microphone':
            include ($include_pathV. 'microfonos.php');
            include ($include_path . 'microphones.php');
            break;
        case 'headsets':
            include ($include_pathV. 'headsets.php');
            include ($include_path . 'headsets.php');
            break;
        case 'headphones':
        case 'audífonos':
            include ($include_pathV. 'audifonos.php');
            include ($include_path . 'headphones.php');
            break;
        case 'audio_mixers':
        case 'audiomixer':
        case 'mezcladora_de_audio':
            include ($include_pathV. 'audio_mezcladora.php');
            include ($include_path . 'audio_mixers.php');
            break;
        case 'uniformes_gaming':
        case 'uniforms':
            include ($include_pathV. 'uniformes_gaming.php');
            include ($include_path . 'gaming_uniforms.php');
            break;
        case 'lapices_plumas_tabletas':
        case 'pens_and_pencils_and_stylus':
            include ($include_pathV. 'lapices_plumas_tabletas.php');
            include ($include_path . 'pens_pencils_tablets.php');
            break;
        case 'chairs':
        case 'sillas':
            include ($include_pathV. 'sillas.php');
            include ($include_path . 'chairs.php');
            break;
        case 'desks':
        case 'escritorios':
            include ($include_pathV. 'escritorios.php');
            include ($include_path . 'desks.php');
            break;
        case 'anti_slip_mats':
        case 'alfombrilla_antideslizante':
            include ($include_pathV. 'alfombrilla_antideslizante.php');
            include ($include_path . 'anti_slip_mats.php');
            break;
        case 'speakers_and_subwoofers':
        case 'bocinas_y_Subwoofers':
            include ($include_pathV. 'bocinas_y_subwoofers.php');
            include ($include_path . 'speakers_and_subwoofers.php');
            break;
        default:
	$title = "<h2>El hardware es la computadora — sus componentes físicos.</h2>";

	$description = "<p>Estos componentes pueden incluir la funcionalidad, diseño, materiales, innovaciones, termales, etc. de la computadora.<br />Una computadora es un dispositivo electrónico que manipula datos o información. Tiene la capacidad de almacenar, recuperar y procesar datos.<p> <!--https://unsplash.com/photos/2sILr4DwabQ-->
	<h3><a href=\"https://latinospc.com/hardware/?anatomy_of_a_computer#navi\">La anatomía de una computadora</a> típicamente incluye, 
	<a href=\"https://latinospc.com//hardware/?notebooks#navi\">Portátiles</a>, Dispositivos Portátiles, Dispositivos Inteligentes, PC's Modulares, ETC.</h3>";

	$contentSubTitles = ["Partes de la Computadora", "Unidad Central de Procesamiento (CPU):", "Memoria (RAM):", "Unidad de Almacenamiento de Memoria (disco duro, SSD):",
	"Placa Base:", "Unidad de Fuente de Alimentación (PSU):", "GPU:", "Chasis:", "Refrigeradores", "Dispositivos de Entrada/Salida:", "Dispositivos Periféricos:"];

	$content = ['CPU' => "El \"cerebro\" de la computadora, responsable de ejecutar las instrucciones de los programas de computadora.",
	'RAM' => "Almacena datos que la CPU usa a corto plazo.",
	'HDD' => "Almacena datos de manera persistente, incluso cuando la computadora está apagada.",
	'Motherboard' => "La placa de circuito principal en una computadora, que alberga la CPU, la memoria y otros componentes.&nbsp;",
	'PSU' => "Convierte la corriente alterna de una toma de corriente en corriente continua utilizada por la computadora.",
	'GPU' => "Unidad de Procesamiento Gráfico (GPU) especializada que maneja la carga computacional necesaria para las tareas.&nbsp;",
	'Chassis' => "Aloja todos los componentes internos que una computadora necesita.",
	'Coolers' => "Ayudan a regular la temperatura de la unidad central de procesamiento (CPU) y otros componentes críticos de la computadora.",
	'I/O' => "Permiten que los datos se ingresen en la computadora (como un teclado y un ratón) y se saquen de la computadora (como una pantalla y altavoces).&nbsp;",
	'Peripherals' => "Hardware adicional conectado a una computadora, como impresoras, escáneres y discos duros externos.&nbsp;"];

	$perifericos = [
	"Ratón",
	"Teclado",
	"Pantalla",
	"Unidades de Memoria Externas",
	"Tarjetas PCI",
	"Fuente de Alimentación",
	"Refrigeración",
	"GPU",
	"Escáneres",
	"Impresoras",
	"Controladores de Consola",
	"Joystick",
	"Tabletas",
	"Micrófonos",
	"Audífonos con Micrófono",
	"Audífonos",
	"Mezcladores de Audio",
	"Controladores",
	"Uniformes de Juego",
	"Plumas, Lápices y Tabletas",
	"Sillas",
	"Escritorios",
	"Alfombrillas Antideslizantes",
	"Altavoces y Subwoofers",
	"Periféricos",
	];

    $links =[''];

include ('../content/hardware.php');
break;
endswitch;
endif;

}

include_once('../code/funciones.php');
include ('../code/html_structure/page.php');
?>