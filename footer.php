<?php
$enderecos = get_field( 'lojas_enderecos', 'option' );
?>
<footer id="footer" class="width-100 position-relative clear">
    <div class="grid-container">
        <div class="grid-padding-x grid-x">
            <div class="cell small-12 large-6">
                <h1 class="logo-fotoer margin-bottom-2">
                    <a href="#" title="Honda Cavalcante Primo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-white.png" alt="">
                        <span>Cavalcanti Primo</span>
                    </a>
                </h1>
            </div>

            <div class="cell small-6 show-for-large">
				<?php
				get_template_part( 'template-parts/menu.nohome' );
				?>
            </div>

            <div class="cell small-12 store-list margin-top-1">
                <div class="grid-padding-x grid-x">
					<?php
					if ( ! empty( $enderecos ) ):
						foreach ( $enderecos as $endereco ):
							?>
                            <div class="cell small-12 medium-4 text-center margin-bottom-1">
                                <span class="margin-bottom-1"><strong><i
                                                class="fas fa-map-marker-alt"></i> <?php echo $endereco['loja_nome']; ?></strong></span>
                                <span>
                                      <?php echo $endereco['loja_logradouro'] ?>, <?php echo $endereco['loja_numero'] ?> - <?php echo $endereco['loja_bairro'] ?><br>
                                      <?php echo $endereco['loja_cidade'] ?><br>
                                      Fone: <?php echo $endereco['loja_telefone']; ?><br>
                                      CEP: <?php echo $endereco['loja_cep'] ?><br>
                                      Email: <?php echo $endereco['loja_email'] ?>
                                </span>
                            </div>
						<?php
						endforeach;
					endif;
					?>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<div class="back-top" data-magellan>
    <a href="<?php echo is_home() ? "#home-header" : "#page-body"; ?>">
        <i class="fas fa-chevron-up"></i>
    </a>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js"></script>

<script>
    (function ($) {
        $("#cat-motos").on('change', function () {
            const url = $(this).val();
            if (url) {
                window.location.href = url;
            }
        });
    })(jQuery);
</script>

<?php
$page = get_page_by_title( 'Confirmacao' );
if ( $page && is_page( $page->ID ) ):
	?>
    <script>
        (function () {
            setTimeout(function () {
                window.location.href = "<?php echo home_url(); ?>";
            }, 5000)
        })();
    </script>
<?php
endif;
?>

</body>
</html>