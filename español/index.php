<?php
$titulo="¿Quienes somos?";
$dir = '../';
$palabrasClave ='<meta name="keywords" content="California, Condado de Los Ángeles, Condado de San Bernardino, Condado de Riverside, Condado de Orange, servicio y reparación de computadoras">';
$descripción = '<meta name="description" content="Queremos brindar a las familias e individuos la experiencia de un sistema informático completamente funcional; laptops y desktops. Ofrecemos principalmente servicios a domicilio y remotos, pero pronto trabajaremos en una ubicación física.">';

function content(){echo $_SERVER['REQUEST_URI'];
    $titulo = '<h2>Acerca De nosotros</h2>';
    $empiezo = '<p>Empezamos en 2009 con un solo técnico; Omar, y desde entonces tenemos un objetivo,
                    aquí en LatinosPC queremos brindar a familias e individuos la experiencia
                    de un sistema informático completamente funcional; laptops y computadoras de escritorio. Ofrecemos
                    principalmente servicios a domicilio y remotos, pero pronto trabajaremos en una ubicación física.
                    Omar comenzó su carrera mientras aún estaba en la preparatoria,
                    asistiendo a clases nocturnas en una escuela para adultos, y después fue a
                    la universidad. Su carrera en informática comenzó ayudando a su familia y amigos,
                    arreglando sus computadoras, y luego a los amigos de sus amigos y sus familias.
                    Después de trabajar con computadoras en casa, comenzamos a trabajar con pequeños
                    negocios locales y sus necesidades informáticas diarias. Y hemos estado tratando de mantenernos ocupados desde 2009.
                </p>';

    $garantia ='<h2>100% Satisfaccion Garantizada | Paquete de Servicio de 90 Días - Incluido</h2>
                    <div class="clr"></div>
                        <a rel="example_group" href="https://latinospc.com/images/button.jpg" title="Tool Box" alt="LAPC">
                          <img src="https://latinospc.com/images/s_button.webp" width="263" height="146" alt="image" class="lr" />
                        </a>
                        <h3>LAtinosPC se ha expandido a algunos otros campos de la industria y llevaremos el mismo nivel de dedicación a cada proyecto. ¡Construimos sitios web básicos personalizados con un diseño único a una tarifa fija!</h3>
                        <h2>Estamos ubicados en la ciudad de Pomona, y viajamos a los condados de Los Ángeles, San Bernardino, Riverside y Orange.</h2>
                        <a href="?leer_mas#info" class="rm">
                          <h3>Lee más</h3>
                        </a>
                        <div class="clr"></div>';

                        $servicios = [
                          'titulo' => [
                              'Servicio, reparación y venta de sistemas informáticos y configuraciones de sitios web',
                              'Servicios, en el lugar y remotos.',
                              'Servicios básicos',
                              'Planes recurrentes',
                              'Contratos gestionados',
                              'Recomendaciones de software y hardware',
                              'También servicios informáticos para problemas que podrían resolverse por teléfono, en ocasiones puede ser necesaria una visita',
                              'En su lugar de trabajo',
                              'Productos relacionados con computadoras'
                          ],
                          'links' => [
                              '<a href="../software#software">Software</a>', '<a href ="../hardware#article">Hardware</a>'
                          ],
                      ];

                      $mision = [
                        'Nuestra Misión',

                        'metas' => [
                            'Nuestro objetivo es brindarle a usted y a su empresa un servicio excepcional. Estamos dedicados a mejorar su experiencia a través de un marketing efectivo, estrategias de retención amigables para el cliente y el mantenimiento de un control de calidad de primer nivel.',
                            'Estamos dedicados a simplificar la tecnología para usted. Nuestra especialización brinda servicios informáticos personalizados para usuarios domésticos y garantiza una experiencia sin problemas. Nuestro soporte remoto está diseñado para ser fácil de usar, haciendo que los problemas tecnológicos sean cosa del pasado. Además, nos destacamos por construir relaciones comerciales sólidas y liderar la innovación en soluciones tecnológicas, haciendo que la tecnología sea más sencilla y accesible para usted y los usurarios.'
                        ],

                        'compania' => [
                            'Historia de la Compañía',
                            'LAtinosPC se fundó en 2021, inicialmente como unipersonal, con planes de reconfiguración en una corporación-S en un futuro cercano. El fundador Omar ha pasado por muchos cambios en el negocio. La idea de esta empresa es simple, alcanzable y rentable.'
                        ],

                        'tech' => [
                            'Comenzó su carrera temprano en la vida, su hogar de la infancia era un negocio familiar dirigido "desde casa" fabricante de telas de fibra acrílica. Las anécdotas cuentan de él. Jugando con los telares y las máquinas de tela, fingiendo que les daba servicio y cuidaba de las maquinas. Pasó el tiempo, la tecnología mejoró en su vecindario y Omar encontró una curiosidad por los componentes electrónicos del taller textil.',
                            'También alrededor de este tiempo, su familia tuvo una NES para Navidad, era la versión japonesa de la consola, también alrededor de este tiempo las maquinitas en salones de juego o en tiendas eran muy populares; -así que la mayoría de las mesadas de Omar como niño se gastaban en los diferentes lugares de maquinitas alrededor de su vecindario. Las mejores eran las que estaban dentro del centro comercial de la ciudad, dentro de este lugar también había un cine y muchos comercios.',
                            'Durante la escuela de educación secundaria, Omar asistió a un programa escolar en sábado muy cerca de su casa, tenía que tomar un autobús de transporte público para ir a la escuela. Por lo que Omar recuerda (ya que fue hace mucho tiempo), su escuela se dividía en 3 grupos principales, principiantes, intermedios y avanzados. Omar estaba en el grupo de principiantes; allí aprendió a usar el sistema operativo de una computadora sin el uso de una interfaz gráfica de usuario. Toda la pantalla era azul y las letras eran blancas.',
                            'Con comandos de computadora, los estudiantes le decían a la computadora lo que querían hacer. Omar recuerda principalmente usar las capacidades de procesamiento de texto de la PC en ese momento, su clase era muy agradable porque cada estudiante tenía su propia PC.',
                            'Más tarde en la vida, su familia compró una computadora cargada con Windows 95. Y toneladas de disquetes ya en carpetas dentro de la memoria de la computadora. En resumen, Omar jugó Doom en su PC con Windows 95 y muchas más copias de juegos antiguos. No había internet en la casa, así que aparte del trabajo escolar y los juegos, la PC se usó para aprender un software de arte que incluía el sistema operativo.',
                            'Este tipo de arte era muy popular en ese momento; consistía en abrir Paint y seleccionar el mejor pincel, la habilidad del artista y el pincel creaban un dibujo contemporáneo abstracto que luego se rellenaría de manera multicolor con la herramienta de cubo de pintura. Si el artista tenía la suerte, este arte se transfería del mundo digital a nuestra realidad física a través de las impresoras. También todos dibujaban el Sol con gafas de sol en sus dibujos de paisajes.',
                            'Después de muchos años, cuando llegó el momento de actualizar la PC, su familia consiguió una máquina con Windows ME, con un CD-ROM y la capacidad de reproducir juegos de 16 bits de forma nativa. Algún tiempo después, cuando Omar se familiarizó más con las computadoras, su familia se actualizó a una máquina Dell cargada con Windows XP, después se le instalaría una tarjeta de video ATI x700. Más tarde Omar construiría su primera máquina para un cliente y esta tarjeta gráfica sería instalada como componente principal. La tarjeta se instalo un Arctic Cooler del mercado de repuestos, era un disipador de calor más grande que el original, la tarjeta era muy bonita, tenia un chasis de plástico azul transparente.',
                            'El primer encuentro de Omar con el mundo de las reparaciones se produjo cuando estaba jugando dentro de la carpeta de Windows, instalando y desinstalando programas, y eliminando archivos y carpetas enteras. Entonces, por supuesto, después del último reinicio, la computadora saludaría a Omar con una pantalla completamente color negro con letras blancas, diciéndole que no había ningún medio de arranque disponible. Así que hizo lo que haría cualquier persona, contratar a un experto. Después del diagnóstico inicial del experto de una tienda de electrónicos local de renombre, le dijeron que necesitaban investigar más el problema y que costaría más de $100 solo el diagnóstico completo de la máquina. Y después de la reparación, Omar habría sido facturado por reparaciones, piezas y demás, el coste era demasiado para Omar. Entonces decidió que era mejor llevar la PC a casa y pedirle a su primo más cercano su CD de instalación de su computadora. Así que eso fue lo que hizo, Omar terminó arreglando a medias su computadora. Estaba desconcertado por la nueva carpeta Oldwindows. No tenía idea de por qué estaba allí. Pero estaba feliz porque la computadora estaba funcionando de nuevo. Después de la copia de seguridad inicial, la historia de Omar y LAtinosPC comenzó allí mismo a la edad de 14 años.'
                        ],

                        'objetivo' => [
                            'Objetivos',
                            'Nuestro objetivo principal es <b>brindar el mejor servicio</b> disponible a la comunidad a un precio competitivo.<br /><br />
                            Aumentar significativamente nuestra participación en el mercado, para que <em>LAtinosPC</em> sea un nombre común.<br /><br />
                            Crecimiento constante de ventas, desde el inicio hasta un tercer año.<br /><br />
                            Conseguir que el 40% de nuestros clientes sean recurrentes mediante un servicio excepcional.'
                        ],
/* Añadiduras para el Futuro
  Objetivos relacionados con la innovación y el desarrollo:
  Mantenernos a la vanguardia de la tecnología: Invertir en investigación y desarrollo para ofrecer productos y servicios innovadores que se adapten a las últimas tendencias del mercado.
  Desarrollar soluciones tecnológicas personalizadas: Ofrecer soluciones a medida que resuelvan problemas específicos de nuestros clientes, fortaleciendo así nuestro valor agregado.
  Crear una cultura de innovación: Fomentar un ambiente de trabajo que fomente la creatividad y la generación de nuevas ideas.
  Objetivos relacionados con el cliente y la experiencia de usuario:
  Mejorar continuamente la satisfacción del cliente: Implementar programas de feedback y encuestas para conocer las opiniones de nuestros clientes y actuar en consecuencia.
  Crear una comunidad en línea: Fomentar la interacción entre nuestros clientes a través de foros, redes sociales y eventos virtuales.
  Ofrecer un soporte técnico de excelencia: Brindar asistencia técnica rápida y eficiente a nuestros clientes, resolviendo sus dudas y problemas de manera eficaz.
  Objetivos relacionados con la sostenibilidad y la responsabilidad social:
  Reducir nuestra huella de carbono: Implementar prácticas sostenibles en nuestras operaciones y promover el uso responsable de la tecnología.
  Apoyar a la comunidad: Colaborar con organizaciones locales y promover la educación tecnológica en nuestra comunidad.
  Objetivos financieros:
  Aumentar el margen de beneficio: Optimizar nuestros procesos internos y reducir costos para mejorar nuestra rentabilidad.
  Diversificar nuestras fuentes de ingresos: Explorar nuevas líneas de negocio y canales de distribución para reducir nuestra dependencia de un solo producto o servicio.
  Al incorporar estos objetivos adicionales, podrás construir una estrategia más completa y sólida para tu empresa.

  Para ayudarte a priorizar estos objetivos, te sugiero que te preguntes:

  ¿Cuáles son los mayores desafíos que enfrenta tu empresa actualmente?
  ¿Cuáles son las oportunidades de crecimiento más prometedoras en el mercado?
  ¿Qué recursos tienes disponibles para alcanzar estos objetivos?
  Recuerda que tus objetivos deben ser SMART: Específicos, Medibles, Alcanzables, Relevantes y con un Tiempo definido.

  ¿Te gustaría trabajar en alguno de estos objetivos en particular? Con gusto puedo ayudarte a desarrollar estrategias específicas para alcanzarlos.

  Además, podríamos explorar juntos temas como:

  Análisis de la competencia: Identificar las fortalezas y debilidades de tus competidores.
  Segmentación de mercado: Definir tu público objetivo de manera más precisa.
  Estrategias de marketing: Desarrollar campañas de marketing efectivas para aumentar tu visibilidad.
*/

                        'mision' => [
                            'Misión',
                            'Nuestro objetivo es establecer el estándar para las soluciones informáticas en sitio y el desarrollo de paginas web, a través de un servicio rápido en cualquier lugar. Nuestros clientes siempre recibirán atención personal personalizada a un precio muy competitivo. Además, ofreceremos la más alta calidad de servicio al cliente disponible. Nuestros empleados recibirán capacitación extensa, un excelente lugar para trabajar, salarios y beneficios justos, e incentivos para que usen su propio buen juicio para resolver los problemas que de buena forma traen nuestros clientes.'
                        ],

                        'llaves' => [
                            'Claves',
                            'Establecer una identidad de marca y generar reconocimiento de marca a través del marketing y las relaciones de servicio al cliente incomparables.',
                            'Capacidad de respuesta: ser un paramédico informático de guardia con tiempo de respuesta rápido.',
                            'Cumplir con los plazos para proyectos web y/o de red.',
                            'Calidad: hacer el trabajo bien a la primera, ofreciendo una garantía del 100%.',
                            'Relaciones: desarrollar clientes leales, repetidos -y amistades.'
                        ]
                    ];

                    $compania = [
                      'Propiedad de la Compañía',
                      'LAtinosPC se concibió inicialmente como una pequeña empresa en el hogar del propietario. Sin embargo, los comentarios recientes de nuestro alcance de marketing han sugerido un potencial de ventas mucho más alto de lo que originalmente se imaginó, y LAtinosPC se reformará como una S Corporation. Este cambio proporcionará protección legal adicional para el propietario y también simplificará las operaciones financieras de la empresa (a medida que ampliamos el personal a 5 personas en los próximos tres años), la capacidad de alquilar un espacio separado con oficinas y comprar vehículos, hardware y software para la empresa.
                      <br />El propietario actual, Omar García, tiene más de 10 años de experiencia en los campos de ventas a domicilio, soporte técnico, desarrollo web, redes, capacitación y reparación de computadoras. Omar también ha operado un negocio similar rentable bajo una asociación en Ontario Ca y comprende las necesidades informáticas de las pequeñas empresas y su clientela que adopta rápidamente la tecnología.',
                      'Tarjetas de Visita'
                  ];



    include_once('../content/about.php');
}
include_once('../code/funciones.php');
include ('../code/html_structure/page.php');
?>