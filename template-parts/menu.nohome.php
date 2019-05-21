<?php
    // Get the ID of a given category
    $category_id = get_cat_ID( 'Novidades' );

    // Get the URL of this category
    $category_link = get_category_link( $category_id );
?>
<ul class="menu align-right">
    <li><a href="<?php echo get_home_url(); ?>#home-about">Sobre</a></li>
    <li><a href="<?php echo get_post_type_archive_link( 'motocicletas' ); ?>">Motocicletas</a></li>
    <li><a href="<?php echo get_home_url(); ?>#home-services">Serviços</a></li>
    <li><a href="<?php echo esc_url( $category_link ); ?>">Novidades</a></li>
    <li><a href="<?php echo get_home_url(); ?>#home-contact">Contato</a></li>
</ul>