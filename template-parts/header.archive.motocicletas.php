<?php
$terms = get_terms(array(
    'taxonomy' => 'categorias',
    'hide_empty' => false,
));
?>
<header class="width-100 page-header section-title-3 grid-x">
    <div class="cell small-12 medium-8 margin-bottom-1 text-center medium-text-left">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bike.png" alt="Motocicletas">
        <h3 class="font-bold text-uppercase margin-left-1 font-san-serif display-inline-block margin-0">
            Motocicletas
        </h3>
    </div>

    <div class="cell small-12 medium-4 margin-bottom-1">
        <label>Categorias:
            <?php
            if (!empty($terms) && !is_wp_error($terms)) {
                $count = count($terms);
                $i = 0;
                $term_list = '<select name="cat-motos" id="cat-motos"><option>Escolher categoria</option><option value="">Todas</option>';
                foreach ($terms as $term) {
                    $i++;
                    $term_list .= '<option value="' . esc_url(get_term_link($term)) . '">' . $term->name . '</option>';
                    if ($count != $i) {
                        $term_list .= ' &middot; ';
                    } else {
                        $term_list .= '</select>';
                    }
                }
                echo $term_list;
            }
            ?>
        </label>
    </div>

    <div class="cell small-12 margin-bottom-1 search-product padding-top-1">
        <label>Buscar motocicleta:
            <input type="text" placeholder="Nome do produto" class="width-100 input-normal">
        </label>
    </div>
</header>