<article class="fullbar">
    <section class="hero3 article" id="article">
        <div class="container">
            <?= empty($title) ? $titulo : $title;?>
            <?= empty($description) ? $descripcion : $description;?>
        </div>
    </section>
    <section class="hero article" style="background-color: whitesmoke;">
        <div>
            <h2 style="text-align: center;" id="cpu">
                <?= empty($contentSubTitles[0]) ? $subTitulosContenido[0] : $contentSubTitles[0];?>
            </h2><br /><a href="https://latinospc.com/images/hardware/hw/mobo.jpg" title="Motherboard">
                <img src="https://latinospc.com/images/hardware/hw/mobo.webp" alt="image" /></a>
<!-- Make this image randomize with all the images from here, I really would like to build a fulls creen gallery page maybe, where the image has a right and a left button.
	under the main image there is a carrousel of more images. Then the Gallery section will be right under This gallery section.


-->
            <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** Computer Parts-->
        </div>

        <ul>
            <div class="fbg">

                <div tabindex="0" class="col c1 selection" style="padding-left: 10px;">
                    <a href="?cpu#cpu" title="CPU" style="color: #383a3b;">
                        <h2>
                            <?= empty($contentSubTitles[1]) ? $subTitulosContenido[0] : $contentSubTitles[1];?>
                    </a></h2>
                    </a>
                    <p>
                        <?= empty($content['CPU']) ? $contenido['CPU'] : $content['CPU'];?>
                    </p>
                    <a href="?cpu#scroll"><img src="https://latinospc.com/images/hardware/hw/cpu.jpg" class="rtl"
                            alt="AI computer" width="240px" title="image"></a>
                </div>

                <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** CPU-->
                <div tabindex="0" class="col c3 selection" style="padding-left: 10px;"><a style="color: #383a3b;"
                        href="?ram#ram" title="Memory Ram">
                        <h2>
                            <?= empty($contentSubTitles[2]) ? $subTitulosContenido[0] : $contentSubTitles[2];?>
                    </a></h2>
                    <p>
                        <?= empty($content['RAM']) ? $contenido['RAM'] : $content['RAM'];?>
                        <br />
                        <a href="?ram#scroll">
                            <img src="https://latinospc.com/images/hardware/hw/ram.jpg" alt="image" height="150"
                                title="RAM" />
                        </a>
                    </p>
                </div>

                <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** RAM-->
                <div tabindex="0" class="col c3 selection" style="padding-left: 10px;"><a style="color: #383a3b;"
                        href="?ssd#ssd" title="SSD">
                        <h2>
                            <?= empty($contentSubTitles[3]) ? $subTitulosContenido[0] : $contentSubTitles[3];?>
                    </a></h2>
                    <p>
                        <?= empty($content['HDD']) ? $contenido['HDD'] : $content['HDD'];?>
                        <br />
                        <a href="?ssd#scroll"><img src="https://latinospc.com/images/hardware/hw/memdrive.png"
                                alt="image" height="150" title="Memory Drive"></a>
                    </p>
                </div>

                <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** SSD-->
                <a rel="example_group" href="https://latinospc.com/images/websites/webcontent/2.jpg"
                    title="LAtinosPC Logo">
                    <img class="rtl" src="https://latinospc.com/images/hardware/hw/lapc.webp" alt="Image" width="240px"
                        title="image"></a>
                <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** Image-->
                <div tabindex="0" class="col c3 selection" style="padding-left: 10px;"><a href="?motherboard#board"
                        title="Motherboard" style="color: #383a3b;">
                        <h2>
                            <?= empty($contentSubTitles[4]) ? $subTitulosContenido[4] : $contentSubTitles[4];?>
                    </a></h2>
                    <p>
                        <?= empty($content['Motherboard']) ? $contenido['Motherboard'] : $content['Motherboard'];?>
                        <a href="?motherboard#scroll"><img src="https://latinospc.com/images/hardware/hw/mobo.jpg"
                                alt="image" height="100" title="Motherboard" /></a>
                    </p>
                </div>

                <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** Motherboard-->
                <div tabindex="0" class="col c3 selection" style="padding-left: 10px;"><a href="?psu#psu"
                        title="Power Supply" style="color:#383a3b;">
                        <h2>
                            <?= empty($contentSubTitles[5]) ? $subTitulosContenido[5] : $contentSubTitles[5];?>
                    </a></h2>
                    <p>
                        <?= empty($content['PSU']) ? $contenido['PSU'] : $content['PSU'];?>
                        <br />
                        <a href="?psu#scroll"><img src="https://latinospc.com/images/hardware/hw/psu.jpg" alt="image"
                                height="100" title="Power Supply Unit" /></a>
                    </p>

                </div>
                <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** PSU-->
                <div tabindex="0" class="col c3 selection" style="padding-left: 10px;"><a href="?gpu#gpu" title="GPU"
                        style="color: #383a3b;">
                        <h2>
                            <?= empty($contentSubTitles[6]) ? $subTitulosContenido[6] : $contentSubTitles[6];?>
                    </a></h2>
                    <p>
                        <?= empty($content['GPU']) ? $contenido['GPU'] : $content['GPU'];?>
                        <a href="?gpu#scroll">
                            <img src="https://latinospc.com/images/hardware/hw/gpu.png" alt="image" height="250"
                                title="Graphic Processing Unit" />
                        </a>
                    </p>

                </div>
                <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ ღ´** GPU-->
                <div tabindex="0" class="col c1 selection" style="padding-left: 10px;"><a href="?chassis#scroll"
                        title="Chassis" style="color: #383a3b;">
                        <h2>
                            <?= empty($contentSubTitles[7]) ? $subTitulosContenido[7] : $contentSubTitles[7];?>
                    </a></h2>
                    <p>
                        <?= empty($content['Chassis']) ? $contenido['Chassis'] : $content['Chassis'];?>
                        <a href="?chassis#scroll">
                            <span><img src="https://latinospc.com/images/hardware/case/case.webp" alt="image"
                                    height="150" title="Power Supply Unit" />
                            </span></a>
                    </p>

                </div>
                <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ *ღ´** Machine-->
                <div tabindex="0" class="col c2 selection" style="padding-left: 10px;"><a href="?cooling#cooler"
                        title="Coolers" style="color: #383a3b;">
                        <h2>
                            <?= empty($contentSubTitles[8]) ? $subTitulosContenido[8] : $contentSubTitles[8];?>
                    </a></h2>
                    <p>
                        <?= empty($content['Coolers']) ? $contenido['Coolers'] : $content['Coolers'];?>
                        <br />
                        <a href="?cooling#scroll"><span><img src="https://latinospc.com/images/hardware/hw/cooler.jpg"
                                    alt="image" height="100" title="Coolers" /></span></a>
                    </p>

                </div>
                <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** #I/O -->
                <div tabindex="0" class="col c3 selection" style="padding-left: 10px;"><a
                        href="https://www.tutorialspoint.com/operating_system/os_io_hardware.htm" title="Input/output"
                        style="color: #383a3b;">
                        <h2>
                            <?= empty($contentSubTitles[9]) ? $subTitulosContenido[9] : $contentSubTitles[9];?>
                    </a></h2>
                    <p>
                        <?= empty($content['I/O']) ? $contenido['I/O'] : $content['I/O'];?>
                    </p>
                </div>
                <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** #I/O-->

                <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** #peripherals-->
                <div tabindex="0" class="col c3 selection" style="padding-left: 10px;"><a href="#peripherals"
                        title="Peripheral Devices" style="color: #383a3b;">
                        <h2>
                            <?= empty($contentSubTitles[10]) ? $subTitulosContenido[10] : $contentSubTitles[10];?>
                    </a></h2>
                    <p>
                        <?= empty($content['Peripherals']) ? $contenido['Peripherals']: $content['Peripherals'];?>
                    </p>
                </div>

            </div>
        </ul>
        <div class="spacer"></div>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/mouse.jpg" title="Mouse"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/keys.jpg" title="Keyboard"></a>
        <!--https://unsplash.com/photos/mFtcZzLruCQ-->
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/display.jpg" title="Display"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/memory.jpg"
            title="External Memory Drives"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/pci.jpg" title="PCI Cards"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/psu.jpg"
            title="Power Supply"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/cooler.jpg" title="Cooling"></a>
        <!--https://unsplash.com/photos/5fZqHF21CIw-->
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/gpu.jpg" title="GPU"></a>
        <!--https://unsplash.com/photos/d6gyCYQU1vc-->
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/scanners.jpg"
            title="Scanners"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/printer.jpg"
            title="Printers"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/c_controllers.jpg"
            title="Console Controllers"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/joystick.jpg"
            title="Joysticks"></a>
        <!--https://unsplash.com/photos/V5hAryReZzo-->
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/tablet.jpg" title="Tablets"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/microphone.jpg"
            title="Microphones"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/headset.jpg"
            title="Headsets"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/headphones.jpg"
            title="Headphones"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/audio_mixer.jpg"
            title="Audio Mixers"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/controller.jpg"
            title="Controllers"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/uniform.jpg"
            title="Gaming Uniforms"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/pen.jpg"
            title="Pens, Pencils and Tablets"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/chairs.jpg" title="Chairs"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/desk.jpg" title="Desks"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/anti-slip-mat.jpg"
            title="Anti-Slip Mats"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/speakers.jpg"
            title="Speakers and Subwoofers"></a>
        <div class="clr"></div>
    </section>
