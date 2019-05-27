<?php

if ( ! function_exists( 'query_custom_term' ) ) :
	function query_custom_term( $term_name ) {
		$args      = array(
			'post_type'      => 'motocicletas',
			'posts_per_page' => - 1,
			'meta_key'       => 'moto_ordem',
			'orderby'        => 'meta_value_num',
			'order'          => 'ASC',
			'hide_empty'     => 0,
			'tax_query'      => array(
				array(
					'taxonomy' => 'categorias',
					'field'    => 'slug',
					'terms'    => $term_name,
				),
			),
		);
		$the_query = new WP_Query( $args );
		$category  = get_term_by( 'slug', $term_name, 'categorias' );

		if (isset($the_query) && !empty($the_query)) {
			echo '<div class="list-products list-products-page margin-bottom-2 grid-padding-x grid-x grid-' . $term_name . '">';
			echo '<h2 class="category-name font-san-serif">' . $category->name . '</h2>';
			if ( $the_query->have_posts() ): while ( $the_query->have_posts() ) :$the_query->the_post();
				global $post;
				?>
                <div class="cell small-12 medium-4 large-3" data-product="<?php the_title(); ?>">
                    <figure class="width-100">
						<?php echo get_the_post_thumbnail( $post->ID, 'product' ); ?>
                        <a href="<?php the_permalink(); ?>" class="display-inline-block text-center"
                           title="Mais informações" data-tooltip>
                            <i class="fas fa-search show-for-large-up"></i>
                        </a>
                    </figure>
                    <div class="width-100 text-center">
                        <h3 style="font-size: 18px;" class="font-san-serif"><a href="<?php the_permalink(); ?>"
                               title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                        <p><a href="#" data-toggle="modelForm" title="Adquirir <?php the_title(); ?>"
                              class="button text-uppercase small">Tenho
                                interesse</a></p>
                    </div>
                </div>
			<?php
			endwhile;
			endif;
			echo '</div>';
        }
	}
endif;
