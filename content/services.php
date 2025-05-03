<!-- Hero Section --><article class="fullbar">
<section class="hero article">
        <div class="container">
            <?= empty($title) ? $titulo : $title; ?>
            <button><a href="tel:+19092767214"><img src="https://latinospc.com/images/number.jpeg" height="150px"width="450px"></a></button>
            <p style="padding-left: 50px;"><?= empty($reliable) ? $confiable : $reliable; ?></p>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <?= empty($services) ? $servicios : $services;?>
        </div>
    </section>

    <!-- Special Offers Section -->
    <section id="offers" class="offers">
        <div class="container">
            <?= empty($specialOffers) ? $ofertasEspeciales : $specialOffers ?>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <?= empty($contact) ? $contacto : $contact; ?>
        </div>
    </section>
</article>