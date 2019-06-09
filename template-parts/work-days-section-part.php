<?php 
	
	$lender_days_heading = get_field( 'lender_days_heading' );
	$lender_days_work_days = get_field( 'lender_days_work_days' );
	$lender_days_weekends = get_field( 'lender_days_weekends' );

	if ( empty( implode( '', $lender_days_work_days ) ) && empty( implode( '', $lender_days_weekends ) ) ){
		return false;
	}

?>

<section class="work-days content-section white-shadow pl-0 pr-0 mb-0">
	
	<?php if ( ! empty( $lender_days_heading ) ): ?>
		<h2 class="section-title text-center pt-2 pb-4 mb-0 bb">
			<?php echo $lender_days_heading; ?>
		</h2>
	<?php endif ?>

	<div class="days-wrap">
		<div class="row">
			<div class="col-12 col-md-6 work">
				<table>
					<tr>
						<td><?php _e( "Måndag", 'loans' ); ?></td>
						<td><?php echo $lender_days_work_days['lender_date_monday'] ?></td>
					</tr>
					<tr>
						<td><?php _e( "Tisdag", 'loans' ); ?></td>
						<td><?php echo $lender_days_work_days['lender_date_tuesday'] ?></td>
					</tr>
					<tr>
						<td><?php _e( "Onsdag", 'loans' ); ?></td>
						<td><?php echo $lender_days_work_days['lender_date_wednesday'] ?></td>
					</tr>
					<tr>
						<td><?php _e( "Torsdag", 'loans' ); ?></td>
						<td><?php echo $lender_days_work_days['lender_date_thursday'] ?></td>
					</tr>
					<tr>
						<td><?php _e( "Fredag", 'loans' ); ?></td>
						<td><?php echo $lender_days_work_days['lender_date_friday'] ?></td>
					</tr>
				</table>
			</div>
			<div class="col-12 col-md-6 weekend">
				<table>
					<tr>
						<td><?php _e( "Lördag", 'loans' ); ?></td>
						<td><?php echo $lender_days_weekends['lender_date_saturday'] ?></td>
					</tr>
					<tr>
						<td><?php _e( "Söndag", 'loans' ); ?></td>
						<td><?php echo $lender_days_weekends['lender_date_sunday'] ?></td>
					</tr>
				</table>
			</div>
		</div>	
	</div>

</section>