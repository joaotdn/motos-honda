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

			<?php get_template_part( 'template-parts/header.archive.motocicletas' ); ?>

            <section id="page-content" class="padding-bottom-3">
                <div class="grid-x small-up-1 medium-up-2 large-up-3 list-products list-products-page">

                </div>
            </section>
        </div>
    </div>
</div>
<?php
get_template_part( 'template-parts/form.myhonda.motocicletas' );
get_footer();
?>
