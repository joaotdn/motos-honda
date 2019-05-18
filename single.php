<?php
get_header();

$category_id = get_cat_ID('Novidades');
$category_link = get_category_link($category_id);
?>
<div id="page-body" class="grid-container"
     data-aos="fade"
     data-aos-delay="800"
>
    <div class="grid-x grid-padding-x">
        <div class="cell small-12">
            <nav aria-label="You are here:" role="navigation" class="width-100">
                <ul class="breadcrumbs">
                    <li><a href="<?php echo get_home_url(); ?>">Principal</a></li>
                    <li><a href="<?php echo esc_url($category_link); ?>">Notícias</a></li>
                    <li class="disabled"><?php the_title(); ?></li>
                </ul>
            </nav>

            <header class="width-100 page-header section-title-1 grid-x">
                <div class="cell small-12 medium-8 margin-bottom-1 text-center medium-text-left">
                    <h3 class="font-bold text-uppercase font-san-serif display-inline-block">
                        <?php the_title(); ?>
                    </h3>
                    <p class="light-gray">Publicado em:
                        <time><?php the_time('d\.m\.Y'); ?></time>
                    </p>
                </div>
            </header>

            <section id="single-content" class="padding-bottom-3">
                <article class="width-100">
                    <?php the_content(); ?>
                </article>

                <nav class="width-100 margin-top-1">
                    <ul class="share-buttons menu">
                        <li>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&quote=D<?php  the_title(); ?>"
                               class="padding-left-0" title="Share on Facebook" target="_blank"><img
                                        alt="Share on Facebook" src="<?php echo get_template_directory_uri(); ?>/assets/img/Facebook.png"/></a></li>
                        <li>
                            <a href="https://twitter.com/intent/tweet?source=<?php the_permalink(); ?>&text=<?php  the_title(); ?>.:%20<?php the_permalink(); ?>"
                               target="_blank" title="Tweet"><img alt="Tweet" src="<?php echo get_template_directory_uri(); ?>/assets/img/Twitter.png"/></a></li>
                        <li><a href="https://plus.google.com/share?url=http%3A%2F%2Flocalhost%3A8000%2Fsingle.html"
                               target="_blank" title="Share on Google+"><img alt="Share on Google+"
                                                                             src="<?php echo get_template_directory_uri(); ?>/assets/img/Google+.png"/></a></li>
                        <li>
                            <a href="http://www.linkedin.com/shareArticle?mini=true&url=http%3A%2F%2Flocalhost%3A8000%2Fsingle.html&title=<?php the_permalink(); ?>.&summary=<?php the_permalink(); ?>.&source=<?php the_permalink(); ?>"
                               target="_blank" title="Share on LinkedIn"><img alt="Share on LinkedIn"
                                                                              src="<?php echo get_template_directory_uri(); ?>/assets/img/LinkedIn.png"/></a></li>
                        <li>
                            <a href="mailto:?subject=<?php  the_title(); ?>.&body=<?php  the_title(); ?>:%20<?php the_permalink(); ?>"
                               target="_blank" title="Send email"><img alt="Send email" src="<?php echo get_template_directory_uri(); ?>/assets/img/Email.png"/></a>
                        </li>
                    </ul>
                </nav>

                <div class="width-100 margin-top-1">
                    <div class="fb-comments"
                         data-href="<?php the_permalink(); ?>"
                         data-width="100%" data-numposts="5"></div>
                </div>
            </section>
        </div>
    </div>
</div>
<?php
get_footer();
?>