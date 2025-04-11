<?php foreach (['is_english', 'is_spanish'] as $func) {
    if (function_exists($func)) {
        $func(); // Call the function dynamically
        break;
    }
} ?>
<!DOCTYPE html>
<html <?php echo $lang; /*Call the Language*/?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <title>
        <?php echo $title; /* Call the title */?>
    </title>
    <?php echo $css; /* Call the CSS */?>
</head>

<body>
    <main>
        <header>
            <span class="crumbs">
                <!-- HERE ARE THE PAGE CRUMBS-->
                <?php echo $crumbs;/*Call the Crumbs*/?>
            </span>
            <a href="#" class="phone">
                909-276-7214
            </a>
            <div class="logo">
                <?php echo $logo; /*Call the Logo*/?>
            </div><br />
            <nav>
                <!--    TerwanPOP    -->
                <div role="navigation" class="burg">
                    <div id="menuToggle"><input type="checkbox" />
                        <span></span><span></span><span></span>
                        <?php echo $nav_menu; /*Call the menu*/?>
                    </div>
                </div>
                <!--    TerwanPOP Made by Erik Terwan    -->
                <?php echo $nav_buttons; /*Call the menu buttons*/?>
            </nav>
        </header>
        <article>
            <section>
                HERE IS SOME HTML CONTENT
            </section>
        </article>
    </main>
    <footer id="footer">
        This is SOME FOOTER
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