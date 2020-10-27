
    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="<?php echo home_url(); ?>/wp-content/themes/iPortafolio/assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="index.html">Luis Molina</a></h1>
                <div class="social-links mt-3 text-center">
                    <a href="https://twitter.com/Luis1k84" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/luis-alberto-molina-rodriguez-22963a185/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    <a href="https://github.com/LUI-X/" class="Github"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>

            <nav class="nav-menu">
                <ul>
                <?php echo wp_nav_menu();?>
                </ul>
            </nav>
            <!-- .nav-menu -->
            <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

        </div>
    </header>
    <!-- End Header -->