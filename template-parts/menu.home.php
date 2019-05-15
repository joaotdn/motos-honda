<?php
$defaults = array(
    'theme_location'  => 'primary',
    'menu'            => 'Menu home',
    'container'       => '',
    'container_class' => '',
    'container_id'    => '',
    'menu_class'      => '',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'primary',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '%3$s',
    'depth'           => 0,
    'walker'          => '',
);
wp_nav_menu($defaults);
?>