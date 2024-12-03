<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage None Plate
 * @since None Plate 1.0
 */
?>


<!-- Footer Links Libraries -->

<!-- Alertify -->
<!-- https://alertifyjs.com/ -->
<!-- ATIVAR CSS NO HEADER! -->
<!-- <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/alertify/js/alertify.js'></script> -->

<!-- Lightbox -->
<!-- http://lokeshdhakar.com/projects/lightbox2/ -->
<!-- <a href="images/image-1.jpg" data-lightbox="image-1" data-title="My caption">Image #1</a> -->
<!-- ATIVAR CSS NO HEADER! -->
<!-- <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/lightbox/js/lightbox.min.js'></script> -->

<!-- Lince Form -->
<!-- Add class in your inputs: 'input-cep', 'input-cpf', 'input-datebr', 'input-tel', 'input-real', 'input-alpha', 'input-numeric' or 'input-email'. -->
<!-- ATIVAR CSS NO HEADER! -->
<!-- <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/linceform/linceform.js'></script> -->

<!--  Owl  -->
<!-- https://owlcarousel2.github.io/OwlCarousel2/ -->
<!-- ATIVAR CSS NO HEADER! -->
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/owl/owl.carousel.js'></script>

<!--  Swiper Slide  -->
<!-- https://swiperjs.com/ -->
<!-- ATIVAR CSS NO HEADER! -->
<!-- <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/swiper/swiper-bundle.min.js'></script> -->

<!--  WOW  -->
<!-- https://wowjs.uk/ -->
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/wow/wow.min.js'></script>

<!-- Bootstrap -->
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/bootstrap/bootstrap.min.js'></script>

<!-- Main JS -->
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/app.js'></script>

<!-- Footer Tags -->
<?php wp_footer(); ?>

<section class="footer py-4 wow fadeIn d-none d-lg-block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-start">
                <p>Copyright © 2024 - Todos os direitos reservados a <a href="https://novarotaseguros.com.br/home">Nova Rota Seguros</a></p>
            </div>
            <div class="col-lg-4 d-flex justify-content-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/LogoAury.svg" alt="" style="width: 130px; height: auto;">
            </div>
            <div class="col-lg-4 text-end">
                <p>Desenvolvido por <a href="#">Igor Bomfim</a></p>
            </div>
        </div>
    </div>
</section>
<section class="footer py-4 wow fadeIn d-block d-lg-none">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 d-flex justify-content-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/LogoAury.svg" alt="" style="width: 130px; height: auto;">
            </div>
            <div class="col-12 text-center">
                <p>Desenvolvido por <a href="#">Igor Bomfim</a></p>
            </div>
            <div class="col-12 text-center">
                <p>Copyright © 2024 - Todos os direitos reservados a <a href="https://novarotaseguros.com.br/home">Nova Rota Seguros</a></p>
            </div>
        </div>
    </div>
</section>

</body>

<script>
    new WOW().init();
    // document.body.addEventListener('mousemove', (e) => {
    //     const x = e.clientX;
    //     const y = e.clientY;

    //     // Atualiza as variáveis CSS para a posição atual do mouse
    //     document.body.style.setProperty('--x', `${x}px`);
    //     document.body.style.setProperty('--y', `${y}px`);
    // });
</script>


</html>