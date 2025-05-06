<article class="fullbar">
    <section class="hero3" id="software">
        <div class="container">
            <h2><?= empty($titles) ? $titulos[0] : $titles[0];
        #<!-- script checks if the english $variable is empty. if it is, the Spanish version will be displayed otherwise the English version will be displayed =0k= -->
        ?></h2>
            <a href="#title"><img src="https://latinospc.com/images/programs/code.jpg" width="263" height="146"
                    alt="image" class="rtl" /></a>
            <?= empty($description) ? $descripcion[0] : $description[0];?>
            <a href="#title"><?= empty($programs) ? $programas[15] : $programs[15];?></a>
        </div><span id="ps2"></span><br />
        <div class="container">
            <?php /*ISSET checks if $_GET is set then depending on the key, the switch statement will have the Spanish and English versions of each of the program categories.
                    For right now the id's and the links will remain the same for both versions.*/
                if (isset($_GET)) :
                    switch (key($_GET)) :
                case 'antivirus': $imag = 'av'; $title = 'Antivirus'; $titulo = $title; $id = 'Anti-Virus'; $link = '#Anti-Virus';
                    break;
                case 'malwarecleaner': case 'limpiadordemalware':
                    $imag = 'mwc'; $title = 'Malware Cleaner'; $titulo = 'Limpiadores de Malware'; $id = 'MalwareCleaner'; $link = '#MalwareCleaner';
                    break;
                case 'webbrowsers': case 'navegadoresweb':
                    $imag = 'wb'; $title = 'Web Browsers'; $titulo = 'Navegadores Web'; $id = 'WebBrowsers'; $link = '#WebBrowsers';
                    break;
                case 'messaging': case 'mensajeria':
                        $imag = 'msg'; $title = 'Messaging'; $titulo = 'Mensajería'; $id = 'Messaging'; $link = '#Messaging';
                    break;
                case 'media': case'multimedia':
                        $imag = 'media';$title = 'Media'; $titulo = 'Multi-Media'; $id = 'Media'; $link = '#Media';
                    break;
                case 'runtimes':
                    $imag = 'rt'; $title = 'Runtimes'; $titulo = 'Tiempos de Ejecución'; $id = 'Runtimes'; $link = '#Runtimes';
                    break;
                case 'imaging': case 'imagenes':
                    $imag = 'img'; $title = 'Imaging'; $titulo = 'Imágenes'; $id = 'Imaging'; $link = '#Imaging';
                    break;
                case 'documents': case 'documentos':
                    $imag = 'docs'; $title = 'Documents'; $titulo = 'Documentos'; $id = 'Documents'; $link = '#Documents';
                    break;
                case 'filesharing': case 'archivosparacompartir':
                    $imag = 'filsha'; $title = 'File Sharing'; $titulo ='Archivos para Compartir'; $id = 'FileSharing'; $link = '#FileSharing';
                    break;
                case 'onlinestorage': case 'almacenamientoenlinea':
                    $imag = 'ons'; $title = 'Online Storage'; $titulo = 'Almacenamiento en Linea'; $id = 'OnlineStorage'; $link = '#OnlineStorage';
                    break;
                case 'other': case 'otros':
                    $imag = 'ot'; $title = 'Other'; $titulo = 'Otros'; $id = 'Other'; $link = '#Other';
                    break;
                case 'utilities': case 'utilidades':
                    $imag = 'utl'; $title = 'Utilities'; $titulo = 'Utilidades'; $id = 'Utilities'; $link = '#Utilities';
                    break;
                case 'compression': case 'compresion':
                    $imag = 'press'; $title = 'Compression'; $titulo = 'Compresión'; $id = 'Compression'; $link = '#Compression';
                    break;
                case 'developertools': case 'herramientasparadesarrollar':
                    $imag = 'dv'; $title = 'Developer Tools'; $titulo = 'Herramientas de Desarrollo'; $id = 'DeveloperTools'; $link = '#DeveloperTools';
                    break;
                    default: "code";    $imag='code';          $link='#title';
                            break;
                    endswitch;
                endif;
            ?>
            <a href="<?php if(!empty($link)){echo$link;}else{echo"#title";} ?>">
                <img src="https://latinospc.com/images/programs/<?= $imag; ?>.jpg" width="263" height="670"
                    alt="<?php if(!empty(key($_GET))){echo (key($_GET));}else{echo "Code Image";} ?>" class="fl" /></a>
            <h2>&larr;
                <?= empty($programs) ? $programas[0] : $programs[0];?>
            </h2>
            <!--checks if the $variable programs is empty. if it is the Spanish version will be displayed. otherwise the english version will be displayed -->
            <aside class="colms2 buttons">
                <a href="?<?= empty($programs) ? $programas['links'][0] : $programs['links'][0];?>#ps2">
                    <button type="button" class="bttn"><?= empty($programs) ? $programas[1] : $programs[1];?></button>
                </a>
                <a href="?<?= empty($programs) ? $programas['links'][1] : $programs['links'][1];?>#ps2">
                    <button type="button" class="bttn"><?= empty($programs) ? $programas[2] : $programs[2];?></button>
                </a>
                <a href="?<?= empty($programs) ? $programas['links'][2] : $programs['links'][2];?>#ps2">
                    <button type="button" class="bttn"><?= empty($programs) ? $programas[3] : $programs[3];?></button>
                </a>
                <a href="?<?= empty($programs) ? $programas['links'][3] : $programs['links'][3];?>#ps2">
                    <button type="button" class="bttn"><?= empty($programs) ? $programas[4] : $programs[4];?></button>
                </a>
                <a href="?<?= empty($programs) ? $programas['links'][4] : $programs['links'][4];?>#ps2">
                    <button type="button" class="bttn"><?= empty($programs) ? $programas[5] : $programs[5];?></button>
                </a>
                <a href="?<?= empty($programs) ? $programas['links'][5] : $programs['links'][5];?>#ps2">
                    <button type="button" class="bttn"><?= empty($programs) ? $programas[6] : $programs[6];?></button>
                </a>
                <a href="?<?= empty($programs) ? $programas['links'][6] : $programs['links'][6];?>#ps2">
                    <button type="button" class="bttn"><?= empty($programs) ? $programas[7] : $programs[7];?></button>
                </a>
                <a href="?<?= empty($programs) ? $programas['links'][7] : $programs['links'][7];?>#ps2">
                    <button type="button" class="bttn"><?= empty($programs) ? $programas[8] : $programs[8];?></button>
                </a>
                <a href="?<?= empty($programs) ? $programas['links'][8] : $programs['links'][8];?>#ps2">
                    <button type="button" class="bttn"><?= empty($programs) ? $programas[9] : $programs[9];?></button>
                </a>
                <a href="?<?= empty($programs) ? $programas['links'][9] : $programs['links'][9];?>#ps2">
                    <button type="button" class="bttn"><?= empty($programs) ? $programas[10] : $programs[10];?></button>
                </a>
                <a href="?<?= empty($programs) ? $programas['links'][10] : $programs['links'][10];?>#ps2">
                    <button type="button" class="bttn"><?= empty($programs) ? $programas[11] : $programs[11];?></button>
                </a>
                <a href="?<?= empty($programs) ? $programas['links'][11] : $programs['links'][11];?>#ps2">
                    <button type="button" class="bttn"><?= empty($programs) ? $programas[12] : $programs[12];?></button>
                </a>
                <a href="?<?= empty($programs) ? $programas['links'][12] : $programs['links'][12];?>#ps2">
                    <button type="button" class="bttn"><?= empty($programs) ? $programas[13] : $programs[13];?></button>
                </a>
                <a href="?<?= empty($programs) ? $programas['links'][13] : $programs['links'][13];?>#ps2">
                    <button type="button" class="bttn"><?= empty($programs) ? $programas[14] : $programs[14];?></button>
                </a>
            </aside>
            <div class="clr"></div>
            <h3><a href="<?php if (key($_GET)){ echo $link; } ?>" class="rm"
                    title="Programs"><?= empty($programs) ? $programas[15] : $programs[15];?></a></h3>
        </div>
    </section>
