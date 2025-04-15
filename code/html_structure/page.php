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
                <hr>
            </span>

            <a href="#" class="phone">
                909-276-7214
            </a>

            <div class="logo">
                <?php echo $logo; /*Call the Logo*/?>
            </div>
        </header>
        <nav class="sticky">
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
            <section><?php
            include_once('./jesuscrist/content.php');
            //echo var_dump(function_exists('content'));
           content();
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
    <script>
        // Sticky nav code
        let lastScrollTop = 0;
        const nav = document.querySelector('nav.sticky');
        const scrollThreshold = 100;
        
        window.addEventListener('scroll', () => {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            // Only start hiding/showing after scrolling past threshold
            if (scrollTop > scrollThreshold) {
                // Scrolling down
                if (scrollTop > lastScrollTop) {
                    nav.classList.add('nav-hidden');
                }
                // Scrolling up
                else if (scrollTop < lastScrollTop) {
                    nav.classList.remove('nav-hidden');
                }
            } else {
                // Above threshold - always show nav
                nav.classList.remove('nav-hidden');
            }
            
            lastScrollTop = scrollTop;
        });
        </script>
</body>

</html>