<?php
$consorcios = get_page_by_title( 'Consórcios' );
$acessorios = get_page_by_title( 'Peças e acessórios' );
$revisao = get_page_by_title( 'Revisão' );
?>
<section id="home-services" class="position-relative width-100 overflow-hidden"
         data-magellan-target="home-services">
    <div class="grid-container position-relative overflow-y-hidden">
        <div class="grid-x grid-padding-x section-container">
            <header class="cell small-12 text-center large-text-left margin-bottom-3 section-title-1"
                    data-aos="fade-right"
                    data-aos-delay="1000"
                    data-aos-duration="1000"
            >
                <h1 class="display-inline-block position-relative text-uppercase">
                    Serviços <span>Honda</span>
                </h1>
            </header>

            <nav class="cell small-12 list-services margin-top-1">
                <div class="grid-x grid-padding-x small-up-1 medium-up-2 large-up-4">
                    <div class="cell"
                         data-aos="zoom-in"
                         data-aos-duration="1000"
                         data-aos-delay="200"
                    >
                        <figure class="width-100 text-center">
                                <span class="display-inline-block">
                                    <i class="fas fa-hand-holding-usd"></i>
                                </span>
                        </figure>
                        <div class="service-text width-100 text-center">
                            <h3>Consórcio</h3>
                            <p>Você de moto com parcelas que cabem no seu bolso</p>
                            <p><a href="<?php echo esc_url( get_page_link( $consorcios->ID ) ); ?>" title="Consórcios" class="button hollow">Saiba mais</a></p>
                        </div>
                    </div>

                    <div class="cell"
                         data-aos="zoom-in"
                         data-aos-duration="1000"
                         data-aos-delay="400"
                    >
                        <figure class="width-100 text-center">
                                <span class="display-inline-block">
                                    <i class="fas fa-motorcycle"></i>
                                </span>
                        </figure>
                        <div class="service-text width-100 text-center">
                            <h3>Motos Seminovas</h3>
                            <p>Motos seminovas com padrão e revisão Cavalcanti Primo</p>
                            <p><a href="<?php echo get_term_link('seminovas', 'categorias'); ?>" title="Motos seminovas" class="button hollow">Veja mais</a></p>
                        </div>
                    </div>

                    <div class="cell"
                         data-aos="zoom-in"
                         data-aos-duration="1000"
                         data-aos-delay="600"
                    >
                        <figure class="width-100 text-center">
                                <span class="display-inline-block">
                                    <i class="fas fa-cogs"></i>
                                </span>
                        </figure>
                        <div class="service-text width-100 text-center">
                            <h3>Peças e acessórios</h3>
                            <p>Solicite o orçamento de peças e acessórios genuínos Honda.</p>
                            <p><a href="<?php echo esc_url( get_page_link( $acessorios->ID ) ); ?>" title="Peças e acessórios" class="button hollow">Veja mais</a></p>
                        </div>
                    </div>

                    <div class="cell"
                         data-aos="zoom-in"
                         data-aos-duration="1000"
                         data-aos-delay="800"
                    >
                        <figure class="width-100 text-center">
                                <span class="display-inline-block">
                                    <i class="fab fa-rev"></i>
                                </span>
                        </figure>
                        <div class="service-text width-100 text-center">
                            <h3>Revisões</h3>
                            <p>Agende seu serviço com técnicos treinados pela Honda.</p>
                            <p><a href="<?php echo esc_url( get_page_link( $revisao->ID ) ); ?>" title="Revisão" class="button hollow">Agende a sua!</a></p>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</section>