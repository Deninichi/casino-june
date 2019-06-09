<?php 

	$rating = 100 / 5 * get_field( 'post_rating' );

	if ( $rating > 70 ) {
		$rating = $rating + $rating * 0.05;
	}
	

?>

<article <?php post_class( 'post-loop mb-4' ); ?>>
	<style>
		.post-loop.post-<?php echo get_the_ID(); ?> .post-content .post-meta .stars::before {
			width: <?php echo $rating; ?>%;
		}
	</style>
	<div class="row-wrapper p-0">

		<div class="logo-wrap bg-grey col-12 col-md-3 d-flex align-items-center justify-content-center">
			<div class="logo">
				<?php if ( has_post_thumbnail() ): ?>
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
				<?php else : ?>
					<img src="/wp-content/themes/loans/assets/images/posts_default_image.png" alt="">
				<?php endif; ?>
			</div>
		</div>

		<div class="post-content col-12 col-md-9 pl-0 pr-0">
			<h3 class="pl-4 pr-4 pt-3 mb-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

			<div class="pl-4 pr-4">
				<?php echo wp_trim_words( bear_get_description(), 30, '' ); ?>
			</div>

			<div class="post-meta pl-0 pr-0 pl-md-4 pr-md-4 pt-3 pb-3 mt-4">

				<!-- Rating -->
				<div class="stars mr-4">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
				</div>

				<!-- Author -->
				<span class="text-wrapper author mr-0 mr-md-4">
					<i class="fas fa-paw mr-2"></i>
					<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
				</span>

				<!-- Date -->
				<span class="text-wrapper date">
					<img class="mr-2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bag.png" alt="">
					<?php echo get_the_date( 'd.m.Y' ); ?>
				</span>

				<a  class="btn-link" 
					href="<?php the_permalink(); ?>">
					Read More
					<i class="fas fa-angle-right"></i>
				</a>
			</div>
		</div>
	</div>
</article>