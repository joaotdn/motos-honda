<?php
    $category_id = get_cat_ID( 'Novidades' );
    $category_link = get_category_link( $category_id );
    $motos =  get_page_by_title('Motocicletas');
    $motos_link = get_page_link($motos->ID);
?>
<ul class="menu align-right">
    <li><a href="<?php echo get_home_url(); ?>#home-about">Sobre</a></li>
    <li><a href="<?php echo $motos_link; ?>">Motocicletas</a></li>
    <li><a href="<?php echo get_home_url(); ?>#home-services">Serviços</a></li>
    <li><a href="<?php echo esc_url( $category_link ); ?>">Novidades</a></li>
    <li><a href="<?php echo get_home_url(); ?>#home-contact">Contato</a></li>
</ul>