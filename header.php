<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta name="author" content="joaotdn@gmail.com">
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico"
          type="image/vnd.microsoft.icon"/>

	<?php
	wp_head();

	if ( is_home() ) {
		$bgslide = ( get_field( 'home_slideshow_bg', 'option' ) )
			? get_field( 'home_slideshow_bg', 'option' )
			: get_template_directory_uri() . '/assets/img/bg-top.jpg';
		?>
        <style>
            #home-header {
                background-image: url(<?php echo $bgslide; ?>);
            }
        </style>
		<?php
	}
	?>
    <style>
        .category-name {
            display: inline-block;
            width: 100%;
            font-size: 18px;
            border-bottom: 1px solid #e6e6e6;
            padding-bottom: 10px;
            text-transform: uppercase;
            font-weight: 800;
        }
    </style>
</head>
<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.3"></script>

<?php
get_template_part( 'template-parts/menu.offcanvas' );

if ( ! is_home() ) {
	get_template_part( 'template-parts/header.nonhome' );
}

