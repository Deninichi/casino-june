<?php  

	$author = get_field( 'author_section' );
	$author = $author['global_author'];

	$author['totalt'] = ( ! empty( $author['totalt'] ) ) ? $author['totalt'] : 0;
	$author['betyg'] = ( ! empty( $author['betyg'] ) ) ? $author['betyg'] : 0;

	$rating = 100 / 5 * $author['betyg'];
?>	

<section class="content-section author-section">
	<style>
		.author-section .stars::before {
			width: <?php echo $rating; ?>%;
		}
	</style>
	<div class="row">
		<div class="col-12 col-md-2 justify-content-center d-flex mb-3 mb-md-0">
			<?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
		</div>
		<div class="col-12 col-md-4 justify-content-center d-flex flex-column">
			<h3><?php the_author(); ?></h3>
			<p class="email"><?php echo get_the_author_meta( 'user_email' ); ?></p>
		</div>
		<div class="col-12 col-md-3 justify-content-center d-flex flex-column align-items-start">
			<div class="stars mb-2">
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
			</div>
			<p class="mb-0"><?php _e( 'Totalt:', 'loans' ); ?> <span><?php echo $author['totalt'] ?></span> <?php _e( 'röster.', 'loans' ); ?> <?php _e( 'Betyg:', 'loans' ); ?> <span><?php echo $author['betyg']; ?></span></p>
		</div>
		<div class="col-12 col-md-3 actions d-flex align-items-center">
			<a class="btn btn-green" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php _e( 'FÖRFATTARE', 'loans' ); ?></a>
		</div>
	</div>
</section>