<?php

/**
 * Configure funções para campos personalizados da aplicação
 */

define( 'USE_LOCAL_ACF_CONFIGURATION', true ); // apenas conf. local

add_filter('acf/settings/path', 'plandd_acf_path');
function plandd_acf_path( $path ) {
    // update path
    $path = get_stylesheet_directory() . '/lib/acf-pro/';
    // return
    return $path;
}

add_filter('acf/settings/dir', 'plandd_acf_dir');
function plandd_acf_dir( $dir ) {
    // update path
    $dir = get_stylesheet_directory_uri() . '/lib/acf-pro/';
    // return
    return $dir;
}

include_once( get_stylesheet_directory() . '/lib/acf-pro/acf.php' );

//define( 'ACF_LITE' , true );

//include_once( get_stylesheet_directory() . '/library/acf-pro/preconfig.php' );

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'  => 'Opções gerais',
        'menu_title'  => 'Opções',
        'menu_slug'   => 'opcoes-gerais',
        'capability'  => 'edit_posts',
        'redirect'    => false
    ));
    acf_add_options_sub_page(array(
        'page_title'  => 'Configure as seções da página principal',
        'menu_title'  => 'Página principal',
        'parent_slug' => 'opcoes-gerais',
    ));
}

/**
 * LIBS
 */

/** Enqueue scripts */
require_once( 'lib/enqueue-scripts.php' );
