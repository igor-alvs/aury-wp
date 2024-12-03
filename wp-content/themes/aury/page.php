<?php

/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage None Plate
 * @since None Plate 1.0
 */

get_header(); ?>


<meta property='og:image' content='<?php the_post_thumbnail_url() ?>' />

<div id="content" class="reading reading-page">
    <!-- BREADCRUMB -->
    <div class="bread-crumb" typeof="BreadcrumbList" vocab="http://schema.org/">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
					if (function_exists('bcn_display')) {
						bcn_display();
					}
					?>
                </div>
            </div>
        </div>
    </div>

    <!-- ARTICLE -->
    <article id="page" class="page page-<?php echo $post->ID; ?>">
        <main class="page-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <header class="page-header">
                            <div class="the-title">
                                <h1><?php the_title(); ?></h1>
                            </div>
                        </header>
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <div class="the-content">
                            <?php the_content(); ?>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </main>
    </article>
</div>
<?php get_footer(); ?>