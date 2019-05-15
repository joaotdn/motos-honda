<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/vnd.microsoft.icon" />

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php
    get_template_part( 'template-parts/menu.offcanvas' );

