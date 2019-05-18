<section id="home-news" class="position-relative overflow-x-hidden width-100" data-magellan-target="home-news">
    <div class="grid-container position-relative overflow-y-hidden">
        <div class="grid-x grid-padding-x section-container">
            <div class="cell small-12 position-relative z-index-1">
                <header class="cell small-12 text-center margin-bottom-2"
                        data-aos="fade-up"
                        data-aos-delay="1000"
                        data-aos-duration="1000"
                >
                    <h2 class="section-title-2 black text-uppercase margin-top-0">Novidades</h2>
                </header>
            </div>

            <nav class="cell small-12 margin-top-1">
                <div class="grid-x grid-padding-x small-up-1 medium-up-3 list-news">
                    <?php
                    $args = array(
                        'posts_per_page' => 3,
                        'orderby' => 'date'
                    );
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) : while ($the_query->have_posts()) :
                        $the_query->the_post();
                        ?>
                        <div class="cell" data-aos="zoom-in">
                            <figure class="width-100">
                                <a href="<?php the_permalink(); ?>" class="display-inline-block news-figure"
                                   data-bgimage="<?php getThumbUrl('product'); ?>"></a>
                                <figcaption class="width-100 margin-top-1 news-txt">
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                </figcaption>
                            </figure>
                        </div>
                    <?php
                    endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </nav>
            <?php
            $category_id = get_cat_ID('Novidades');
            $category_link = get_category_link($category_id);
            ?>
            <div class="cell small-12 margin-top-3"
                 data-aos="fade"
                 data-aos-duration="1000"
                 data-aos-delay="800"
            >
                <a href="<?php echo esc_url($category_link); ?>" title="Novidades" class="button hollow expanded">Ver
                    todas</a>
            </div>
        </div>
    </div>
</section>