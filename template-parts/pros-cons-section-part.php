<?php 

	$lender_pros_and_cons = get_field( 'lender_pros_and_cons' );
	$lender_pros_and_cons = $lender_pros_and_cons['global_pros_and_cons'];


	if ( ! isset( $lender_pros_and_cons['pros_and_cons_items'][0]['pro'] ) ) {
		return false;
	}

?>

<section class="pros-cons content-section pl-0 pr-0">

	<?php if ( ! empty( $lender_pros_and_cons['heading'] ) ): ?>
		<h2 class="bg-grey section-title text-center pt-3 pb-3 mb-4 border color-border"><?php echo esc_textarea( $lender_pros_and_cons['heading'] ); ?></h2>
	<?php endif ?>

	<div class="row">
		
		<div class="col-12 col-md-6">
			<div class="pro-wrap items">
				<ul>
					<?php foreach ( $lender_pros_and_cons['pros_and_cons_items'] as $item ): ?>
						<?php if ( '' !== $item['pro'] ): ?>
							<li><i class="fas fa-check"></i><?php echo $item['pro'] ?></li>
						<?php endif ?>
					<?php endforeach ?>
				</ul>
			</div>
		</div>
		<div class="col-12 col-md-6">
			<div class="con-wrap items">
				<ul>
					<?php foreach ( $lender_pros_and_cons['pros_and_cons_items'] as $item ): ?>
						<?php if ( '' !== $item['con'] ): ?>
							<li><i class="fas fa-times"></i><?php echo $item['con'] ?></li>
						<?php endif ?>
					<?php endforeach ?>
				</ul>
			</div>
		</div>

	</div>
</section>