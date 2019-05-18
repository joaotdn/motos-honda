<?php
get_header();
global $post;
?>
<div id="page-body" class="grid-container"
     data-aos="fade"
     data-aos-delay="800"
>
    <div class="grid-x grid-padding-x">
        <div class="cell small-12">

            <?php get_template_part('template-parts/header.archive.motocicletas'); ?>

            <section id="page-content" class="padding-bottom-3">
                <div class="grid-x small-up-1 medium-up-2 large-up-3 list-products list-products-page">
                    <?php
                    if (have_posts()) : while (have_posts()) : the_post();
                        global $post_id;
                        $terms = get_the_terms( $post_id, 'categorias' );
                    ?>
                    <div class="cell" data-aos="fade-up" data-product="<?php the_title(); ?>">
                        <figure class="width-100">
                            <?php echo get_the_post_thumbnail( $post->ID, 'product' ); ?>
                            <div class="square width-100 height-100"></div>
                        </figure>
                        <div class="width-100 text-center">
                            <h3><a href="#" data-toggle="modelForm" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                            <p>
                                <?php
                                    if($terms[0]->slug == 'seminovas'):
                                ?>
                                <a href="<?php echo get_home_url() ?>#home-contact" title="<?php the_title(); ?>" class="button text-uppercase small btn-black" data-toggle="modelForm">Entre em contato</a></p>
                            <?php
                            else:
                            ?>
                                <a href="#" title="<?php the_title(); ?>" class="button text-uppercase small" data-toggle="modelForm">Tenho
                                    interesse</a></p>
                            <?php
                                endif;
                            ?>
                        </div>
                    </div>
                    <?php endwhile; else: ?>
                        <h3 class="width-100"><?php _e('Sem resultados...'); ?></h3>
                    <?php endif; ?>
                </div>

                <nav aria-label="Pagination" class="margin-top-3 width-100 text-center pagination">
                    <?php
                    global $wp_query;
                    $big = 999999999; // need an unlikely integer
                    echo paginate_links(array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $wp_query->max_num_pages,
                        'next_text' => '&raquo;',
                        'prev_text' => '&laquo;',
                        'type' => 'list',
                    ));
                    ?>
                </nav>
            </section>
        </div>
    </div>
</div>
<?php
get_template_part('template-parts/form.myhonda.motocicletas');
get_footer();
?>
