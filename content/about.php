<style>
    .hero2 {
    background-color: #ffd50055;  /*CYBER YELLOW*/
    color: black;
    text-align: center;
    font-size: 1.4em;
}

article h2{
    text-align: center;
}

.container {
    width: 85%;
    margin: auto;
    font-size: 1.1em;
}

.container dt a:hover{
    text-decoration: none;
    color: #3a86e2;
}
.hero4 {
    background-color: whitesmoke;
    color: black;
    padding-left:2%;
    font-size: 1.1em;
}
/* Services section */
.services {
    background-color: #fff;
    color: #333;
    padding-top:3%
}

.services h2 {
    text-align: center;
}

.services ul {
    list-style: disc;
    padding-left: 10%;
}
ul li{
    font-size: 1.1em;
}
</style>
<section class="hero2">
        <div class="container">
            <?= empty($title) ? $titulo : $title; ?>

            <a rel="example_group" href="https://latinospc.com/images/latinospc.png" title="LAtinosPC" alt="LAPC">
                <img src="https://latinospc.com/images/s_latinospc.webp" width="263" height="186" alt="image"
                    class="fr" /></a>
            <?= empty($start) ? $empiezo : $start; ?>
        </div>
    </section>

    <!-- Sección de Servicios -->
    <section class="services">
        <div class="container">
            <?= empty($guarantee) ? $garantia : $guarantee; ?>
        </div>
    </section>
    <?php
    if(isset($_GET['read_more'])||isset($_GET['leer_mas'])){
      ?>
    <article class="hero4" id="info" style="padding-bottom:2%">
        <h2>
            <?= empty($services) ? $servicios['titulo'][0] : $services['title'][0]; ?></h2>


        <p><?= empty($services) ? $servicios['titulo'][1] : $services['title'][1]; ?></p>
        <p>
        <ul style="font-size: 18px">
            <li><?= empty($services) ? $servicios['titulo'][2] : $services['title'][2]; ?></li>
            <!--LINK TO A PAGE IN THE SERVICES-->
            <li><?= empty($services) ? $servicios['titulo'][3] : $services['title'][3]; ?></li>
            <!--LINK TO A PAGE IN THE SERVICES-->
            <li><?= empty($services) ? $servicios['titulo'][4] : $services['title'][4]; ?></li>
        </ul>
        </p>
        <!--LINK TO A PAGE IN THE SERVICES-->
        <h2><?= empty($services) ? $servicios['titulo'][5] : $services['title'][5]; ?></h2>
        <p>
            <?= empty($services) ? $servicios['titulo'][6] : $services['title'][6]; ?>.<br /><br />
        <?= empty($services) ? $servicios['titulo'][7] : $services['title'][7]; ?>:<br />
        <?= empty($services) ? $servicios['links'][0] : $services['links'][0]; ?>,
        <?= empty($services) ? $servicios['links'][1] : $services['links'][1]; ?>,
        <?= empty($services) ? $servicios['titulo'][8] : $services['title'][8]; ?>.
        </p>
        <h2><?= empty($mission) ? $mision[0]: $mission[0]; ?></h2>
        <p><?= empty($mission) ? $mision['metas'][0]: $mission['goals'][0]; ?>
        </p>
        <p>
            <?= empty($mission) ? $mision['metas'][1]: $mission['goals'][1]; ?>
        </p>
        <h2><?= empty($mission) ? $mision['compania'][0]: $mission['company'][0]; ?></h2>
        <p><?= empty($mission) ? $mision['compania'][1]: $mission['company'][1]; ?>
        </p>
        <details style="padding:2%;"><summary style="cursor:pointer;float:left;margin-right:2%;">
        <h2 id="tech">Omar</h2>
    </summary>
        <p>
            <?= empty($mission) ? $mision['tech'][0]: $mission['tech'][0]; ?>
        </p>
        <p>
            <?= empty($mission) ? $mision['tech'][1]: $mission['tech'][1]; ?>
        </p>
        <p>
            <?= empty($mission) ? $mision['tech'][2]: $mission['tech'][2]; ?>
        </p>
        <p>
            <?= empty($mission) ? $mision['tech'][3]: $mission['tech'][3]; ?>
        </p>
        <p>
            <?= empty($mission) ? $mision['tech'][4]: $mission['tech'][4]; ?>
        </p>
        <p>
            <?= empty($mission) ? $mision['tech'][5]: $mission['tech'][5]; ?>
        </p>
        <p>
            <?= empty($mission) ? $mision['tech'][6]: $mission['tech'][6]; ?>
        </p>
        <p>
            <?= empty($mission) ? $mision['tech'][7]: $mission['tech'][7]; ?>
        </p>
    </details><br/>
        <ul>
            <h2>1.1
                <?= empty($mission) ? $mision['objetivo'][0]: $mission['objective'][0]; ?>
            </h2>
        </ul>
        <p>
            <?= empty($mission) ? $mision['objetivo'][1]: $mission['objective'][1]; ?>
        </p>
        <ul>
            <h2>1.2
                <?= empty($mission) ? $mision['mision'][0]: $mission['mission'][0]; ?>
            </h2>
        </ul>
        <p>
            <?= empty($mission) ? $mision['mision'][1]: $mission['mission'][1]; ?>
        </p>
        <ul>
            <h2>1.3
                <?= empty($mission) ? $mision['llaves'][0]: $mission['keys'][0]; ?>
            </h2>
        </ul>
        <p>
            <?= empty($mission) ? $mision['llaves'][1]: $mission['keys'][1]; ?>
        <ul style="font-size: 18px; line-height: 1.5">
            <li><?= empty($mission) ? $mision['llaves'][2]: $mission['keys'][2]; ?></li>
            <li><?= empty($mission) ? $mision['llaves'][3]: $mission['keys'][3]; ?></li>
            <li><?= empty($mission) ? $mision['llaves'][4]: $mission['keys'][4]; ?></li>
            <li><?= empty($mission) ? $mision['llaves'][5]: $mission['keys'][5]; ?></li>
            </ul>
        </p>

            <ul><h2>2.1
                <?= empty($company) ? $compania[0]: $company[0]; ?>
            </h2></ul>
            <p>
                <?= empty($company) ? $compania[1]: $company[1]; ?>
            </p>
            <section>
                <p id="top_pagecard"><?= empty($company) ? $compania[2]: $company[2]; ?></p><a rel="example_group"
                    href="https://latinospc.com/images/ca/bc1.jpg" title="Business Card 1"><img
                        src="https://latinospc.com/images/ca/bc1.webp" width="213" height="149" alt="bc1" /></a>
                <a rel="example_group" href="https://latinospc.com/images/ca/bc2.jpg" title="Business Card 2"><img
                        src="https://latinospc.com/images/ca/bc2.webp" width="213" height="149" alt="bc2" /></a>
                <a rel="example_group" href="https://latinospc.com/images/ca/bc3.jpg" title="Business Card 2"><img
                        src="https://latinospc.com/images/ca/bc3.webp" width="213" height="149" alt="bc2" /></a>
            </section>

    <?php
    }

    if(isset($_GET['leer_mas'])){

    }
?>
</article>