</article>
<!--Full Bar -->
<article class="fullbar" id="programs"><br />
    <?php if (key($_GET)){
        //<!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|-Short Descriptions -\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
    ?>
    <div id="<?= $id ?>" class="hero4 blurb" style="padding-bottom: 3em;">
        <h2><?php if ($sw == 'en'){echo $title;} elseif ($sw == 'es'){echo $titulo;}?></h2>
        <section tabindex="0" class="selection">
            <p>
                <?php
        /* EG. Click ON antivirus or the "read more" link, and a window with a description will manifest lower down the page.
       Read more inside the description will Take you to a directory inside software called antivirus.*/
        //<!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|-English Version -\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
        if ($sw == 'en'){
            $options = [
                'antivirus'      => 'av',
                'malwarecleaner' => 'mlwc',
                'webbrowsers'    => 'wb',
                'messaging'      => 'msg',
                'media'          => 'media',
                'runtimes'       => 'rtimes',
                'imaging'        => 'imgs',
                'documents'      => 'docs',
                'filesharing'    => 'flsha',
                'onlinestorage'  => 'onsto',
                'other'          => 'oth',
                'utilities'      => 'uth',
                'compression'    => 'compr',
                'developertools' => 'devtools'
            ];  foreach ($options as $key => $value) {
                    if (isset($_GET[$key])) {
                        echo $descriptions[$value];
                    break;
                }
            }
        }
        //<!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|-Spanish Version -\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
        if ($sw == 'es') {
            $opciones = [
                'antivirus'                   => 'av',
                'limpiadordemalware'          => 'mlwc',
                'navegadoresweb'              => 'wb',
                'mensajeria'                  => 'msg',
                'multimedia'                  => 'media',
                'runtimes'                    => 'rtimes',
                'imagenes'                    => 'imgs',
                'documentos'                  => 'docs',
                'archivosparacompartir'       => 'flsha',
                'almacenamientoenlinea'       => 'onsto',
                'otros'                       => 'oth',
                'utilidades'                  => 'uth',
                'compresion'                  => 'compr',
                'herramientasparadesarrollar' => 'devtools'
            ];  foreach ($opciones as $llave => $valor) {
                    if (isset($_GET[$llave])) {
                        echo $descripciones[$valor];
                break;
                }
            }
        }
        ?>
                <!-- En español en leer mas, antivirus sirve bien, pero al momento de mostrar malware cleaner, no funciona me manda a un link ?limpiadordemalware -->
            </p>
        </section><a style="font-size: 1.3em; float:right; padding-right: 2em; margin-top: .7em;cursor: pointer;" href="<?php
            #<!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|-This link takes the user to a more informative page -\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
            if ($sw == 'en')  {
                    if (isset($_GET['antivirus'])) {echo 'antivirus/';}
                    elseif (isset($_GET['malwarecleaner'])) {echo 'malwarecleaner/';}
                    elseif (isset($_GET['webbrowsers'])) {echo 'webbrowsers/';}
                    elseif (isset($_GET['messaging'])) {echo 'messaging/';}
                    elseif (isset($_GET['media'])) {echo 'media/';}
                    elseif (isset($_GET['runtimes'])) {echo 'runtimes/';}
                    elseif (isset($_GET['imaging'])) {echo 'imaging/';}
                    elseif (isset($_GET['documents'])) {echo 'documents/';}
                    elseif (isset($_GET['filesharing'])) {echo 'filesharing/';}
                    elseif (isset($_GET['onlinestorage'])) {echo 'onlinestorage/';}
                    elseif (isset($_GET['other'])) {echo 'other/';}
                    elseif (isset($_GET['utilities'])) {echo 'utilities/';}
                    elseif (isset($_GET['compression'])) {echo 'compression/';}
                    elseif (isset($_GET['developertools'])) {echo 'developertools/';}
                }
                  if ($sw == 'es') {
                    if (isset($_GET['antivirus'])) {echo '../software/antivirus/';}
                    elseif (isset($_GET['limpiadordemalware'])) {echo '../software/limpiadoresdemalware/';}
                    elseif (isset($_GET['navegadoresweb'])) {echo '../software/navegadoresweb/';}
                    elseif (isset($_GET['mensajeria'])) {echo '../software/mensajeria/';}
                    elseif (isset($_GET['multimedia'])) {echo '../software/multimedia/';}
                    elseif (isset($_GET['runtimes'])) {echo '../software/tiemposdeejecucion/';}
                    elseif (isset($_GET['imagenes'])) {echo '../software/imagenes/';}
                    elseif (isset($_GET['documentos'])) {echo '../software/documentos/';}
                    elseif (isset($_GET['archivosparacompartir'])) {echo '../software/archivosparacompartir/';}
                    elseif (isset($_GET['almacenamientoenlinea'])) {echo '../software/almacenamientoenlinea/';}
                    elseif (isset($_GET['otros'])) {echo '../software/otros/';}
                    elseif (isset($_GET['utilidades'])) {echo '../software/utilidades/';}
                    elseif (isset($_GET['compresion'])) {echo '../software/compresion/';}
                    elseif (isset($_GET['herramientasparadesarrollar'])) {echo '../software/herramientasparadesarrolladores/';}
                }
                    ?>"> <?php if ($sw == 'es') {echo 'Leer más';} else {echo'Read more';}?></a>
    </div> <?php } ?>
    <br />
    <a href="#software" id="title" class="sub_title">
        <?= empty($titles) ? $titulos[1] : $titles[1]; ?>
    </a>
    <div class="spacer">
        <hr />
    </div><br />
    <div class="hero4 blurb">
        <h2><?= empty($titles) ? $titulos[2] : $titles[2]; ?></h2>
        <section tabindex="0" class="selection">
            <p><strong><?= empty($rightChoice) ? $correctaEleccion['strong'][0] : $rightChoice['strong'][0]; ?>:</strong>
                <?= empty($rightChoice) ? $correctaEleccion['descriptions'][0] : $rightChoice['descriptions'][0]; ?>
            </p>
            <p><strong><?= empty($rightChoice) ? $correctaEleccion['strong'][1] : $rightChoice['strong'][1]; ?>:</strong>
                <?= empty($rightChoice) ? $correctaEleccion['descriptions'][1] : $rightChoice['descriptions'][1]; ?>
            </p>
            <p><strong><?= empty($rightChoice) ? $correctaEleccion['strong'][2] : $rightChoice['strong'][2]; ?>:</strong>
                <?= empty($rightChoice) ? $correctaEleccion['descriptions'][2] : $rightChoice['descriptions'][2]; ?>
            </p>
            <p><strong><?= empty($rightChoice) ? $correctaEleccion['strong'][3] : $rightChoice['strong'][3]; ?>:</strong>
                <?= empty($rightChoice) ? $correctaEleccion['descriptions'][3] : $rightChoice['descriptions'][3]; ?>
            </p>
            <p><strong><?= empty($rightChoice) ? $correctaEleccion['strong'][4] : $rightChoice['strong'][4]; ?>:</strong>
                <?= empty($rightChoice) ? $correctaEleccion['descriptions'][4] : $rightChoice['descriptions'][4]; ?>
            </p>
            <p><strong><?= empty($rightChoice) ? $correctaEleccion['strong'][5] : $rightChoice['strong'][5]; ?>:</strong>
                <?= empty($rightChoice) ? $correctaEleccion['descriptions'][5] : $rightChoice['descriptions'][5]; ?>
            </p>
            <p><strong><?= empty($rightChoice) ? $correctaEleccion['strong'][6] : $rightChoice['strong'][6]; ?>:</strong>
                <?= empty($rightChoice) ? $correctaEleccion['descriptions'][6] : $rightChoice['descriptions'][6]; ?>
            </p>
            <p><strong><?= empty($rightChoice) ? $correctaEleccion['strong'][7] : $rightChoice['strong'][7]; ?>:</strong>
                <?= empty($rightChoice) ? $correctaEleccion['descriptions'][7] : $rightChoice['descriptions'][7]; ?></p>
            <h2>
                <?= empty($titles) ? $titulos[3] : $titles[3]; ?>
            </h2>
            <!-- Implement the Spanish version of the right choice $variable, is not on _works/_software/index.php -->
        </section>
    </div> <br />
    <ul tabindex="0" class="selection hero4">
        <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|-
        links, will choose which $links item from the array to use.
        Only open source is available, I hope I can have many more links to use.
        This will be done after the structure of the site is done.
        <b>Links</b> and <b>images</b> for the site will be some of the last items to be worked on.
        -\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
        <a href="<?= empty($links['opensource']) ? $links['codigoabierto'] : $links['opensource']; ?>">
            <h2><?= empty($titles) ? $titulos[4] : $titles[4]; ?>:</h2>
        </a>
        <p>
            <?= empty($types) ? $tipos['codigoabierto'] : $types['opensource']; ?>
        </p>
        <a href="#navi">
            <!-- (╯°□°）╯ FREE ┻━┻ `ღ´ -->
            <h2><?= empty($titles) ? $titulos[5] : $titles[5]; ?>:</h2>
        </a>
        <p>
            <?= empty($types) ? $tipos['gratis'] : $types['free']; ?>
        </p>
        <a href="#navi">
            <!-- (╯°□°）╯ SHAREWARE  ┻━┻ `ღ´ -->
            <h2><?= empty($titles) ? $titulos[6] : $titles[6]; ?>:</h2>
        </a>
        <p>
            <?= empty($types) ? $tipos['shareware'] : $types['shareware']; ?>
        </p>
        <h2><a href="#navi">
                <!-- (╯°□°）╯ TRIAL ┻━┻ `ღ´ -->
                <?= empty($titles) ? $titulos[7] : $titles[7]; ?>:</h2>
        </a>
        <p>
            <?= empty($types) ? $tipos['prueba'] : $types['trialware']; ?>
        </p>
        <h2><a href="#navi">
                <!-- (╯°□°）╯ PAID ┻━┻ `ღ´ -->
                <?= empty($titles) ? $titulos[8] : $titles[8]; ?>:</h2>
        </a>
        <p>
            <?= empty($types) ? $tipos['pagado'] : $types['paid']; ?>
        </p>
        <h2><a href="#navi">
                <!-- (╯°□°）╯ SUBSCRIPTION ┻━┻ `ღ´ -->
                <?= empty($titles) ? $titulos[9] : $titles[9]; ?>:</h2>
        </a>
        <p>
            <?= empty($types) ? $tipos['subscripcion'] : $types['subscription']; ?>
        </p>
    </ul>
</article>
<style>
.selection li {
    list-style: none;
    font-size: 110%;
}
.bttn {
    /*This whole section is for the buttons, I wanted to add a background color to the buttons, but it doesn't let me*/
    font-size: 170%;
    margin: 5.4%;
    padding: 10.4%;
}
.bttn:hover {
    color: midnightblue;
}
button:hover,
button:focus,
button:active {
    border-radius: 25px;
    color: blue;
}
</style>