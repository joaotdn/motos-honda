<section id="home-products" class="position-relative width-100 overflow-hidden"
         data-magellan-target="home-products">
    <div class="grid-container position-relative overflow-y-hidden">
        <div class="grid-x grid-padding-x section-container">
            <header class="cell small-12 text-center margin-bottom-2"
                    data-aos="fade-up"
                    data-aos-delay="1000"
                    data-aos-duration="1000"
            >
                <figure class="width-100 text-center margin-bottom-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bike-white.png" alt="" width="60">
                </figure>
                <h1 class="section-title-2 text-uppercase">Motocicletas</h1>
            </header>

            <div class="cell small-12 margin-bottom-1"
                 data-aos="fade-right"
                 data-aos-duration="1000"
                 data-aos-delay="1500"
            >
                <ul class="tabs" data-active-collapse="true" data-tabs id="example-tabs">
                    <li class="width-50 text-center tabs-title is-active"><a href="#panel1d"
                                                                             aria-selected="true">Novas</a></li>
                    <li class="width-50 text-center tabs-title"><a href="#panel2d">Seminovas</a></li>
                </ul>
            </div>

            <div class="cell small-12">
                <div class="tabs-content" data-tabs-content="example-tabs">
                    <div class="tabs-panel is-active" id="panel1d">
                        <div class="grid-x grid-padding-x small-up-1 medium-up-2 large-up-3 list-products">
                            <?php
                            $args = array(
                                'posts_per_page' => 3,
                                'post_type' => 'motocicletas',
                                'orderby' => 'rand',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'categorias',
                                        'field' => 'slug',
                                        'terms' => array('seminovas'),
                                        'operator' => 'NOT IN',
                                    ),
                                )
                            );
                            $produtos_posts = get_posts($args);
                            foreach ($produtos_posts as $post): setup_postdata($post);
                                ?>
                                <div class="cell" data-aos="fade-up" data-product="<?php the_title(); ?>">
                                    <figure class="width-100">
	                                    <?php echo get_the_post_thumbnail( $post->ID, 'product' ); ?>
                                        <div class="square width-100 height-100"></div>
                                        <a href="<?php the_permalink(); ?>" class="display-inline-block text-center" title="Mais informações" data-tooltip>
                                            <i class="fas fa-search show-for-large-up"></i>
                                        </a>
                                    </figure>
                                    <div class="width-100 text-center">
                                        <h3><a href="#" data-toggle="modelForm"
                                               title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                                        <p><a href="#" data-toggle="modelForm" title="Adquirir <?php the_title(); ?>"
                                              class="button text-uppercase small">Tenho
                                                interesse</a></p>
                                    </div>
                                </div>
                            <?php
                            endforeach;
                            ?>
                        </div>
                        <div class="width-100 text-center margin-top-2"
                             data-aos="fade"
                             data-aos-delay="300"
                             data-aos-duration="1000"
                        >
                            <a href="<?php echo get_post_type_archive_link( 'motocicletas' ); ?>" class="button glass expanded text-uppercase">Ver todas</a>
                        </div>
                    </div>
                    <div class="tabs-panel" id="panel2d">
                        <div class="grid-x grid-padding-x small-up-1 medium-up-2 large-up-3 list-products">
                            <?php
                            $args = array(
                                'posts_per_page' => 3,
                                'post_type' => 'motocicletas',
                                'orderby' => 'rand',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'categorias',
                                        'field' => 'slug',
                                        'terms' => array('seminovas'),
                                    ),
                                )
                            );
                            $produtos_posts = get_posts($args);
                            foreach ($produtos_posts as $post): setup_postdata($post);
                                ?>
                                <div class="cell" data-aos="fade-up" data-product="<?php the_title(); ?>">
                                    <figure class="width-100">
                                        <img src="<?php echo get_the_post_thumbnail( $post->ID, 'product' ); ?>" alt="">
                                        <div class="square width-100 height-100"></div>
                                    </figure>
                                    <div class="width-100 text-center">
                                        <h3><a href="<?php echo get_home_url() ?>#home-contact"
                                               title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                                        <p><a href="<?php echo get_home_url() ?>#home-contact" title="Adquirir <?php the_title(); ?>"
                                              class="button text-uppercase small btn-black">Entre em contato</a></p>
                                    </div>
                                </div>
                            <?php
                            endforeach;
                            ?>
                        </div>
                        <div class="width-100 text-center margin-top-2"
                             data-aos="fade"
                             data-aos-delay="300"
                             data-aos-duration="1000"
                        >
                            <a href="<?php echo get_term_link('seminovas', 'categorias'); ?>" class="button glass expanded text-uppercase">Ver todas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-pattern width-100 position-absolute"></div>
    <div class="position-absolute width-100 height-100 products-mask"></div>
</section>