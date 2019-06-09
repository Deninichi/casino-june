<?php get_header(); ?>


<div class="wrap row">
	<div id="primary" class="main-content col-12 col-lg-8 col-xl-9">
		<main id="main" class="content" role="main">

			<?php

			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */

					get_template_part( 'template-parts/posts/content', get_post_type() );

				endwhile;

			else :

				get_template_part( 'template-parts/posts/content', 'none' );

			endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
	<div id="sidebar" class="col-12 col-lg-4 col-xl-3">
		<?php dynamic_sidebar( 'primary-sidebar' ); ?>
	</div>
</div><!-- .wrap -->

<?php get_footer(); ?>