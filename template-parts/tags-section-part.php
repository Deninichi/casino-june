<?php 


	$tags = get_the_tags();

	if ( ! $tags ) {
		return false;
	}

?>

<section class="tags-section white-shadow">
	<div class="row">
		<div class="author-wrap col-12 col-md-3">
			<p><span>Writer:</span> <?php echo get_the_author_meta( 'display_name' ); ?></p>
			<p><span>Rating:</span> <?php the_field( 'post_rating' ); ?></p>
		</div>

		<div class="tags-wrap col-12 col-md-9">
			<p><span><?php _e( 'Tags: ', 'loans' ); ?></span></p>
			<?php foreach ( $tags as $key => $tag ): ?>
				<a href="<?php echo get_tag_link($tag->term_id); ?>"><span>#</span><?php echo $tag->name; ?></a>
			<?php endforeach ?>
		</div>
	</div>
	

</section>