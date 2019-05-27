<?php

add_action('pre_get_posts', function ($q) 
{
    if(!is_admin() && $q->is_main_query() && $q->is_tax()) {

        $q->set('post_type', 'motocicletas'); 
        $q->set('posts_per_page', -1);  
        $q->set('meta_key', 'moto_ordem');  
        $q->set('orderby', 'meta_value_num'); 
        $q->set('order', 'ASC'); 

    }

    return $q;
}

);