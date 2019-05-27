<?php
/**
 * Template Name: Confirmado
 */

get_header();
global $post;
?>
<div id="page-body" class="grid-container"
     data-aos="fade"
     data-aos-delay="800"
>
	<div class="grid-x grid-padding-x">
		<div class="cell small-12">
			<section id="page-content" class="padding-bottom-3 grid-container">
				<div class="grid-x grid-padding-x">
					<div class="cell small-12">
						<h2 class="font-san-serif">Sua solicitação foi enviada com sucesso!</h2>
						<p class="medium-gray">Aguarde ser redirecionado para página principal ou <a href="<?php echo home_url(); ?>">Clique aqui.</a></p>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>
<?php
get_footer();
?>
