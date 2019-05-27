<?php
get_header();
$terms     = get_the_terms( $post->ID, 'categorias' );
$term_link = get_term_link( $terms[0] );

$description     = get_field( 'moto_descricao' );
$colors          = get_field( 'moto_cores' );
$especifications = get_field( 'moto_especificacoes' );

$page = get_page_by_title('Confirmacao');
$link = get_page_link($page->ID);
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
                        <li><a href="<?php echo get_post_type_archive_link( 'motocicletas' ); ?>">Motocicletas</a></li>
						<?php
						if ( ! is_wp_error( $term_link ) ) {
							echo '<li><a href="' . esc_url( $term_link ) . '">' . $terms[0]->name . '</a></li>';
						}
						?>
                        <li class="disabled"><?php the_title(); ?></li>
                    </ul>
                </nav>

                <header class="width-100 page-header section-title-1 grid-x">
                    <div class="cell small-12 medium-8 margin-bottom-1 text-center medium-text-left">
                        <h3 class="font-bold text-uppercase font-san-serif display-inline-block">
							<?php
							the_title();
							?>
                        </h3>
                        <p class="medium-gray"><?php echo $description; ?></p>
                    </div>
                </header>

                <section class="grid-x grid-padding-x">
                    <div class="cell small-12 medium-8 product-colors">
                        <ul class="tabs" data-tabs id="choice-colors">
							<?php
							$i = 0;
							if ( $colors ) {
								foreach ( $colors as $color ) {
									if ( is_wp_error( $color ) ) {
										continue;
									}
									$active = $i == 0 ? 'is-active' : '';
									$name   = $color['moto_nome_cor'];
									echo '<li class="tabs-title ' . $active . '"><a href="#" data-tabs-target="' . slugify( $name ) . '" aria-selected="true">' . $name . '</a></li>';
									$i ++;
								}
							}
							?>
                        </ul>

                        <div class="tabs-content" data-tabs-content="choice-colors">
							<?php
							$i = 0;
							if ( $colors ):
								foreach ( $colors as $color ):
									$active = $i == 0 ? 'is-active' : '';
									?>
                                    <div class="tabs-panel <?php echo $active; ?>" id="<?php echo slugify($color['moto_nome_cor']); ?>">
                                        <img src="<?php echo $color['moto_foto_cor']; ?>" alt="Foto do produto">
                                    </div>
								<?php
                                $i++;
								endforeach;
							endif;
							?>
                        </div>

                        <div class="width-100 single-form margin-top-2 margin-bottom-2">
                            <header class="width-100 margin-bottom-2">
                                <h4 class="font-san-serif primary-color"><strong>Tenho interesse</strong></h4>
                                <p class="medium-gray">
                                    <small>Preencha o formulário abaixo e aguarde um de nossos atendentes.</small>
                                </p>
                            </header>

                            <form id="myhonda"
                                  class="margin-top-1"
                                  action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8"
                                  method="POST"
                                  data-abide
                                  novalidate
                            >
                                <div class="grid-x grid-padding-x">
                                    <div class="small-12 cell">
                                        <label>Concessionária de interesse:
                                            <select id="dealer_code_interest__c" name="dealer_code_interest__c">
                                                <option value="1010646">Cavalcanti Cajazeiras</option>
                                                <option value="1020641">Cavalcanti Itaporanga</option>
                                            </select>
                                        </label>
                                        <label class="form-error" data-form-error-for="dealer_code_interest__c">Informe
                                            a
                                            concessionária.</label>
                                    </div>
                                    <div class="small-12 medium-6 cell">
                                        <label>Nome:
                                            <input type="text" id="first_name" name="first_name" maxlength="40"
                                                   required>
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
                                                   required>
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

                                <div class="grid-x grid-margin-x margin-top-1">
                                    <fieldset class="cell large-6">
                                        <button class="button success expanded white" type="submit" value="Submit">
                                            Enviar
                                        </button>
                                    </fieldset>
                                    <fieldset class="cell large-6">
                                        <button class="button warning expanded white" type="reset" value="Reset">Limpar
                                        </button>
                                    </fieldset>
                                </div>

                                <input type="hidden" id="model_interest__c" name="model_interest__c"
                                       value="<?php the_title(); ?>">
                                <input type=hidden name="oid" value="00D61000000HSuF">
                                <input type="hidden" name="type__c" id="type__c" value="HDA">
                                <input type="hidden" name="Lead_Source" id="Lead_Source" value="WebSite Concessionária">
                                <input type="hidden" name="sub_source_media__c" id="sub_source_media__c" value="Site">
                                <input type=hidden name="retURL" value="<?php echo $link; ?>">
                            </form>
                        </div>
                    </div>
                    <div class="cell small-12 medium-4 product-espec">
                        <header class="width-100 margin-bottom-1">
                            <h4 class="font-san-serif text-uppercase primary-color"><strong>Especificações</strong></h4>
                        </header>
                        <ul class="menu vertical">
                            <li>
                                <p class="margin-0"><strong>Motor</strong></p>
                                <span class="display-block"><b>Tipo:</b> <?php echo $especifications['motor_tipo']; ?></span>
                                <span class="display-block"><b>Cilindrada:</b> <?php echo $especifications['motor_cilindrada']; ?></span>
                                <span class="display-block"><b>Potência máxima:</b> <?php echo $especifications['motor_potencia']; ?></span>
                                <span class="display-block"><b>Torque Máximo:</b> <?php echo $especifications['motor_torque']; ?></span>
                                <span class="display-block"><b>Transmissão:</b> <?php echo $especifications['motor_transmissao']; ?></span>
                                <span class="display-block"><b>Sistema de Partida:</b> <?php echo $especifications['motor_partida']; ?></span>
                                <span class="display-block"><b>Diâmetro x Curso:</b> <?php echo $especifications['motor_diametro']; ?></span>
                                <span class="display-block"><b>Relação de Compressão:</b> <?php echo $especifications['motor_relacao_de_compressao']; ?></span>
                                <span class="display-block"><b>Sistema Alimentação:</b> <?php echo $especifications['motor_sistema_alimentacao']; ?></span>
                                <span class="display-block"><b>Combustível:</b> <?php echo $especifications['motor_combustivel']; ?></span>
                            </li>

                            <li>
                                <p class="margin-0"><strong>Sistema Elétrico</strong></p>
                                <span class="display-block"><b>Ignição:</b> <?php echo $especifications['eletrico_ignicao']; ?></span>
                                <span class="display-block"><b>Bateria:</b> <?php echo $especifications['eletrico_bateria']; ?></span>
                                <span class="display-block"><b>Farol:</b> <?php echo $especifications['eletrico_farol']; ?></span>
                            </li>

                            <li>
                                <p class="margin-0"><strong>Capacidade</strong></p>
                                <span class="display-block"><b>Tanque de Combustível:</b> <?php echo $especifications['cap_toque_de_combustivel']; ?></span>
                                <span class="display-block"><b>Óleo do Motor:</b> <?php echo $especifications['cap_oleo_do_motor']; ?></span>
                            </li>

                            <li>
                                <p class="margin-0"><strong>Dimensões</strong></p>
                                <span class="display-block"><b>Comprimento x Largura x Altura:</b> <?php echo $especifications['dim_comprimento_x_largura_x_altura']; ?></span>
                                <span class="display-block"><b>Distância entre eixos:</b> <?php echo $especifications['dim_distancia_entre_eixos']; ?></span>
                                <span class="display-block"><b>Distância mínima do solo:</b> <?php echo $especifications['dim_distancia_minima_do_solo']; ?></span>
                                <span class="display-block"><b>Altura do assento:</b> <?php echo $especifications['dim_altura_do_assento']; ?></span>
                                <span class="display-block"><b>Peso Seco:</b> <?php echo $especifications['dim_peso_seco']; ?></span>
                            </li>

                            <li>
                                <p class="margin-0"><strong>Chassi</strong></p>
                                <span class="display-block"><b>Tipo:</b> <?php echo $especifications['cha_tipo']; ?></span>
                                <span class="display-block"><b>Suspensão Dianteira/Curso:</b> <?php echo $especifications['cha_suspensao_dianteiracurso']; ?></span>
                                <span class="display-block"><b>Suspensão Traseira/Curso:</b> <?php echo $especifications['cha_suspensao_traseiracurso']; ?></span>
                                <span class="display-block"><b>Freio Dianteiro/Diâmetro:</b> <?php echo $especifications['cha_freio_dianteirodiametro']; ?></span>
                                <span class="display-block"><b>Freio Traseiro/Diâmetro:</b> <?php echo $especifications['cha_freio_traseirodiametro']; ?></span>
                                <span class="display-block"><b>Pneu Dianteiro:</b> <?php echo $especifications['cha_pneu_dianteiro']; ?></span>
                                <span class="display-block"><b>Pneu Traseiro:</b> <?php echo $especifications['cha_pneu_traseiro']; ?></span>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php
get_footer();
?>