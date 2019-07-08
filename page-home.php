<?php

/* Template Name: Home Page */

?>

<?php get_header(); ?>

<div class="homepage">
	<div class="main-content row justify-content-center">
		<div id="content" class="content col-12 col-lg-12 col-xl-9">

			<div class="title-block mb-2">
				<?php bear_the_title(); ?>
			</div>

			<div class="description has-read-more mt-4 mb-5">
				<?php bear_the_description() ?>
			</div>

			<?php
				global $wp_query;
				$tmp_query = $wp_query;

				$paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;
				$posts_args = array(
					'post_type' 	 => 'post',
					'posts_per_page' => -1,
					'paged'          => $paged
				);
				$wp_query = new WP_Query( $posts_args );

				// Posts Loop
				if ( have_posts() ) :

					/* Start the Main Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/posts/post-general-info' );

					endwhile;

					wp_reset_query();

					$wp_query = $tmp_query;

				endif;
			?>

			<section class="advanced-content mt-5">
				<?php the_field( 'advanced_content' ); ?>
			</section>

		</div>
		<div id="sidebar" class="col-12 col-lg-4 col-xl-3">
			<?php dynamic_sidebar( 'primary-sidebar' ); ?>
		</div>
	</div>

</div>

<?php get_footer(); ?>