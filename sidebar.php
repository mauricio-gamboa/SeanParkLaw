<?php $locations = get_my_post_type('location', 3); ?>

<?php if($locations): ?>
<aside class="sidebar">
  <?php foreach ( $locations as $key=>$post ) : setup_postdata( $post ); ?>
  <div class="widget location">
    <div class="clearfix">
      <?php the_post_thumbnail( array(59, 59) ); ?>
      <?php the_title('<h4>', '</h4>'); ?>
    </div>
    <div>
      
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
</aside>
<?php endif; ?>

<div class="testimonials">
  <h4><span><i class="fa fa-quote-left"></i></span> testimonials</h4>
  <?php get_template_part('template_parts/content', 'testimonial-slider'); ?>
</div>