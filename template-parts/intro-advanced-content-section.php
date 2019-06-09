<?php 

	$advanced_content_top = get_field( 'intro_advanced_content_top' );
	$advanced_content_main = get_field( 'intro_advanced_content_main' );

?>

<section class="intro-advanced-content content-section bg-grey">
	
	<?php if ( $advanced_content_top ): ?>
		
		<div class="row top-content">
			<div class="col-12 col-md-9">
				
				<?php if ( '' !== $advanced_content_top['heading'] ): ?>
					<h2 class="section-title text-left pt-3">		
						<?php echo $advanced_content_top['heading']; ?>
					</h2>
				<?php endif ?>

				<?php if ( '' !== $advanced_content_top['subheading'] ): ?>
					<h3 class="section-title text-left pt-3 mb-4">		
						<?php echo $advanced_content_top['subheading']; ?>
					</h3>
				<?php endif ?>

				<?php if ( '' !== $advanced_content_top['content'] ): ?>
					<div class="body-text">		
						<?php echo $advanced_content_top['content']; ?>
					</div>
				<?php endif ?>

			</div>
			<div class="col-12 col-md-3 d-flex flex-column justify-content-center">
				
				<?php if ( $advanced_content_top['boxes'] && count($advanced_content_top['boxes']) > 0 ): ?>
					
					<?php foreach ( $advanced_content_top['boxes'] as $key => $box ): ?>
						<div class="box">
							<div class="icon-wrap">
								<?php echo $box['icon']; ?>
							</div>
							<div class="link-wrap">
								<a href="<?php echo $box['url']; ?>"><?php echo $box['text']; ?></a>
							</div>
						</div>
					<?php endforeach ?>

				<?php endif ?>

			</div>
		</div>

	<?php endif ?>

	
	<?php if ( $advanced_content_main ): ?>
		
		<div class="row main-content mt-5">

			<?php if ( '' !== $advanced_content_main['heading'] ): ?>
				<h2 class="section-title text-center pt-3 pb-3 mb-0 bb white-shadow">		
					<?php echo $advanced_content_main['heading']; ?>
				</h2>
			<?php endif ?>

			<div class="main-content-wrap">
				<div class="white-shadow">

					<div class="row">
						<div class="col-12 col-md-6">
							<?php if ( '' !== $advanced_content_main['left_column'] ): ?>
								<?php echo $advanced_content_main['left_column']; ?>
							<?php endif ?>
						</div>
						<div class="col-12 col-md-6">
							<?php if ( '' !== $advanced_content_main['right_column'] ): ?>
								<?php echo $advanced_content_main['right_column']; ?>
							<?php endif ?>
						</div>
					</div>
					
					<div class="intro-advanced-main-content">
						<?php if ( '' !== $advanced_content_main['main_content'] ): ?>
							<?php echo $advanced_content_main['main_content']; ?>
						<?php endif ?>
					</div>
				</div>
			</div>
		</div>

	<?php endif ?>


</section>