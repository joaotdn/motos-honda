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