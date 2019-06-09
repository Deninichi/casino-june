<?php 

	$past_winners = get_field( 'past_winners_section' );
	$past_winners = $past_winners['global_past_winners'];


?>

<section class="content-section past-winners-section full-width">
	
	<?php if ( ! empty( $past_winners['heading'] ) ): ?>
		<h2 class="section-title text-center pt-3 pb-3 mb-4 border color-border"><?php echo esc_textarea( $past_winners['heading'] ); ?></h2>
	<?php endif ?>

	<div class="row">
		
		<?php if ( $past_winners['winners'] ): ?>
			
			<?php foreach ( $past_winners['winners'] as $key => $winner ): ?>

				<?php if ( $key + 1 == 0 || ($key + 1)%3 == 1 ): ?>
					<div class="col-12 col-md-3">
				<?php endif ?>

					<a href="<?php echo $winner['winner_url']; ?>">
						<span class="icon-wrapper"><i class="fas fa-angle-right"></i></span>
						<?php echo $winner['winner_text']; ?>
					</a>

				<?php if ( ( $key + 1 ) % 3 == 0 ) : ?>
					</div>
				<?php endif ?>
				
			<?php endforeach ?>

			<?php if ( ( $key + 1 ) % 3 != 0 ) : ?>
				</div>
			<?php endif ?>

		<?php endif ?>

	</div>

</section>