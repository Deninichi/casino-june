<?php 

	$boxes = get_field( 'homepage_icon_boxes' );

	if( ! $boxes['global_icon_boxes'] || empty( $boxes['global_icon_boxes'] ) ){
		return true;
	}

?>

<section class="content-section icon-boxes">
	
	<div class="row">
		<?php foreach ( $boxes['global_icon_boxes'] as $key => $box ): ?>
			<div class="box col-12 col-md-6 col-lg-4">
				<img src="<?php echo $box['icon']['url']; ?>" alt="">
				<h5 class="mt-4 mb-4"><a href="<?php echo $box['heading_url']; ?>"><?php echo $box['heading']; ?></a></h5>
				<p><?php echo $box['text']; ?></p>
			</div>
		<?php endforeach ?>
	</div>

</section>