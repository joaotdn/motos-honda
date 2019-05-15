<?php
$text = get_field('home_sobre_text', 'option');
$imgs = get_field('home_sobre_galeria', 'option');
?>
<section id="home-about" class="position-relative width-100 overflow-hidden" data-magellan-target="home-about">
    <div class="grid-container position-relative overflow-y-hidden">
        <div class="grid-x grid-padding-x section-container">
            <div class="cell small-12 large-6 position-relative z-index-1">
                <header class="section-title-1 margin-bottom-3">
                    <h1 class="display-inline-block position-relative text-uppercase" data-aos="fade-right"
                        data-aos-duration="800" data-aos-delay="500">
                        Sobre a<br>
                        <span>empresa</span>
                    </h1>
                </header>

                <article class="width-100 section-text-1" data-aos="fade-up" data-aos-delay="1000"
                         data-aos-duration="800">
                    <?php echo $text ? $text : ''; ?>
                </article>
            </div>
        </div>
    </div>

    <div class="position-absolute height-100 about-figures show-for-large"
         data-aos="fade-left"
         data-aos-duration="1000"
         data-aos-delay="1000"
    >
        <div class="about-slide width-100 height-100 position-relative"
             data-aos="fade-left"
             data-aos-delay="1500"
             data-aos-duration="1000"
             data-cycle-fx="fade"
             data-cycle-timeout="5000"
             data-cycle-slides="> figure"
        >
            <?php
            if($imgs):
            foreach ($imgs as $img):
            ?>
            <figure data-bgimage="<?php echo $img['url']; ?>"></figure>
            <?php
            endforeach;
            endif;
            ?>
        </div>
        <div class="about-mask position-absolute width-100 height-100" data-aos-delay="1500" data-aos-duration="1000"
             data-aos="fade-left"></div>
    </div>
</section>