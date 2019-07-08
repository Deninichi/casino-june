<?php 
  $companies = get_field( 'post_companies' );
  if( $companies && is_array($companies) ){
    $companies_number = count( $companies );
  } else {
    $companies_number = 0;
  }
  $companies_per_table = (int)ceil($companies_number / 2);
?>

<article <?php post_class( 'post single'); ?>>

  <?php get_template_part( 'template-parts/posts/post-general-info' ); ?>

  <section class="properties white-shadow">
    <div class="wrap">
      <div class="row">
        <div class="col-12 col-md-6 mb-3 mb-md-0">
          <table>
            <?php if( $companies_number && $companies_number !== 0 ): ?>
              <?php foreach( $companies as $key => $company ) : ?>
                
                <?php if( $key === $companies_per_table ): ?>
                  </table>
                  </div>
                  <div class="col-12 col-md-6 mb-3 mb-md-0">
                  <table>
                <?php endif; ?>

                <tr>
                  <td><img src="<?php echo $company['company_logo']; ?>" alt=""></td>
                  <td><?php echo $company['company_name']; ?></td>
                  <td><span><?php echo $company['text']; ?></span></td>
                </tr>
              <?php endforeach; ?>
            <?php endif; ?>
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