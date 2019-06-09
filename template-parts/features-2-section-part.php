<?php  

	$features_2 = get_field( 'features_2_section' );
	$features = $features_2['global_features_2'];
?>

<section class="content-section features-2-section full-width">

	<div class="container">

		<?php if ( $features['heading'] ): ?>
			<h2 class="text-center"><?php echo $features['heading']; ?></h2>
		<?php endif ?>
		
		<?php if ( $features['content'] ): ?>
			<p class="text-center mb-5"><?php echo $features['content']; ?></p>
		<?php endif ?>
		
		<div class="row boxes">
			<?php foreach ( $features['boxes'] as $key => $box ): ?>
				<div class="col-12 col-md-3 mb-3 mb-md-0">
					<div class="img-wrap">
						<img src="<?php echo $box['image']['url'] ?>" alt="">
					</div>
					<h3><?php echo $box['heading']; ?></h3>
					<p><?php echo $box['content']; ?></p>
				</div>
			<?php endforeach ?>
		</div>
	</div>
	
</section>