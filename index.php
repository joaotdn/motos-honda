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
                                <p><a href="#" class="button hollow">Saiba mais</a></p>
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
                                <p><a href="products.html" class="button hollow">Veja mais</a></p>
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
                                <p><a href="accessories.html" class="button hollow">Veja mais</a></p>
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
                                <p><a href="service.html" class="button hollow">Agende a sua!</a></p>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </section>
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
    <footer id="footer" class="width-100 position-relative clear">
        <div class="grid-container">
            <div class="grid-padding-x grid-x">
                <div class="cell small-12 large-6">
                    <h1 class="logo-fotoer margin-bottom-2">
                        <a href="#" title="Honda Cavalcante Primo">
                            <img src="assets/img/icon-white.png" alt="">
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
    </footer></main>
    <div class="back-top" data-magellan>
        <a href="#home-header">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>

    <div class="reveal" id="modelForm" data-reveal data-close-on-click="true" data-animation-in="scale-in-up"
         data-animation-out="scale-out-down">
        <h3 id="product-title" class="width-100 text-center margin-bottom-1 font-bold"></h3>

        <form id="myhonda"
              class="margin-top-1"
              action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8"
              method="POST"
              data-abide
              novalidate
        >
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div class="small-12 cell">
                        <label>Concessionária de interesse:
                            <select id="dealer_code_interest__c" name="dealer_code_interest__c">
                                <option value="1010646">Cavalcanti Cajazeiras</option>
                                <option value="1020641">Cavalcanti Itaporanga</option>
                            </select>
                        </label>
                        <label class="form-error" data-form-error-for="dealer_code_interest__c">Informe a
                            concessionária.</label>
                    </div>
                    <div class="small-12 medium-6 cell">
                        <label>Nome:
                            <input type="text" id="first_name" name="first_name" maxlength="40" required>
                        </label>
                        <label class="form-error" data-form-error-for="first_name">O nome é obrigatório!</label>
                    </div>
                    <div class="small-12 medium-6 cell">
                        <label>Sobrenome:
                            <input type="text" maxlength="80" id="last_name" name="last_name" required>
                        </label>
                        <label class="form-error" data-form-error-for="last_name">O sobrenome é obrigatório!</label>
                    </div>
                    <div class="small-12 medium-6 cell">
                        <label>Celular:
                            <input type="tel" maxlength="14" minlength="11" id="mobile" name="mobile" required>
                        </label>
                        <label class="form-error" data-form-error-for="mobile">Necessário informar o celular.</label>
                    </div>

                    <div class="small-12 medium-6 cell">
                        <label>Email:
                            <input type="email" maxlength="80" id="email" name="email" required>
                        </label>
                        <label class="form-error" data-form-error-for="email">Email inválido. Campo obrigatório.</label>
                    </div>
                    <div class="small-12 cell">
                        <label>CPF:
                            <input type="text" maxlength="11" id="cpf__c" name="cpf__c" required>
                        </label>
                        <label class="form-error" data-form-error-for="cpf__c">CPF inválido</label>
                    </div>

                    <div class="small-12 cell">
                        <label>
                            <input id="opt_in_email__c" name="opt_in_email__c" type="checkbox" value="1"
                            />Desejo receber contatos via e-mails
                        </label>
                    </div>

                    <div class="small-12 cell">
                        <label>
                            <input id="opt_in_phone__c" name="opt_in_phone__c" type="checkbox" value="1"
                            />Desejo receber contatos via telefone
                        </label>
                    </div>
                </div>
            </div>

            <div class="grid-container">
                <div class="grid-x grid-margin-x margin-top-1">
                    <fieldset class="cell large-6">
                        <button class="button success expanded white" type="submit" value="Submit">Enviar</button>
                    </fieldset>
                    <fieldset class="cell large-6">
                        <button class="button warning expanded white" type="reset" value="Reset">Limpar</button>
                    </fieldset>
                </div>
            </div>

            <input type="hidden" id="model_interest__c" name="model_interest__c" value="">
            <input type=hidden name="oid" value="00D61000000HSuF">
            <!--<input type="hidden" name="debug" value=1>-->
            <!--<input type="hidden" name="debugEmail" value="joaotdn@gmail.com">-->
            <input type="hidden" name="type__c" id="type__c" value="HDA">
            <input type="hidden" name="Lead_Source" id="Lead_Source" value="WebSite Concessionária">
            <input type="hidden" name="sub_source_media__c" id="sub_source_media__c" value="Site">
            <input type=hidden name="retURL" value="http://www.honda.com.br/Paginas/default.aspx">
        </form>

        <button class="close-button" data-close aria-label="Close reveal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

<?php get_footer();
