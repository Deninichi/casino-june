<article <?php post_class( 'post single'); ?>>

  <?php get_template_part( 'template-parts/posts/post-general-info' ); ?>

  <section class="properties white-shadow">
    <div class="wrap">
      <div class="row">
        <div class="col-12 col-md-6 mb-3 mb-md-0">
          <table>
            <tr>
              <td><i class="fas fa-business-time"></i></td>
              <td>Payment time:</td>
              <td><span><?php the_field( 'post_payment_time' ); ?></span></td>
            </tr>
            <tr>
              <td><i class="fas fa-coins"></i></td>
              <td>Limit:</td>
              <td><span><?php the_field( 'post_withdrawal_limit' ); ?></span></td>
            </tr>
            <tr>
              <td><i class="fas fa-money-bill-wave"></td>
              <td>Min deposit:</td>
              <td><span><?php the_field( 'post_minimum_deposit' ); ?></span></td>
            </tr>
            <tr>
              <td><i class="fas fa-rocket"></i></td>
              <td>Launched:</td>
              <td><span><?php the_field( 'post_launched' ); ?></span></td>
            </tr>
          </table>
        </div>
        <div class="col-12 col-md-6">
          <table>
            <tr>
              <td><i class="fas fa-award"></i></td>
              <td>License</td>
              <td><span><?php the_field( 'post_license' ); ?></span></td>
            </tr>
            <tr>
              <td><i class="fas fa-user-check"></i></td>
              <td>Live dealer:</td>
              <td><span><?php the_field( 'post_live_dealer' ); ?></span></td>
            </tr>
            <tr>
              <td><i class="fas fa-mobile-alt"></i></td>
              <td>Mobile casino:</td>
              <td><span><?php the_field( 'post_mobile_casino' ); ?></span></td>
            </tr>
            <tr>
              <td><img src="<?php echo get_template_directory_uri(); ?>/assets/images/slots.png" alt=""></td>
              <td>Slots:</td>
              <td><span><?php the_field( 'post_slots' ); ?></span></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </section>

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