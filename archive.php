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

$post_obj = get_queried_object();

$args = array(
	'post_type'   => array( 'post' ),
    'tag_id'      => $post_obj->term_id,
    'posts_per_page' => -1
);
$tag_query = new WP_Query( $args );

get_header(); ?>


<div class="">

	<div class="row breadcrumbs">
		<?php the_breadcrumbs(); ?>
	</div>

	<div class="title-block text-center d-flex justify-content-center align-items-center mb-3">
		<h1><?php bear_the_title(); ?></h1>
	</div>

	<div class="post-modify-date mb-4 text-center">
		<span class="text-wrapper">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bag-white.png" alt="">
			<?php bear_the_post_date( 'tag' ); ?>
		</span>
	</div>

	<div class="description has-read-more text-center">
		<?php bear_the_description() ?>
	</div>

	<div class="main-content wrap row justify-content-center">
		<div id="primary" class="col-12 col-lg-12 col-xl-9">
			<main id="main" class="content" role="main">

				<?php

				if ( $tag_query->have_posts() ) :
					
					/* Start the Loop */
					while ( $tag_query->have_posts() ) : $tag_query->the_post();

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
