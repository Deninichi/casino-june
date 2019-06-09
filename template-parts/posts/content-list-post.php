<?php

  $checkboxes   = get_field( 'post_checkboxes' );
  $rating = 100 / 5 * get_field( 'post_rating' );

  $cta_nofollow = get_field( 'bear_cta_button_nofollow' );
  $tc_nofollow = get_field( 'post_tc_applies_nofollow' );
?>  

<article <?php post_class( 'post list'); ?>>
  
  <?php

    global $wp_query;
    $tmp_query = $wp_query;

    $post_ids = get_field( 'post_list_posts' );

    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $posts_args = array(
      'post_type'    => 'post',
      'post__in'    => $post_ids,
      'posts_per_page' => -1,
      'paged'          => $paged
    );
    $wp_query = new WP_Query( $posts_args );

    // Posts Loop
    if ( have_posts() ) :

      /* Start the Main Loop */
      while ( have_posts() ) : the_post();

        /*
         * Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part( 'template-parts/posts/post-general-info', get_post_type() );

      endwhile;

      // Load More button
      if ( $wp_query->post_count > 6 ) : ?>
        <div class="btn-wrapper text-center">
          <a class="btn-lg border-radius-small load-more" href="#"><span class="icon-wrapper icon-left"><i class="fas fa-sync"></i></span></a>
        </div>
      <?php endif;

      wp_reset_query();

      $wp_query = $tmp_query;

    endif;
  ?>

  <section class="advanced-content mt-5">
    <?php the_field( 'advanced_content' ); ?>
  </section>

  <?php get_template_part( 'template-parts/tags-section-part' ); ?>

  <?php

    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
      comments_template();
    endif;

  ?>

</article>