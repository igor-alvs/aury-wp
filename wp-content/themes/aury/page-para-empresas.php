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
<section class="clientes mt-5 wow fadeIn">
    <div class="container">
        <div class="row text-center">
            <h2><?php echo get_field('titulo_clientes'); ?></h2>
            <div class="owl-carousel owl-clientes pt-5">
                <?php
                $args = array(
                    'post_type' => 'cliente',
                    'posts_per_page' => -1
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>
                        <div class="item">
                            <img src="<?php echo get_field('logo_cliente')['url']; ?>" alt="logo-<?php echo get_field('logo_cliente')['alt']; ?>">
                        </div>
                <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>
<section class="plano mt-5 wow fadeIn">
    <div class="container">
        <div class="row text-center pt-5">
            <h2><?php echo get_field('titulo_planos'); ?></h2>
        </div>
        <div class="row pt-5">
            <?php
            $card_detalhes = get_field('card_dos_detalhes');
            $card_detalhes2 = get_field('card_dos_detalhes_2');
            $card_detalhes3 = get_field('card_dos_detalhes_3');
            $card_detalhes4 = get_field('card_dos_detalhes_4');
            ?>
            <div class="col-sm-6 col-lg-3">
                <div class="plano-item">
                    <img src="<?php echo $card_detalhes['imagem_detalhes'] ?>" alt="icon-1">
                    <div class="box-plano p-4">
                        <h3><?php echo $card_detalhes['texto_detalhes'] ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="plano-item">
                    <img src="<?php echo $card_detalhes2['imagem_detalhes'] ?>" alt="icon-1">
                    <div class="box-plano p-4">
                        <h3><?php echo $card_detalhes2['texto_detalhes'] ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="plano-item">
                    <img src="<?php echo $card_detalhes3['imagem_detalhes'] ?>" alt="icon-1">
                    <div class="box-plano p-4">
                        <h3><?php echo $card_detalhes3['texto_detalhes'] ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="plano-item">
                    <img src="<?php echo $card_detalhes4['imagem_detalhes'] ?>" alt="icon-1">
                    <div class="box-plano p-4">
                        <h3><?php echo $card_detalhes4['texto_detalhes'] ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="empresa wow fadeIn my-5 py-5">
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
                <div class="col-lg-4 d-flex justify-content-center">
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
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-5 align-self-center pt-5 pt-lg-0">
                <img class="w-100" src="<?php echo get_field('beneficios_colaboradores')['url']; ?>" alt="img-Colaboradores">
            </div>
            <div class="col-lg-7 d-flex flex-column gap-5">
                <h2>Como a terapia ajuda os colaboradores?</h2>
                <div class="tabs d-flex flex-column gap-3">
                    <div class="tab py-4 ps-5">
                        <h3>Desenvolvimento de habilidades de enfrentamento</h3>
                    </div>
                    <div class="tab py-4 ps-5">
                        <h3>Aumento da autoestima e autoconfiança</h3>
                    </div>
                    <div class="tab py-4 ps-5">
                        <h3>Melhoria da resiliência emocional</h3>
                    </div>
                    <div class="tab py-4 ps-5">
                        <h3>Redução da ansiedade e do estresse</h3>
                    </div>
                    <div class="tab py-4 ps-5">
                        <h3>Maior clareza de pensamento e tomada de decisão</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="beneficios mt-5 wow fadeIn py-5" id="colaboradores">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 d-flex flex-column gap-5">
                <h2>Como a terapia ajuda os colaboradores?</h2>
                <div class="tabs d-flex flex-column gap-3">
                    <div class="tab py-4 ps-5">
                        <h3>Desenvolvimento de habilidades de enfrentamento</h3>
                    </div>
                    <div class="tab py-4 ps-5">
                        <h3>Aumento da autoestima e autoconfiança</h3>
                    </div>
                    <div class="tab py-4 ps-5">
                        <h3>Melhoria da resiliência emocional</h3>
                    </div>
                    <div class="tab py-4 ps-5">
                        <h3>Redução da ansiedade e do estresse</h3>
                    </div>
                    <div class="tab py-4 ps-5">
                        <h3>Maior clareza de pensamento e tomada de decisão</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 align-self-center py-5 py-lg-0">
                <img class="w-100" src="<?php echo get_field('beneficios_empresa')['url']; ?>" alt="img-Empresa">
            </div>
        </div>
    </div>
</section>
<?php get_template_part('template-parts/faq') ?>
<?php get_template_part('template-parts/cta') ?>

<?php get_footer(); ?>

<script>
    $('.owl-carousel.owl-clientes').owlCarousel({
        loop: true,
        margin: 50,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 6
            }
        }
    })
</script>