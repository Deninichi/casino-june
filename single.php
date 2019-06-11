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

get_header(); ?>


<div class="">

	<div class="main-content wrap row justify-content-center">
		<div id="primary" class="col-12 col-lg-12 col-xl-9">
			<main id="main" class="content" role="main">

				<div class="breadcrumbs mb-3">
					<?php the_breadcrumbs( '>' ); ?>
				</div>

				<div class="title-block mb-2">
					<?php bear_the_title(); ?>
				</div>

				<div class="description has-read-more mt-4 mb-5">
					<?php bear_the_description() ?>
				</div>

				<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */

						if ( 'list' === get_field('post_type') ) {
							get_template_part( 'template-parts/posts/content-list', get_post_type() );
						} else {
							get_template_part( 'template-parts/posts/content', get_post_type() );
						}

					endwhile;

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
