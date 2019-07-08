<?php

  $checkboxes   = get_field( 'post_checkboxes' );

  $rating = 0;
  if( is_numeric(get_field( 'post_rating' ) ) ) {
    $rating = 100 / 5 * get_field( 'post_rating' );
  }

  $cta_nofollow = get_field( 'bear_cta_button_nofollow' );
  $tc_nofollow = get_field( 'post_tc_applies_nofollow' );
?>

<section id="post-<?php the_ID(); ?>-info" class="general-info mb-4 white-shadow">
  <style>
    #post-<?php the_ID(); ?>-info .actions .stars::before {
      width: <?php echo $rating; ?>%;
    }
  </style>

  <div class="row align-items-stretch pt-md-2 pt-lg-0">
    <div class="logo-wrap col-12 col-md-4 col-lg-2 d-flex align-items-center justify-content-center">
      <?php if ( has_post_thumbnail() ): ?>
        <div class="logo">
          <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a>
        </div>
      <?php endif ?>
    </div>

     <!-- Free Spins -->
    <div class="free-spins col-6 col-md-4 col-lg-2 align-items-center justify-content-center d-flex flex-column">
      <p><?php the_field( 'post_free_spins' ); ?></p>
      <span>Free Spins</span>
    </div>

    <!-- Bonus -->
    <div class="bonus col-6 col-md-4 col-lg-2 align-items-center justify-content-center d-flex flex-column">
      <p><?php echo number_format( (float)get_field( 'post_bonus' ), 0, '.', ' ' ); ?> kr</p>
      <span>Bonus</span>
    </div>

    <!-- Checkboxes -->
    <div class="checkboxes col-12 col-lg-3 p-lg-0 align-items-center d-flex">

      <?php if ( $checkboxes ): ?>
        <ul class="ul-block align-items-center justify-content-between">
          <?php foreach ( $checkboxes as $checkbox ): ?>
            <li>
              <?php echo ( is_array( $checkbox['bear_cta_button_nofollow'] ) && $checkbox['bear_cta_button_nofollow'][0] == 1 ) ? '<i class="far fa-check-circle"></i>' : '<i class="far fa-times-circle"></i>'; ?>
              <?php echo $checkbox['text']; ?></li>
          <?php endforeach ?>
        </ul>
      <?php endif ?>

    </div>

    <!-- Button -->
    <div class="actions col-12 col-lg-3 align-items-center d-flex flex-wrap justify-content-between">
      <a class="btn-link text-center mb-2"
        href="<?php the_field( 'bear_cta_button_url' ) ?>" <?php echo ( is_array( $nofollow_btn ) && '1' === $nofollow_btn[0] ) ? 'rel="nofollow"': ''; ?>>
        <?php echo ( ! empty ( get_field( 'bear_cta_button_text' )  ) ) ? the_field( 'bear_cta_button_text' ) : 'Läs mer'; ?>
      </a>

      <!-- TC aplies -->
      <a href="<?php the_field( 'post_tc_applies_url' ); ?>" class="siimple-link" <?php echo ( is_array( $tc_nofollow ) && '1' === $nofollow_btn[0] ) ? 'rel="nofollow"': ''; ?>><?php the_field( 'post_tc_applies_text' ); ?></a>

      <!-- Rating -->
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>

    </div>

  </div>
</section>