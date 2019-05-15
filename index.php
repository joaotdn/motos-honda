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

?>



    <section id="home-news" class="position-relative overflow-x-hidden width-100" data-magellan-target="home-news">
        <div class="grid-container position-relative overflow-y-hidden">
            <div class="grid-x grid-padding-x section-container">
                <div class="cell small-12 position-relative z-index-1">
                    <header class="cell small-12 text-center margin-bottom-2"
                            data-aos="fade-up"
                            data-aos-delay="1000"
                            data-aos-duration="1000"
                    >
                        <h2 class="section-title-2 black text-uppercase margin-top-0">Novidades</h2>
                    </header>
                </div>

                <nav class="cell small-12 margin-top-1">
                    <div class="grid-x grid-padding-x small-up-1 medium-up-3 list-news">
                        <div class="cell"
                             data-aos="zoom-in"
                             data-aos-duration="1000"
                             data-aos-delay="200"
                        >
                            <figure class="width-100">
                                <a href="single.html" class="display-inline-block news-figure"
                                   data-bgimage="assets/img/fig1.jpeg"></a>
                                <figcaption class="width-100 margin-top-1 news-txt">
                                    <h4><a href="single.html">Dreams feel real while we're in them.</a></h4>
                                    <p>Im going to improvise. Listen, there's something you should know about me...</p>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="cell"
                             data-aos="zoom-in"
                             data-aos-duration="1000"
                             data-aos-delay="400"
                        >
                            <figure class="width-100">
                                <a href="single.html" class="display-inline-block news-figure"
                                   data-bgimage="assets/img/fig2.jpeg"></a>
                                <figcaption class="width-100 margin-top-1 news-txt">
                                    <h4><a href="single.html">Dreams feel real while we're in them.</a></h4>
                                    <p>Im going to improvise. Listen, there's something you should know about me...</p>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="cell"
                             data-aos="zoom-in"
                             data-aos-duration="1000"
                             data-aos-delay="600"
                        >
                            <figure class="width-100">
                                <a href="single.html" class="display-inline-block news-figure"
                                   data-bgimage="assets/img/fig3.jpeg"></a>
                                <figcaption class="width-100 margin-top-1 news-txt">
                                    <h4><a href="single.html">Dreams feel real while we're in them.</a></h4>
                                    <p>Im going to improvise. Listen, there's something you should know about me...</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </nav>

                <div class="cell small-12 margin-top-3"
                     data-aos="fade"
                     data-aos-duration="1000"
                     data-aos-delay="800"
                >
                    <a href="blog.html" class="button hollow expanded">Ver todas</a>
                </div>
            </div>
        </div>
    </section>
    <section id="home-contact" class="position-relative width-100 overflow-hidden" data-magellan-target="home-contact">
        <div class="grid-container position-relative overflow-y-hidden">
            <div class="grid-x grid-padding-x section-container">
                <header class="cell small-12 text-center large-text-left margin-bottom-3 section-title-3"
                        data-aos="fade-right"
                        data-aos-delay="200"
                        data-aos-duration="1000"
                >
                    <h3 class="display-inline-block position-relative text-uppercase">
                        Fale <strong>Conosco</strong>
                    </h3>
                </header>


                <form action="" class="cell small-12 medium-6 contact-form"
                      data-aos="fade-up"
                      data-aos-delay="500"
                      data-aos-duration="1000"
                >
                    <div class="grid-container">
                        <div class="grid-x">
                            <div class="small-12 cell">
                                <label>Nome
                                    <input type="text" placeholder="Digite seu nome">
                                </label>
                            </div>
                            <div class="small-12 cell">
                                <label>Email
                                    <input type="email" placeholder="Digite seu e-mail">
                                </label>
                            </div>
                            <div class="small-12 cell">
                                <label>Mensagem
                                    <textarea rows="10"
                                              placeholder="Mande-nos suas dúvidas, reclamações ou elogios."></textarea>
                                </label>

                                <p class="margin-top-2">
                                    <button type="submit" class="button expanded glass bl-hover text-uppercase">Enviar
                                    </button>
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="contact-map"
             data-aos="fade-left"
             data-aos-delay="800"
             data-aos-duration="1000"
        >
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0071565344397!2d-38.556574584688484!3d-6.889745195021484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7a473b4afd4906f%3A0x30fd6b41cffc4f5c!2sHonda+Cavalcanti!5e0!3m2!1spt-BR!2sbr!4v1548018126972"
                    frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </section>

<?php
/**
 * Formulario MyHonda
 */
get_template_part('template-parts/form.myhonda.motocicletas');

get_footer();
