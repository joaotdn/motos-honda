<?php
get_header();

/**
 * Scroll Menu
 */
get_template_part('template-parts/menu.scroll');

/**
 * Slide Show
 */
get_template_part('template-parts/home.slideshow');

/**
 * Sobre a empresa
 */
get_template_part('template-parts/home.about');

/**
 * Motocicletas
 */
get_template_part('template-parts/home.products');

/**
 * Serviços
 */
get_template_part('template-parts/home.servicos');

/**
 * Novidades
 */
get_template_part('template-parts/home.news');

/**
 * Contato
 */
get_template_part('template-parts/home.contact');

/**
 * Formulario MyHonda
 */
get_template_part('template-parts/form.myhonda.motocicletas');

get_footer();
