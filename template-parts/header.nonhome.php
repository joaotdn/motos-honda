<div class="header width-100 position-fixed-top shadow"
     data-aos="fade-down"
     data-aos-delay="600"
     data-magellan-target="home-header"
>
    <div class="grid-x grid-padding-x">
        <div class="cell small-12 large-4">
            <a href="#" data-toggle-menu class="menu-btn-scroll hide-for-large" data-toggle-menu></a>

            <figure class="logo-scroll">
                <a href="index.html" title="Página principal">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/incon.png" alt="Honda Cavalcante Primo">
                    <span class="display-inline-block position-relative top-3">Cavalcanti Primo</span>
                </a>
            </figure>
        </div>

        <div class="cell small-12 large-8 show-for-large scroll-nav">
            <?php
            get_template_part('template-parts/menu.nohome');
            ?>
        </div>
    </div>
</div>