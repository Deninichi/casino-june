<?php 

	$gallery_images = get_field( 'lender_images_gallery' );
	$gallery_images = $gallery_images['global_images_gallery'];

	if ( ! $gallery_images ) {
		return false;
	}
?>

<section class="gallery-section content-section pl-0 pr-0 mb-0">
	
	<div class="row">
		<?php foreach ( $gallery_images as $key => $image ): ?>

			<div class="col-12 col-md-4">
				<div class="image-wrap white-shadow">
					<img src="<?php echo esc_url( $image['image']['sizes']['medium'] ); ?>" full-image="<?php echo $image['image']['url']; ?>" alt="<?php echo esc_textarea( $image['image_heading'] ); ?>">
					<div class="full-size-wrap">
						<span class="full-size">
							<?php _e( 'Full Size', 'loans' ); ?>
						</span>
					</div>
				</div>
				<h3 class="mt-3 text-center"><?php echo esc_textarea( $image['image_heading'] ); ?></h3>
			</div>

		<?php endforeach ?>
	</div>

	<div class="full-image-container">
		<div class="full-image-wrap">
			<img src="" alt="">
		</div>
	</div>
	<div class="full-image-overlay"></div>

</section>