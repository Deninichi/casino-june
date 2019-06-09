<?php 

	$global_collapse_content = get_field( 'homepage_collapse_content' );

	$heading = $global_collapse_content['global_collapse_content']['heading'];
	$content_boxes = $global_collapse_content['global_collapse_content']['content'];

	if( ! $content_boxes || empty( $content_boxes ) ){
		return true;
	}
?>

<section class="content-section collapse-section bg-grey">
	
	<?php if ( isset( $heading ) ): ?>
		<h2 class="mb-4"><?php echo $heading; ?></h2>
	<?php endif ?>

	<div class="accordion" id="collapseContent">
		<?php foreach ( $content_boxes as $key => $content_block ): ?>
			
			<div class="card">
			    <div class="card-header" id="heading-<?php echo $key; ?>">
			      <h5 class="mb-0">
			        <button class="btn btn-link <?php echo ( $key > 0 ) ? 'collapsed' : ''; ?>" type="button" data-toggle="collapse" data-target="#collapse-<?php echo $key; ?>" aria-expanded="<?php echo ( $key > 0 ) ? 'false' : 'true'; ?>" aria-controls="collapse-<?php echo $key; ?>">
			         	<?php echo $content_block['block_heading'] ?>
			        </button>
			      </h5>
			    </div>

			    <div id="collapse-<?php echo $key; ?>" class="collapse <?php echo ( $key > 0 ) ? '' : 'show'; ?>" aria-labelledby="heading-<?php echo $key; ?> data-parent="#collapseContent">
			      <div class="card-body">
			        <?php echo $content_block['block_content'] ?>
			      </div>
			    </div>
			  </div>

		<?php endforeach ?>
	</div>

</section>