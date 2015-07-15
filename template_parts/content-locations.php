<?php $locations = get_my_post_type('location', 3); ?>

<?php if($locations): ?>
<section id="locations" class="site-padding bg-gradient-2">
  <h2 class="star-title">Locations</h2>

  <div class="container hide-xs">
    <div class="row">
      <?php foreach ( $locations as $key=>$post ) : setup_postdata( $post ); ?>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div class="location clearfix">
          <div><?php the_post_thumbnail( array(170, 170) ); ?></div>
          <div>
            <?php the_title('<h4>', '</h4>'); ?>

            <?php if(get_field('location_address')): ?>
            <address>
              <span class="marker-icon"><i class="fa fa-map-marker"></i></span>
              <p><?php the_field('location_address'); ?></p>
            </address>
            <?php endif; ?>

            <?php if(get_field('location_phone')): ?>
            <p class="phone"><span><i class="fa fa-phone"></i></span> <?php the_field('location_phone'); ?></p>
            <?php endif; ?>
            
            <a href="<?php the_permalink(); ?>" class="my-link link-1">office details <i class="fa fa-chevron-right"></i></a>
          </div>
        </div>
      </div>
      <?php endforeach; wp_reset_postdata(); ?>
    </div>
  </div>
  
  <div class="container show-xs">
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-12 col-lg-12">
        <div class="locations-slider owl-carousel" owl-single-nav>
          
          <?php foreach ( $locations as $key=>$post ) : setup_postdata( $post ); ?>
          <div class="location clearfix">
            <div><?php the_post_thumbnail( array(138, 138) ); ?></div>
            <div>
              <?php the_title('<h4>', '</h4>'); ?>
              
              <?php if(get_field('location_address')): ?>
              <address>
                <span class="marker-icon"><i class="fa fa-map-marker"></i></span>
                <p><?php the_field('location_address'); ?></p>
              </address>
              <?php endif; ?>

              <?php if(get_field('location_phone')): ?>
              <p class="phone"><span><i class="fa fa-phone"></i></span> <?php the_field('location_phone'); ?></p>
              <?php endif; ?>
              <a href="<?php the_permalink(); ?>" class="my-link link-1">office details <i class="fa fa-chevron-right"></i></a>
            </div>
          </div>
          <?php endforeach; wp_reset_postdata(); ?>

        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>