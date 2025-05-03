<?php

$title="Servicios";
$dir = './';
//$about ='active';
//$keywords ='<meta name="keywords" content="California, Los Angeles County, San Bernardino county, Riverside County, Orange County, computer service and repair">';
//$description ='<meta name="description" content="We want to bring families and individuals, the experience of a fully working computer system; laptops and desktops. We offer mostly on-site and remote services, but we will work on a physical location soon.">';

function content(){
    echo '<h2 style="margin-left:20%;margin-top:3%">¡Hola!</h2>';
    $titulo = "<h2>Su Socio de Confianza en Soluciones de TI</h2>";
    $confiable ="Servicios de reparación de computadoras y TI confiables, rápidos y profesionales.";
    $servicios ='<h2>Nuestros Servicios</h2>
    <ul>
        <li>Ensamblaje de PCs Personalizadas para Oficinas, Laboratorios Caseros y Gamers</li>
        <li>Instalación y Configuración de Programas</li>
        <li>Servicios Administrados (Semanales, Mensuales, Trimestrales, Semestrales)</li>
        <li>Protección de Computadoras y Mejores Prácticas</li>
        <li>Diagnóstico de Hardware y Soluciones</li>
        <li>Eliminación de Virus y Malware</li>
        <li>Soluciones de Respaldo (Local, Remoto, Nube)</li>
        <li>Limpieza de Sistemas</li><img src="https://latinospc.com/images/button2.jpg" height="150px" width="350px" class="fl">
        <li style="list-style-type: none">Soporte Remoto y Consultas Telefónicas</li><br />
        <li style="list-style-type: none">Actualizaciones de Software/Hardware y Guías de Compra</li><br />
        <li style="list-style-type: none">Soporte Bilingüe:<br />(Tambien Hablamos Español)</li>
    </ul>';
    $ofertasEspeciales ='<h2>Ofertas Especiales</h2>
                <ul>
                    <li>Planes de Servicio para Pequeñas Empresas</li>
                    <li>Clases de Computación Presenciales y en Línea para Usuarios Principiantes e Intermedios</li>
                    <li>Soporte Remoto y Telefónico</li>
                    <li>Tarifas Razonables: $35 Tarifa de Diagnóstico (se añade al costo del servicio/reparación)</li>
                    <img src="https://latinospc.com/images/storefront.png" class="rtl">
                </ul>';
    $contacto ="<h2>Contáctenos</h2>
    <p><span style=\"font-size:x-large;\">Llámenos:<a href=\"tel:+19092767214\">909-276-7214</a><br />o<br />envíenos un mensaje de texto</span> para una cotización gratuita,<br />
        o para programar una cita de servicio.</p>
    <p>Trabajamos con individuos, estudiantes, pequeñas y medianas empresas, gamers y profesionales.</p>";
    include_once('../content/services.php');
}

include_once('../code/funciones.php');
include ('../code/html_structure/page.php');
?>