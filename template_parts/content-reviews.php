<?php $client_reviews = get_my_post_type('client_reviews', -1); ?>

<section id="reviews-wrapper" class="bg-gradient-1">
  <div class="site-padding bg-lines-3">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          
          <?php if($client_reviews): ?>
          <div id="client-reviews" class="gray-border-1">
            <h2 class="star-title">Client reviews</h2>

            <div class="reviews-slider owl-carousel" owl-single-nav>
              
              <?php foreach ( $client_reviews as $key=>$post ) : setup_postdata( $post ); ?>
              <div class="review-slide">
                <h4><i class="fa fa-quote-left"></i> <?php the_title(); ?></h4>

                <p><?php echo get_the_content(); ?> <i class="fa fa-quote-right"></i></p>

                <?php if(get_field('client_name') && get_field('client_company')): ?>
                <p><strong><?php the_field('client_name'); ?></strong> from <strong><?php the_field('client_company'); ?></strong></p>
                <?php endif; ?>

                <p><img src="<?php bloginfo('template_directory'); ?>/public/images/rating.png" alt=""/></p>

                <p><?php the_post_thumbnail(); ?></p>
              </div>
              <?php endforeach; wp_reset_postdata(); ?>

            </div>
          </div>
          <?php endif; ?>
          
          <?php get_template_part('template_parts/content', 'badges'); ?>
          
          <?php get_template_part('template_parts/content', 'facebook'); ?>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <?php get_template_part('template_parts/content', 'form'); ?>
        </div>
      </div>
    </div>
  </div>
</section>