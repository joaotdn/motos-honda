<div class="cell" data-aos="fade-up" data-product="<?php the_title(); ?>">
	<figure class="width-100">
		<?php echo get_the_post_thumbnail( $post->ID, 'product' ); ?>
		<div class="square width-100 height-100"></div>
		<a href="<?php the_permalink(); ?>" class="display-inline-block text-center" title="Mais informações" data-tooltip>
			<i class="fas fa-search show-for-large-up"></i>
		</a>
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