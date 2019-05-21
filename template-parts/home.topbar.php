<?php
    $enderecos = get_field('lojas_enderecos', 'option');
    if ($enderecos[0]['loja_logradouro']):
?>
<div class="contact-top-bar position-relative show-for-large">
    <div class="grid-container">
        <div class="grid-padding-x grid-x">
            <div class="cell small-6">
                <p class="margin-0 padding-0">
                    <i class="fas fa-map-marker-alt"></i>
                    / <?php echo "{$enderecos[0]['loja_logradouro']}, {$enderecos[0]['loja_numero']}" ?> -  <?php echo "{$enderecos[0]['loja_cidade']}"; ?>
                </p>
            </div>
            <div class="cell small-6 text-right">
                <p class="padding-0 margin-0"><i class="fas fa-phone"></i> <?php echo "{$enderecos[0]['loja_telefone']}"; ?>
                    / <a href="mailto:<?php echo "{$enderecos[0]['loja_email']}"; ?>"><i class="far fa-envelope"></i> <?php echo "{$enderecos[0]['loja_email']}"; ?></a></p>
            </div>
        </div>
    </div>
</div>
<?php
    endif;