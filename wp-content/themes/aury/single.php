<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage None Plate
 * @since None Plate 1.0
 */

get_header(); ?>

<?php
	// Recebe o Thumbnail da Imagem Destacada
	// Sizes Example: thumbnail, medium, large, full
    $post_thumbnail_id = get_post_thumbnail_id($post->ID);
    $post_thumbnail_url = wp_get_attachment_image_src( $post_thumbnail_id, $size='large')[0];

    // Recebe as Categorias
	$categoryclass = '';
	$categories = get_the_category();
	foreach ( $categories as $category ) { 
	    $categoryclass .= ' ct-'.esc_attr( $category->slug ); 
	}
?>

<meta property='og:image' content='<?php echo $post_thumbnail_url; ?>'/>

<div id="content" class="reading reading-single">
	<!-- BREADCRUMB -->
	<div class="bread-crumb" typeof="BreadcrumbList" vocab="http://schema.org/">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12">
	                <?php
	                    if(function_exists('bcn_display')) {
	                        bcn_display();
	                    }
	                ?>
	            </div>
	        </div>
	    </div>
	</div>

	<!-- ARTICLE -->
	<article id="page" class="single-<?php echo $post->ID; ?><?php echo $categoryclass; ?>">
		<main class="page-container">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<header class="page-header">
							<div class="the-title">
								<h1><?php the_title(); ?></h1>
							</div>
							<div class="the-date">
								<p>Publicado em <?php echo get_the_date(); ?></p>
							</div>
							<div class="the-categories">
								<?php
									echo get_the_category_list();
								?>
							</div>
		                    <div class="share-this">
		                        <div class="social-media">
		                            <ul>
		                                <li><a href="https://www.facebook.com/sharer/sharer.php?&u=<?php echo get_permalink(); ?>&display=popup&ref=plugin&src=share_button" target="_blank" class="ico-face"><i class="fa fa-facebook"></i></a></li>
		                                <li><a href="https://twitter.com/home?status=<?php echo get_the_title()." ".get_permalink(); ?>" target="_blank" class="ico-twitter"><i class="fa fa-twitter"></i></a></li>
		                                <li><a href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>" target="_blank" class="ico-gplus"><i class="fa fa-google-plus"></i></a></li>
		                                <li><a href='mailto:?subject=<?php echo get_the_title(); ?>&amp;body=<?php the_excerpt(); ?> <?php echo get_permalink(); ?>' class='ico-email'><i class='fa fa-envelope'></i></a></li>
		                            </ul>
		                        </div>
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
