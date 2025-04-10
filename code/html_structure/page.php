<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <title>
        <?php
        echo "PAGE";
        //titles();
        ?>
    </title>
    <link rel="stylesheet" href="code/style.css">
    <link rel="stylesheet" href="./code/terwanpop.css">
    <!-- Write a function that takes the c_ss3, c_ss4, and c_ss5... from the subfolder| By doing this, you will successfully systematize the structure of the site. I can't put it into words but perhaps, you understand what IO am trying to say. -->
</head>

<body>
    <main>
        <header>
            <span class="crumbs">
                <!-- HERE ARE THE PAGE CRUMBS--><a href="./service/">Service</a>&nbsp;<a
                    href="./parts/">Parts</a>&nbsp;<a href="./apps/">Software</a>
            </span>
            <a href="#" class="phone">
                909-276-7214
            </a>
            <div class="logo">
                <span>
                    LA</span>tinos<span>PC</span>.com
                <small>PC is for Personal Computer</small>
            </div><br />
            <nav>
                <!--    TerwanPOP    -->
                <div role="navigation" class="prro">
                    <div id="menuToggle"><input type="checkbox" />
                        <span></span><span></span><span></span>
                        <ul id="menu">
                        <li class="titleli">Our Lord and Savior Jesufsdfs Christ</li><a href="https://www.vatican.va/roman_curia/pontifical_councils/interelg/documents/rc_pc_interelg_doc_20030203_new-age_en.html" target="_blank"><li><img src="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/lamb10.webp"width="100%"height= "auto"></li></a><a href="#"><li>Heavenly Father Tell me about the Web</li></a><a href="#"><li>Our Lord and Savior Jesus Christ</li></a><a href="#"><li>Info</li></a><a href="#"><li>Contact</li></a><a href="https://erikterwan.com/" target="_blank"><li>Show me more</li></a>
                        </ul>
                    </div>
                </div><!--    TerwanPOP Made by Erik Terwan    -->
                <button><a href="./">Home</a></button><button><a href="./es/">Español</a></button><button><a href="./services/">Services</a></button><button><a href="./contact/">Contact&nbsp;Us</a></button><button><a href="./reviews/">Reviews</a></button>
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