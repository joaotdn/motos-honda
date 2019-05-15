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

                <p>
                    <i class="fas fa-phone"></i> (83) 988998877
                </p>

                <p>
                    <i class="fas fa-map-marker-alt align-top"></i>
                    <span class="display-inline-block">
                        Rua José Firmino Ferreira, 976 - Centro<br>
                        Cajazeiras - PB<br>
                        CEP: 58900-000
                    </span>
                </p>
            </div>

            <div class="cell small-6 show-for-large">
                <ul class="menu align-right" data-magellan>
                    <li><a href="index.html#home-about">Sobre</a></li>
                    <li><a href="products.html">Motocicletas</a></li>
                    <li><a href="index.html#home-services">Serviços</a></li>
                    <li><a href="blog.html">Novidades</a></li>
                    <li><a href="index.html#home-contact">Contato</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js"></script>

<div class="back-top" data-magellan>
    <a href="<?php echo is_home() ? "#home-header" : "#page-body"; ?>">
        <i class="fas fa-chevron-up"></i>
    </a>
</div>

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

</body>
</html>