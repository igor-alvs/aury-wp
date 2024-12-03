<?php

/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage None Plate
 * @since None Plate 1.0
 */

get_header(); ?>

<div class="content">

    <section class="topo pt-0 pt-md-5 wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-12 d-block d-lg-none">
                    <img src="<?php echo get_field('topo')['url']; ?>" alt="img-topo">
                </div>
                <div class="col-lg-5 py-4 py-lg-0">
                    <h1><?php echo get_field('titulo'); ?></h1>
                    <p class="mt-3"><?php echo get_field('subtitulo'); ?></p>
                    <button class="mt-4" type="button">EXPERIMENTE JÁ</button>
                </div>
            </div>
        </div>
        <img class="d-none d-lg-block" src="<?php echo get_field('topo')['url']; ?>" alt="img-topo">
    </section>
    <section class="cards wow fadeIn py-2 py-lg-0">
        <div class="container">
            <div class="row gap-4 gap-lg-0">
                <div class="col-lg-4">
                    <div class="card p-4 p-xl-5" id="first">
                        <h3><?php echo get_field('titulo_card'); ?></h3>
                        <p><?php echo get_field('texto_card'); ?></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card p-4 p-xl-5" id="second">
                        <h3><?php echo get_field('titulo_card2'); ?></h3>
                        <p><?php echo get_field('texto_card2'); ?></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card p-4 p-xl-5" id="third">
                        <h3><?php echo get_field('titulo_card3'); ?></h3>
                        <p><?php echo get_field('texto_card3'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="funciona m-4 wow fadeIn">
        <div class="container">
            <div class="row flex-md-column-reverse flex-lg-row">
                <div class="col-md-12 col-lg-6 pt-5 pt-lg-0 align-self-center">
                    <img src="<?php echo get_field('funcionamento')['url']; ?>" alt="img-comoFunciona">
                </div>
                <div class="col-md-12 col-lg-6 d-flex flex-column justify-content-evenly gap-4 pt-5 pt-lg-0">
                    <h2>Como Funciona</h2>
                    <div class="item-tabela pt-1 pt-lg-3">
                        <h3><?php echo get_field('texto_funcionamento'); ?></h3>
                        <p><?php echo get_field('detalhamento_func'); ?></p>
                        <hr>
                    </div>
                    <div class="item-tabela">
                        <h3><?php echo get_field('texto_funcionamento_2'); ?></h3>
                        <p><?php echo get_field('detalhamento_func_2'); ?></p>
                        <hr>
                    </div>
                    <div class="item-tabela">
                        <h3><?php echo get_field('texto_funcionamento_3'); ?></h3>
                        <p><?php echo get_field('detalhamento_func_3'); ?></p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="beneficios mt-5 wow fadeIn py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6 d-flex flex-column gap-5">
                    <h2>Benefícios da Telepsicologia</h2>
                    <div class="tabs d-flex flex-column gap-3">
                        <div class="tab py-3 ps-5">
                            <h3>Custo acessível:</h3>
                            <p>Terapia sem barreiras, esteja onde estiver.</p>
                        </div>
                        <div class="tab py-3 ps-5">
                            <h3>Acesso Facilitado:</h3>
                            <p>Terapia sem barreiras, esteja onde estiver.</p>
                        </div>
                        <div class="tab py-3 ps-5">
                            <h3>Conforto e Conveniência:</h3>
                            <p>Atendimento sem deslocamento, direto de casa.</p>
                        </div>
                        <div class="tab py-3 ps-5">
                            <h3>Mais opções de horários:</h3>
                            <p>Flexibilidade para se adaptar à sua rotina.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 pt-5 pt-lg-0 align-self-center">
                    <img src="<?php echo get_field('beneficios')['url']; ?>" alt="img-Beneficios">
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/cta') ?>
</div>

<?php get_footer(); ?>