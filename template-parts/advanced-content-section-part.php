<?php 

	$advanced_content = get_field( 'lender_third_content' );
	$advanced_content = $advanced_content['global_heading_list_content'];

	if ( ! $advanced_content ) {
		return false;
	}

?>

<section class="advanced-content">
	
	
	<div class="headings-list">
		<ul>
			<?php foreach ( $advanced_content as $key => $heading ): ?>
				<li id="item-<?php echo $key; ?>">
					<span>
						<i class="fas fa-angle-right"></i>
						<img class="style-svg" src="<?php echo esc_url( $heading['heading_icon']['sizes']['thumbnail'] ); ?>" width="20" alt="">
					</span>
					<span><?php echo esc_textarea( $heading['heading'] ); ?></span>
				</li>
			<?php endforeach ?>
		</ul>
	</div>

	<?php foreach ( $advanced_content as $key => $content ): ?>
		<div content-id="item-<?php echo $key; ?>" class="content-item">
			<div class="heading d-flex align-items-center pb-3 pt-3">
				<img class="style-svg mr-4" src="<?php echo esc_url( $heading['heading_icon']['sizes']['thumbnail'] ); ?>" width="20" alt="">
				<h2 class="mb-0"><?php echo esc_textarea( $content['heading'] ); ?></h2>
			</div>
			<div class="content-body">
				<?php echo $content['content']; ?>
			</div>
		</div>
	<?php endforeach ?>


</section>