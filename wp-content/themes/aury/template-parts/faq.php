<section class="faq py-4 wow fadeIn">
    <div class="container">
        <div class="row text-center">
            <h2>Perguntas Frequentes</h2>
        </div>
        <div class="row pb-5">
            <?php
            $args = array(
                'post_type' => 'faq',
                'posts_per_page' => -1,
                'order' => 'ASC',
                'orderby' => 'title'
            );
            $query = new WP_Query($args);
            $counter = 0;
            $column_counter = 0;

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();

                    if ($column_counter % 3 === 0) {
                        if ($column_counter > 0) {
                            
                            echo '</div>';
                        }
                        echo '<div class="col-lg-6">';
                    }

                    $is_first = ($counter === 0) ? 'show' : '';
            ?>
                    <div class="accordion accordion-flush py-2" id="accordionFlushFAQ">
                        <div class="accordion-item">
                            <h3>
                                <button class="accordion-button <?php echo $is_first ? '' : 'collapsed'; ?>" type="faq" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $counter; ?>" aria-expanded="<?php echo $is_first ? 'true' : 'false'; ?>" aria-controls="flush-collapse<?php echo $counter; ?>">
                                    <?php the_title(); ?>
                                </button>
                            </h3>
                            <div id="flush-collapse<?php echo $counter; ?>" class="accordion-collapse collapse <?php echo $is_first; ?>" aria-labelledby="flush-heading<?php echo $counter; ?>" data-bs-parent="#accordionFlushFAQ">
                                <div class="accordion-body">
                                    <p><?php the_content(); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                    $counter++;
                    $column_counter++;

                endwhile;
                echo '</div>';
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>