<?php
/**
 * CPT para Colunitas
 *
 * @since ModaBiz 1.0
 * @subpackage ModaBiz
 */
function motocicletas_init() {
    $labels = array(
        'name'               => 'Motocicletas',
        'singular_name'      => 'Motocicleta',
        'add_new'            => 'Adicionar Nova',
        'add_new_item'       => 'Adicionar nova moticicleta',
        'edit_item'          => 'Editar moticicleta',
        'new_item'           => 'Nova moticicleta',
        'all_items'          => 'Todas as moticicletas',
        'view_item'          => 'Ver motocicleta',
        'search_items'       => 'Buscar motocicleta',
        'not_found'          => 'N&atilde;o encontrada',
        'not_found_in_trash' => 'N&atilde;o encontrada',
        'parent_item_colon'  => '',
        'menu_name'          => 'Motocicletas'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'motocicletas' ),
        //'menu_icon'           => get_stylesheet_directory_uri() . '/images/works.png',
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 2,
        'supports'           => array( 'title','thumbnail' )
    );

    register_post_type( 'motocicletas', $args );

    register_taxonomy('categorias', 'motocicletas', array(
        'hierarchical' => true,
        'labels' => array(
            'name' => _x( 'Categoria', '' ),
            'singular_name' => _x( 'Categoria', '' ),
            'search_items' =>  __( 'Buscar Categoria' ),
            'all_items' => __( 'Todas' ),
            'parent_item' => __( 'Categorias' ),
            'parent_item_colon' => __( 'Categoria:' ),
            'edit_item' => __( 'Editar Categoria' ),
            'update_item' => __( 'Atualizar Categoria' ),
            'add_new_item' => __( 'Adicionar nova Categoria' ),
            'new_item_name' => __( 'Nova' ),
            'menu_name' => __( 'Categorias' ),
        ),
        'rewrite' => array(
            'slug' => 'categoria',
            'with_front' => false,
            'hierarchical' => true
        ),
    ));
}
add_action( 'init', 'motocicletas_init' );
?>