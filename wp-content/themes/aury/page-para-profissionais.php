<?php

/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage None Plate
 * @since None Plate 1.0
 */

get_header(); ?>

<section class="topo pt-5 wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-12 d-block d-lg-none">
                <img src="<?php echo get_field('topo')['url']; ?>" alt="img-topo">
            </div>
            <div class="col-12 col-lg-5 py-5">
                <h1><?php echo get_field('titulo'); ?></h1>
                <p class="mt-3"><?php echo get_field('subtitulo'); ?></p>
                <button class="mt-4" type="button">EXPERIMENTE JÁ</button>
            </div>
        </div>
    </div>
    <img class="d-none d-lg-block" src="<?php echo get_field('topo')['url']; ?>" alt="img-topo">
</section>
<section class="empresa wow fadeIn py-5">
    <div class="container">
        <div class="row py-5 text-center">
            <h2>Um ambiente feito especialmente para sua empresa</h2>
        </div>
        <div class="row py-5 justify-content-center gap-4 gap-lg-0">
            <?php
            $cards = get_field('cards');
            foreach ($cards as $key => $card) {
                $img = get_field('empresas', $card->ID)['url'];
            ?>
                <div class="col-md-12 col-lg-3 d-flex justify-content-center">
                    <div class="item-empresa d-flex flex-column justify-content-center align-items-center gap-4 p-5 text-center">
                        <img src="<?= $img ?>" alt="">
                        <h3><?= $card->post_title ?></h3>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="beneficios mt-5 wow fadeIn" id="colaboradores">
    <div class="container">
        <div class="row flex-column flex-lg-row">
            <div class="col-lg-5 py-5 py-lg-0">
                <h2>Por quê atender conosco?</h2>
            </div>
            <div class="col-lg-7 d-flex flex-column gap-5 pb-5">
                <div class="tabs d-flex flex-column gap-3">
                    <div class="tab py-4 ps-5">
                        <h3>Contato com pacientes das maiores empresas do Brasil</h3>
                    </div>
                    <div class="tab py-4 ps-5">
                        <h3>Plataforma tecnológica para apoiar o profissional na interação com paciente</h3>
                    </div>
                    <div class="tab py-4 ps-5">
                        <h3>Suporte completo para apoiar com o uso da plataforma se necessário</h3>
                    </div>
                    <div class="tab py-4 ps-5">
                        <h3>Nosso apoio completo para garantir a melhor experiência</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</section>
<?php get_template_part('template-parts/faq') ?>
<?php get_template_part('template-parts/cta') ?>

<?php get_footer(); ?>