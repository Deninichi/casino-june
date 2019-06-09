<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

$term_obj = get_queried_object();
$term_id = $term_obj->term_id;

$top_3_lenders_heading = get_field( 'top_3_lenders_heading', $term_obj );
$top_3_lenders         = get_field( 'top_3_lenders', $term_obj );

$posts_feed_heading = get_field( 'category_posts_feed_heading', $term_obj );

get_header(); ?>


<div class="container">

	<div class="title-block text-center d-flex justify-content-center align-items-center mb-3">
		<h1><?php loans_the_title(); ?></h1>
	</div>
	<div class="description has-read-more text-center">
		<?php loans_the_description() ?>
	</div>

	<div class="post-modify-date add-strike-through mt-5 mb-3">
		<span class="text-wrapper">
			<i class="fas fa-clock"></i>
			<?php loans_the_post_date(); ?>
		</span>
		<div class="breadcrumbs">
			<?php the_breadcrumbs(); ?>
		</div>
	</div>

	<div class="wrap row justify-content-center">
		<div id="primary" class="main-content col-12 col-lg-12 col-xl-9">
			<main id="main" class="content" role="main">

				<!-- TOP 3 SECTION -->
				<?php if ( ! empty($top_3_lenders) ): ?>
    
				    <section class="content-section text-center mt-0 mb-3 pl-0 pt-0 pr-0">

				      	<?php if ( ! empty( $top_3_lenders_heading ) ): ?>
				        	<h2 class="bg-grey section-title colored-title text-center pt-3 pb-3 mb-4 border color-border"><?php echo $top_3_lenders_heading ?></h2>
				      	<?php endif ?>

				      	<div class="row posts-loop mt-3">

				        <?php
				          	$args = array(
				            	'post_type'   => 'lender',
				            	'post__in'    => $top_3_lenders,
				            	'numberposts' => -1
				          	);
				          	$posts_query = new WP_Query( $args );


				          	if ( $posts_query->have_posts() ) :

				            	/* Start the Lenders Loop */
				            	while ( $posts_query->have_posts() ) : $posts_query->the_post();

				              		/*
				               		* Include the Post-Format-specific template for the content.
				               		* If you want to override this in a child theme, then include a file
				               		* called content-___.php (where ___ is the Post Format name) and that will be used instead.
				               		*/	

				              		get_template_part( 'template-parts/posts/loop-2', get_post_type() );

				            	endwhile;
				            	wp_reset_query();
				          	endif;
				        	?>
				        
				      	</div>

				    </section>
				 <?php endif ?>

				<?php
				// Main Loop
				if ( have_posts() ) :

					?>

					<h2 class="section-title colored-title text-center pt-3 pb-3 mb-4 border color-border"><?php echo $posts_feed_heading; ?></h2>

					<?php

					/* Start the Main Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/posts/loop', get_post_type() );

					endwhile;

					if ( function_exists('the_pagination_links') ): ?>
						<div class="pagination">
							<?php  the_previous_page_url(); ?>
							<ul>
								<?php the_pagination_links(); ?>
							</ul>
							<?php the_next_page_url(); ?>
						</div>
					<?php endif;

				endif;
				?>

			</main><!-- #main -->
		</div><!-- #primary -->
		
		<div id="sidebar" class="col-12 col-lg-4 col-xl-3">
			<?php dynamic_sidebar( 'primary-sidebar' ); ?>
		</div>
	</div><!-- .wrap -->
</div><!-- .container -->

<?php get_footer();