</article>

<article class="fullbar">
    <section class="hero article" style="background-color: wheat;">
        <a href="#scroll" class="selection_2 center">
            <h2 id="peripherals" class="spacer_shape underConstruction card2">
                <?= empty($peripherals[24]) ? $perifericos[24] : $peripherals[24];?>
            </h2>
        </a>
        <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ღ´** Personal Computers -->
        
            <style>
            .newspaper2 li {
                font-size: x-large;
                line-height: 1.5;
                break-inside: avoid;
            }

            .newspaper2 li a {
                width: 100%;
            }
            </style>
        <ul style="list-style: none;">
            <section class="newspaper2">
                <?php
			function hw_Link($hw, $en, $es) {
				echo $hw === 'en' ? $en : ($hw === 'es' ? $es : 'ERROR');
			}
			function hw_alt($hw, $en, $es) {
				echo $hw === 'en' ? $en : ($hw === 'es' ? $es : 'ERROR');
			}
			function hw_title($hw, $en, $es) {
				echo $hw === 'en' ? $en : ($hw === 'es' ? $es : 'ERROR');
			}
			?>
                <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ღ´**
  		I have to build a links array, that will contain alts for images, titles for links and the href in the link within the page.
				Some alts are different from the titles. and the content of the element. mouse and keyboard use the same function.
		-->
                <?php  $display = 	0;
								$cS='card2 selection';//This is the Style Class for the Peripheral Cards.
									/*hw_alt($hw, $en='Display' , $es='Pantalla'),
									hw_title($hw, $en='Computer Monitor' , $es='Pantalla de la computadora')];*/
									?>
                <li><a tabindex="0" href="<?= hw_Link($hw, $en='?mouse' , $es='?ratón'); ?>">
                        <?= $mouse = empty($peripherals[0]) ? $perifericos[0] : $peripherals[0];?>
                        <br /><img src="https://latinospc.com/images/hardware/hw/mouse.jpg" width="112" height="112"
                            alt="<?= $mouse;?>" title="<?= $mouse;?>" class="<?=$cS?>"></a></li>

                <li><a tabindex="0" href="<?= hw_Link($hw, $en='?keyboard' , $es='?teclado'); ?>">
                        <?= $keyboard = empty($peripherals[1]) ? $perifericos[1] : $peripherals[1];?>
                        <br /><img src="https://latinospc.com/images/hardware/hw/keyboard.jpg" width="112" height="112"
                            alt="<?= $keyboard;?>" title="<?= $keyboard;?>" class="<?=$cS?>"></a></li>

                <li>
                    <a tabindex="0" href="<?= hw_Link($hw, $en='?monitor', $es='?pantalla'); ?>">
                        <?= empty($peripherals[2]) ? $perifericos[2] : $peripherals[2]; ?>
                        <br />
                        <img src="https://latinospc.com/images/hardware/hw/monitor.jpg" width="112" height="112"
                            alt="<?= hw_alt($hw, $en='Display', $es='Pantalla'); ?>"
                            title="<?= hw_title($hw, $en='Computer Monitor', $es='Pantalla de la computadora'); ?>"
                            class="<?=$cS?>">
                    </a>
                </li>

                <li>
                    <a tabindex="0" href="<?= hw_Link($hw, $en='?p_memory', $es='?memoria_externa'); ?>">
                        <?= empty($peripherals[3]) ? $perifericos[3] : $peripherals[3]; ?>
                        <br />
                        <img src="https://latinospc.com/images/hardware/hw/portable.jpg" width="112" height="112"
                            alt="<?= hw_alt($hw, $en='External Drives', $es='Memoria Externa'); ?>"
                            title="<?= hw_title($hw, $en='External Drives', $es='Memoria Externas'); ?>"
                            class="<?=$cS?>">
                    </a>
                </li>

                <li>
                    <a tabindex="0" href="<?=hw_Link($hw, $en='?pci' , $es='?tarjeta_pci');?>">
                        <?= empty($peripherals[4]) ? $perifericos[4] : $peripherals[4];?>
                        <br />
                        <img src="https://latinospc.com/images/hardware/hw/soundcard.jpg" width="112" height="112"
                            alt="<?= hw_alt($hw, $en='PCI Cards', $es='Tarjetas PCI'); ?>"
                            title="<?= hw_title($hw, $en='Peripheral Component Interconnect Cards', $es='Componente Periférico Interconexión'); ?>"
                            class="<?=$cS?>"></a>
                </li>

                <li>
                    <a tabindex="0" href="<?= hw_Link($hw, $en='?psu', $es='?fuente_de_poder'); ?>">
                        <?= empty($peripherals[5]) ? $perifericos[5] : $peripherals[5]; ?>
                        <br />
                        <img src="https://latinospc.com/images/hardware/hw/psu2.png" width="112" height="112"
                            alt="<?= hw_alt($hw, $en='Power Supply', $es='Fuente de Poder'); ?>"
                            title="<?= hw_title($hw, $en='PSU', $es='Fuente de Poder'); ?>" class="<?= $cS; ?>">
                    </a>
                </li>

                <li>
                    <a tabindex="0" href="<?= hw_Link($hw, $en='?cooling', $es='?enfriamiento'); ?>">
                        <?= empty($peripherals[6]) ? $perifericos[6] : $peripherals[6]; ?>
                        <br />
                        <img src="https://latinospc.com/images/hardware/hw/cooler.jpg" width="112" height="112"
                            alt="<?= hw_alt($hw, $en='Cooling', $es='Enfriamiento'); ?>"
                            title="<?= hw_title($hw, $en='Cooling', $es='Enfriamiento'); ?>" class="<?= $cS; ?>">
                    </a>
                </li>

                <li>
                    <a tabindex="0" href="<?= hw_Link($hw, $en='?gpu', $es='?tarjeta_grafica'); ?>">
                        <?= empty($peripherals[7]) ? $perifericos[7] : $peripherals[7]; ?>
                        <br />
                        <img src="https://latinospc.com/images/hardware/hw/gpu.png" width="112" height="112"
                            alt="<?= hw_alt($hw, $en='GPU', $es='Tarjeta Gráfica'); ?>"
                            title="<?= hw_title($hw, $en='GPU', $es='Tarjeta Gráfica'); ?>" class="<?= $cS; ?>">
                    </a>
                </li>

                <li>
                    <a tabindex="0" href="<?= hw_Link($hw, $en='?scanner', $es='?escáner'); ?>">
                        <?= empty($peripherals[8]) ? $perifericos[8] : $peripherals[8]; ?>
                        <br />
                        <img src="https://latinospc.com/images/hardware/hw/scanner.png" width="112" height="112"
                            alt="<?= hw_alt($hw, $en='Scanners', $es='Escáneres'); ?>"
                            title="<?= hw_title($hw, $en='Scanners', $es='Escáneres'); ?>" class="<?= $cS; ?>">
                    </a>
                </li>

                <li>
                    <a tabindex="0" href="<?= hw_Link($hw, $en='?printer', $es='?impresoras'); ?>">
                        <?= empty($peripherals[9]) ? $perifericos[9] : $peripherals[9]; ?>
                        <br />
                        <img src="https://latinospc.com/images/hardware/hw/printer.png" width="112" height="112"
                            alt="<?= hw_alt($hw, $en='Printers', $es='Impresoras'); ?>"
                            title="<?= hw_title($hw, $en='Printers', $es='Impresoras'); ?>" class="<?= $cS; ?>">
                    </a>
                </li>

                <li>
                    <a tabindex="0" href="<?= hw_Link($hw, $en='?cc', $es='?mando_de_consola'); ?>">
                        <?= empty($peripherals[10]) ? $perifericos[10] : $peripherals[10]; ?>
                        <br />
                        <img src="https://latinospc.com/images/hardware/hw/controllers.png" width="112" height="112"
                            alt="<?= hw_alt($hw, $en='Controllers', $es='Mandos de Consola'); ?>"
                            title="<?= hw_title($hw, $en='Video Game Controllers', $es='Mandos de Videojuego'); ?>"
                            class="<?= $cS; ?>">
                    </a>
                </li>

                <li>
                    <a tabindex="0" href="<?= hw_Link($hw, $en='?joystick', $es='?joystick'); ?>">
                        <?= empty($peripherals[11]) ? $perifericos[11] : $peripherals[11]; ?>
                        <br />
                        <img src="https://latinospc.com/images/hardware/hw/joystick.png" width="112" height="112"
                            alt="<?= hw_alt($hw, $en='Joysticks', $es='Joysticks'); ?>"
                            title="<?= hw_title($hw, $en='Joysticks', $es='Joysticks'); ?>" class="<?= $cS; ?>">
                    </a>
                </li>

                <li>
                    <a tabindex="0" href="<?= hw_Link($hw, $en='?tablet', $es='?tabletas'); ?>">
                        <?= empty($peripherals[12]) ? $perifericos[12] : $peripherals[12]; ?>
                        <br />
                        <img src="https://latinospc.com/images/hardware/hw/tablets.png" width="112" height="112"
                            alt="<?= hw_alt($hw, $en='Tablets', $es='Tabletas'); ?>"
                            title="<?= hw_title($hw, $en='Tablets', $es='Tabletas'); ?>" class="<?= $cS; ?>">
                    </a>
                </li>

                <li>
                    <a tabindex="0" href="<?= hw_Link($hw, $en='?micro', $es='?micrófonos'); ?>">
                        <?= empty($peripherals[13]) ? $perifericos[13] : $peripherals[13]; ?>
                        <br />
                        <img src="https://latinospc.com/images/hardware/hw/mic.jpg" width="112" height="112"
                            alt="<?= hw_alt($hw, $en='Microphone', $es='Micrófono'); ?>"
                            title="<?= hw_title($hw, $en='Microphone', $es='Micrófono'); ?>" class="<?= $cS; ?>">
                    </a>
                </li>

                <li>
                    <a tabindex="0" href="<?= hw_Link($hw, $en='?headset', $es='?headsets'); ?>">
                        <?= empty($peripherals[14]) ? $perifericos[14] : $peripherals[14]; ?>
                        <br />
                        <img src="https://latinospc.com/images/hardware/hw/headset.png" width="112" height="112"
                            alt="<?= hw_alt($hw, $en='Headsets', $es='Headsets'); ?>"
                            title="<?= hw_title($hw, $en='Headsets', $es='Headsets'); ?>" class="<?= $cS; ?>">
                    </a>
                </li>

                <li>
                    <a tabindex="0" href="<?= hw_Link($hw, $en='?headphone', $es='?audífonos'); ?>">
                        <?= empty($peripherals[15]) ? $perifericos[15] : $peripherals[15]; ?>
                        <br />
                        <img src="https://latinospc.com/images/hardware/hw/headphones.png" width="112" height="112"
                            alt="<?= hw_alt($hw, $en='Headphones', $es='Audífonos'); ?>"
                            title="<?= hw_title($hw, $en='Headphones', $es='Audífonos'); ?>" class="<?= $cS; ?>">
                    </a>
                </li>

                <li>
                    <a tabindex="0" href="<?= hw_Link($hw, $en='?audiomixer', $es='?mezcladora_de_audio'); ?>">
                        <?= empty($peripherals[16]) ? $perifericos[16] : $peripherals[16]; ?>
                        <br />
                        <img src="https://latinospc.com/images/hardware/hw/mixer.jpg" width="112" height="112"
                            alt="<?= hw_alt($hw, $en='Audio Mixer', $es='Mezcladora de Audio'); ?>"
                            title="<?= hw_title($hw, $en='Audio Mixer', $es='Mezcladora de Audio'); ?>"
                            class="<?= $cS; ?>">
                    </a>
                </li>

                <li>
                    <a tabindex="0" href="<?= hw_Link($hw, $en='?controller', $es='?controladores'); ?>">
                        <?= empty($peripherals[17]) ? $perifericos[17] : $peripherals[17]; ?>
                        <br />
                        <img src="https://latinospc.com/images/hardware/hw/controller.jpg" width="112" height="112"
                            alt="<?= hw_alt($hw, $en='Controllers', $es='Controladores'); ?>"
                            title="<?= hw_title($hw, $en='Controllers', $es='Controladores'); ?>" class="<?= $cS; ?>">
                    </a>
                </li>

                <li>
                    <a tabindex="0"
                        href="<?= hw_Link($hw, $en='?team_uniformity_authority', $es='?uniformes_gaming'); ?>">
                        <?= empty($peripherals[18]) ? $perifericos[18] : $peripherals[18]; ?>
                        <br />
                        <img src="https://latinospc.com/images/hardware/hw/uniforms.jpg" width="112" height="112"
                            alt="<?= hw_alt($hw, $en='Uniforms', $es='Uniformes'); ?>"
                            title="<?= hw_title($hw, $en='Gaming Uniforms', $es='Uniformes Gaming'); ?>"
                            class="<?= $cS; ?>">
                    </a>
                </li>

                <li>
                    <a tabindex="0" href="<?= hw_Link($hw, $en='?pencil', $es='?lápices_plumas_tabletas'); ?>">
                        <?= empty($peripherals[19]) ? $perifericos[19] : $peripherals[19]; ?>
                        <br />
                        <img src="https://latinospc.com/images/hardware/hw/pensandpencils.jpg" width="112" height="112"
                            alt="<?= hw_alt($hw, $en='Pens and Pencils and Stylus', $es='Lápices, Plumas y Tabletas'); ?>"
                            title="<?= hw_title($hw, $en='Pens and Pencils and Stylus', $es='Lápices, Plumas y Tabletas'); ?>"
                            class="<?= $cS; ?>">
                    </a>
                </li>

                <li>
                    <a tabindex="0" href="<?= hw_Link($hw, $en='?chair', $es='?sillas'); ?>">
                        <?= empty($peripherals[20]) ? $perifericos[20] : $peripherals[20]; ?>
                        <br />
                        <img src="https://latinospc.com/images/hardware/hw/chairs.jpg" width="112" height="112"
                            alt="<?= hw_alt($hw, $en='Chairs', $es='Sillas'); ?>"
                            title="<?= hw_title($hw, $en='Chairs', $es='Sillas'); ?>" class="<?= $cS; ?>">
                    </a>
                </li>

                <li>
                    <a tabindex="0" href="<?= hw_Link($hw, $en='?desk', $es='?escritorios'); ?>">
                        <?= empty($peripherals[21]) ? $perifericos[21] : $peripherals[21]; ?>
                        <br />
                        <img src="https://latinospc.com/images/hardware/hw/desk.jpg" width="112" height="112"
                            alt="<?= hw_alt($hw, $en='Desks', $es='Escritorios'); ?>"
                            title="<?= hw_title($hw, $en='Desks', $es='Escritorios'); ?>" class="<?= $cS; ?>">
                    </a>
                </li>

                <li>
                    <a tabindex="0"
                        href="<?= hw_Link($hw, $en='?antislipmats', $es='?alfombrillas_antideslizantes'); ?>">
                        <?= empty($peripherals[22]) ? $perifericos[22] : $peripherals[22]; ?>
                        <br />
                        <img src="https://latinospc.com/images/hardware/hw/anti-slip-mat.jpg" width="112" height="112"
                            alt="<?= hw_alt($hw, $en='Anti Slip Mats', $es='Alfombrillas Antideslizantes'); ?>"
                            title="<?= hw_title($hw, $en='Anti Slip Mats', $es='Alfombrillas Antideslizantes'); ?>"
                            class="<?= $cS; ?>">
                    </a>
                </li>

                <li>
                    <a tabindex="0"
                        href="<?= hw_Link($hw, $en='?speakers_and_subwoofers', $es='?bocinas_y_subwoofers'); ?>">
                        <?= empty($peripherals[23]) ? $perifericos[23] : $peripherals[23]; ?>
                        <br />
                        <img src="https://latinospc.com/images/hardware/hw/speakers.jpg" width="112" height="112"
                            alt="<?= hw_alt($hw, $en='Speakers and Subwoofers', $es='Bocinas y Subwoofers'); ?>"
                            title="<?= hw_title($hw, $en='Speakers and Subwoofers', $es='Bocinas y Subwoofers'); ?>"
                            class="<?= $cS; ?>">
                    </a>
                </li>
                <!-- Photo by Rosen Genov from Pexels: https://www.pexels.com/photo/a-presonus-speaker-system-4295360/ --></a>
            </section>
        </ul>
        
    </section>
</article><br /><!-- Personal Computers(-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ ღ´** -->
<!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻ღ´** -->