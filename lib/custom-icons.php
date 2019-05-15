<?php
function add_menu_icons_styles(){
    ?>

    <style>
        #menu-posts-motocicletas div.wp-menu-image:before {
            content: "\f513";
        }
    </style>

    <?php
}
add_action( 'admin_head', 'add_menu_icons_styles' );
?>