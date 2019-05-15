<?php
get_header();
?>


<div id="page-body" class="grid-container"
     data-aos="fade"
     data-aos-delay="800"
>
    <div class="grid-x grid-padding-x">
        <div class="cell small-12">

            <?php get_template_part('template-parts/header.archive.motocicletas'); ?>

            <section id="page-content" class="padding-bottom-3">
                <div class="grid-x small-up-1 medium-up-2 large-up-3 list-products list-products-page">
                    <div class="cell" data-aos="fade-up" data-product="POP">
                        <figure class="width-100">
                            <img src="assets/img/slide1.png" alt="">
                            <div class="square width-100 height-100"></div>
                        </figure>
                        <div class="width-100 text-center">
                            <h3><a href="#" data-toggle="modelForm">CG 125 Cargo</a></h3>
                            <p><a href="#" class="button text-uppercase small" data-toggle="modelForm">Tenho
                                    interesse</a></p>
                        </div>
                    </div>
                    <div class="cell" data-aos="fade-up" data-product="CG Cargo">
                        <figure class="width-100">
                            <img src="assets/img/slide2.png" alt="">
                            <div class="square width-100 height-100"></div>
                        </figure>
                        <div class="width-100 text-center">
                            <h3><a href="#" data-toggle="modelForm">CG 125 Cargo</a></h3>
                            <p><a href="#" class="button text-uppercase small" data-toggle="modelForm">Tenho
                                    interesse</a></p>
                        </div>
                    </div>
                    <div class="cell" data-aos="fade-up" data-product="Titan 125">
                        <figure class="width-100">
                            <img src="assets/img/slide3.png" alt="">
                            <div class="square width-100 height-100"></div>
                        </figure>
                        <div class="width-100 text-center">
                            <h3><a href="#" data-toggle="modelForm">CG 125 Cargo</a></h3>
                            <p><a href="#" class="button text-uppercase small" data-toggle="modelForm">Tenho
                                    interesse</a></p>
                        </div>
                    </div>
                    <div class="cell" data-aos="fade-up" data-product="Moto 555">
                        <figure class="width-100">
                            <img src="assets/img/slide4.png" alt="">
                            <div class="square width-100 height-100"></div>
                        </figure>
                        <div class="width-100 text-center">
                            <h3><a href="#" data-toggle="modelForm">CG 125 Cargo</a></h3>
                            <p><a href="#" class="button text-uppercase small" data-toggle="modelForm">Tenho
                                    interesse</a></p>
                        </div>
                    </div>
                    <div class="cell" data-aos="fade-up" data-product="CB 500">
                        <figure class="width-100">
                            <img src="assets/img/slide5.png" alt="">
                            <div class="square width-100 height-100"></div>
                        </figure>
                        <div class="width-100 text-center">
                            <h3><a href="#" data-toggle="modelForm">CG 125 Cargo</a></h3>
                            <p><a href="#" class="button text-uppercase small" data-toggle="modelForm">Tenho
                                    interesse</a></p>
                        </div>
                    </div>
                    <div class="cell" data-aos="fade-up" data-product="CBR 600">
                        <figure class="width-100">
                            <img src="assets/img/slide1.png" alt="">
                            <div class="square width-100 height-100"></div>
                        </figure>
                        <div class="width-100 text-center">
                            <h3><a href="#" data-toggle="modelForm">CG 125 Cargo</a></h3>
                            <p><a href="#" class="button text-uppercase small" data-toggle="modelForm">Tenho
                                    interesse</a></p>
                        </div>
                    </div>
                </div>

                <nav aria-label="Pagination" class="margin-top-3 width-100 text-center">
                    <ul class="pagination">
                        <li class="pagination-previous disabled">Anteriores <span class="show-for-sr">page</span></li>
                        <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
                        <li><a href="#" aria-label="Page 2">2</a></li>
                        <li><a href="#" aria-label="Page 3">3</a></li>
                        <li><a href="#" aria-label="Page 4">4</a></li>
                        <li class="ellipsis" aria-hidden="true"></li>
                        <li><a href="#" aria-label="Page 12">12</a></li>
                        <li><a href="#" aria-label="Page 13">13</a></li>
                        <li class="pagination-next"><a href="#" aria-label="Next page">Próximas <span
                                        class="show-for-sr">page</span></a></li>
                    </ul>
                </nav>
            </section>
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
                            <label class="form-error" data-form-error-for="mobile">Necessário informar o
                                celular.</label>
                        </div>

                        <div class="small-12 medium-6 cell">
                            <label>Email:
                                <input type="email" maxlength="80" id="email" name="email" required>
                            </label>
                            <label class="form-error" data-form-error-for="email">Email inválido. Campo
                                obrigatório.</label>
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
    </div>
</div>


<?php
get_footer();
?>
