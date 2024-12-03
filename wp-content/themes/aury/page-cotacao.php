<?php

/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage None Plate
 * @since None Plate 1.0
 */

get_header(); ?>

<section class="cotacao py-5">
    <div class="container">
        <div class="row text-center">
            <h2>Simulador de Cotações</h2>
            <form id="form-simulador" class="d-flex flex-column gap-1">
                <div>
                    <label for="num-pessoas">Número de Pessoas:</label>
                    <input type="number" id="num-pessoas" name="num_pessoas" min="1" required>
                </div>
                <div id="idades-pessoas" class="mt-3"></div>
                <div class="d-flex justify-content-center gap-3 mt-3">
                    <button type="submit" class="btn btn-success">Simular</button>
                </div>
            </form>
            <div id="resultado-cotacao" class="mt-5"></div>
        </div>
    </div>
</section>


<?php get_footer(); ?>