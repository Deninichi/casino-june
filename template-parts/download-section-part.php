<?php  
	
	$download_section = get_field( 'download_section' );
	$download_section = $download_section['download_section'];

?>

<section class="content-section download-section">
	
	<?php if ( ! empty( $download_section['heading'] ) ): ?>
		<h2 class="section-title text-center pt-3 pb-3 mb-4 border color-border"><?php echo esc_textarea( $download_section['heading'] ); ?></h2>
	<?php endif ?>
	
	<div class="row">
		
		<div class="col-12 col-md-6 col-lg-3 text-center mb-3 mb-md-0">
			<div class="box-wrap border color-border bb-3-green">
				<div class="lender-number">
					<span>1</span>
				</div>
				<h3><?php echo $download_section['box_1']['heading']; ?></h3>
				<p><?php echo $download_section['box_1']['content']; ?></p>
			</div>
		</div>
		<div class="col-12 col-md-6 col-lg-3 text-center mb-3 mb-md-0">
			<div class="box-wrap border color-border bb-3-green">
				<div class="lender-number">
					<span>2</span>
				</div>
				<h3><?php echo $download_section['box_2']['heading']; ?></h3>
				<p><?php echo $download_section['box_2']['content']; ?></p>
			</div>
		</div>
		<div class="col-12 col-lg-6">
			<div class="box-wrap border color-border">
				<p><?php echo $download_section['box_3']['content']; ?></p>
			</div>
		</div>

		<div class="col-12 mt-4 download-block">
			<div class="bg-green row-wrapper">
				<div class="col-12 col-md-9"><?php echo $download_section['download_area']['content'] ?></div>
				<div class="col-12 col-md-3 actions">
					<a href="<?php echo $download_section['download_area']['button_url'] ?>" class="btn btn-white">
						<?php echo $download_section['download_area']['button_icon'] ?>
						<?php echo $download_section['download_area']['button_text'] ?>
						
					</a>
				</div>
			</div>
		</div>

	</div>
</section>