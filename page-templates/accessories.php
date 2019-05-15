<?php
/**
 * Template Name: Acessórios
 */

//Header
get_header();

?>
<div id="page-body" class="grid-container"
     data-aos="fade"
     data-aos-delay="800"
>
    <div class="grid-x grid-padding-x">
        <div class="cell small-12">
            <nav aria-label="You are here:" role="navigation" class="width-100">
                <ul class="breadcrumbs">
                    <li><a href="<?php echo get_home_url(); ?>">Principal</a></li>
                    <li><a href="<?php echo get_home_url(); ?>#home-services">Serviços</a></li>
                    <li class="disabled">Peças e acessórios</li>
                </ul>
            </nav>

            <header class="width-100 page-header section-title-3 grid-x">
                <div class="cell small-12 margin-bottom-1 text-center medium-text-left">
                    <h3 class="font-bold text-uppercase font-san-serif display-inline-block margin-bottom-1">
                        Peças e acessórios
                    </h3>
                    <p>Solicite o orçamento de peças e acessórios genuínos Honda. Preencha o formulário e aguarde nosso
                        contato!</p>
                </div>
            </header>

            <section id="page-content" class="padding-bottom-3">
                <div class="accessories-form">
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
                                <div class="small-12 cell">
                                    <label>Tipo de acessório:
                                        <select id="model_interest__c" name="model_interest__c">
                                            <option value="Adesivos de Roda">Adesivos de Roda</option>
                                            <option value="Capa de Assento">Capa de Assento</option>
                                            <option value="Capa de Chuva">Capa de Chuva</option>
                                            <option value="Capacetes">Capacetes</option>
                                            <option value="Articulado">Articulado</option>
                                            <option value="Off-Road">Off-Road</option>
                                            <option value="Street Aberto">Street Aberto</option>
                                            <option value="Street Fechado">Street Fechado</option>
                                            <option value="Cavalete Lateral">Cavalete Lateral</option>
                                            <option value="Jaqueta Speed">Jaqueta Speed</option>
                                            <option value="Jaqueta Street">Jaqueta Street</option>
                                            <option value="Jaqueta Summer">Jaqueta Summer</option>
                                            <option value="Kit Transmissão Gold">Kit Transmissão Gold</option>
                                            <option value="Luva Speed">Luva Speed</option>
                                            <option value="Manoplas">Manoplas</option>
                                            <option value="Protetor de Bocal">Protetor de Bocal</option>
                                            <option value="Protetor de tanque Honda">Protetor de tanque Honda</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="small-12 medium-6 cell">
                                    <label>Nome:
                                        <input type="text" id="first_name" name="first_name" maxlength="40" required>
                                    </label>
                                    <label class="form-error" data-form-error-for="first_name">O nome é
                                        obrigatório!</label>
                                </div>
                                <div class="small-12 medium-6 cell">
                                    <label>Sobrenome:
                                        <input type="text" maxlength="80" id="last_name" name="last_name" required>
                                    </label>
                                    <label class="form-error" data-form-error-for="last_name">O sobrenome é
                                        obrigatório!</label>
                                </div>
                                <div class="small-12 medium-6 cell">
                                    <label>Celular:
                                        <input type="tel" maxlength="14" minlength="11" id="mobile" name="mobile"
                                               pattern="number" required>
                                    </label>
                                    <label class="form-error" data-form-error-for="mobile">Necessário informar o
                                        celular. Apenas números.</label>
                                </div>

                                <div class="small-12 medium-6 cell">
                                    <label>Email:
                                        <input type="email" maxlength="80" id="email" name="email" pattern="email"
                                               required>
                                    </label>
                                    <label class="form-error" data-form-error-for="email">Email inválido. Campo
                                        obrigatório.</label>
                                </div>
                                <div class="small-12 cell">
                                    <label>CPF:
                                        <input type="text" maxlength="11" id="cpf__c" name="cpf__c" pattern="number"
                                               required>
                                    </label>
                                    <label class="form-error" data-form-error-for="cpf__c">CPF inválido. Apenas
                                        números.</label>
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
                                    <button class="button success expanded white" type="submit" value="Submit">Enviar
                                    </button>
                                </fieldset>
                                <fieldset class="cell large-6">
                                    <button class="button warning expanded white" type="reset" value="Reset">Limpar
                                    </button>
                                </fieldset>
                            </div>
                        </div>

                        <input type=hidden name="oid" value="00D61000000HSuF">
                        <input type="hidden" name="type__c" id="type__c" value="CS">
                        <input type="hidden" name="Lead_Source" id="Lead_Source" value="WebSite Concessionária">
                        <input type="hidden" name="sub_source_media__c" id="sub_source_media__c" value="Site">
                        <input type=hidden name="retURL" value="http://www.honda.com.br/Paginas/default.aspx">
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>
<?php
get_footer();
?>
