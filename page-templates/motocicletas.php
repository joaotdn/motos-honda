<?php
/**
 * Template Name: Motocicletas
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

			<?php get_template_part( 'template-parts/header.archive.motocicletas' ); ?>

            <section id="page-content" class="padding-bottom-3 grid-container">
	            <?php query_custom_term('city'); ?>
	            <?php query_custom_term('scooter'); ?>
	            <?php query_custom_term('naked'); ?>
	            <?php query_custom_term('trail'); ?>
	            <?php query_custom_term('off-road'); ?>
	            <?php query_custom_term('sport'); ?>
	            <?php query_custom_term('touring'); ?>
            </section>
        </div>
    </div>
</div>
<?php
get_template_part( 'template-parts/form.myhonda.motocicletas' );
get_footer();
?>
