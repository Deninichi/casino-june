<?php 

	$countries = get_field( 'intro_countries' );

?>

<section class="countries-section content-section pl-0 pr-0 mt-0">

	<?php if ( ! empty( get_field( 'countries_title' ) ) ): ?>
		<h2 class="bg-grey section-title text-center pt-3 pb-3 mb-4 border color-border colored-title"><?php echo get_field( 'countries_title' ); ?></h2>
	<?php endif ?>

	<div class="row">
		
		<?php if ( is_array($countries) ): ?>
			
			<?php foreach ( $countries as $key => $country ): ?>
			
				<div class="col-12 col-md-4 country">
					<div class="country-wrap white-shadow bb-3-green">
						<div class="country-title">
							<div class="flag">
								<img src="<?php echo $country['flag']['url']; ?>" alt="">
							</div>
							<div class="title">
								<?php echo $country['title'] ?>
							</div>
						</div>

						<?php if ( is_array($country['links']) ): ?>
							<ul>
								<?php foreach ( $country['links'] as $key => $link ): ?>
									<li><a href="<?php echo esc_url( $link['url'] ); ?>"><?php echo htmlspecialchars($link['text']); ?><i class="fas fa-link"></i></a></li>
								<?php endforeach ?>
							</ul>
						<?php endif ?>
						
					</div>
				</div>

			<?php endforeach ?>

		<?php endif ?>

	</div>
</section>