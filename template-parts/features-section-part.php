<?php  

	$features = get_field( 'features_section' );
?>

<section class="content-section features-section">
	
	<div class="row">
		
		<?php foreach ( $features['global_features'] as $key => $feature ): ?>
			
			<div class="col-12 col-md-3 text-center">
				<div class="bg-grey feature-wrap">
					<div class="image-wrap">
						<img src="<?php echo $feature['image']['url']; ?>" alt="">
					</div>
					<h3 class="mt-3"><?php echo $feature['title']; ?></h3>
				</div>
			</div>

		<?php endforeach ?>

	</div>

</section>