<?php $values = get_field('location_map'); ?>
<?php $lat = $values['lat']; ?>
<?php $lng = $values['lng']; ?>

<aside class="sidebar">
  <div class="widget testimonials">
    <h4><span><i class="fa fa-quote-left"></i></span> testimonials</h4>
    <?php get_template_part('template_parts/content', 'testimonial-slider'); ?>
  </div>
  
  <div class="widget map">
    <h4><span><i class="fa fa-map-marker"></i></span> <?php the_title(); ?> Office Location</h4>
    
    <address>
      <?php if(get_field('location_address')): ?>
      <p><?php the_field('location_address'); ?></p>
      <?php endif; ?>

      <?php if(get_field('location_phone')): ?>
      <p>Phone: <?php the_field('location_phone'); ?></p>
      <?php endif; ?>

      <?php if(get_field('location_fax')): ?>
      <p>Fax: <?php the_field('location_fax'); ?></p>
      <?php endif; ?>

      <?php if(get_field('location_email')): ?>
      <p>Email: <a href="mailto: <?php the_field('location_email'); ?>"><?php the_field('location_email'); ?></a></p>
      <?php endif; ?>
    </address>
    
    <?php if($lat && $lng): ?>
    <div class="map-wrapper">
       <map center="[<?php echo $lat;?>,<?php echo $lng;?>]" center="[<?php echo $lat;?>,<?php echo $lng;?>]">
        <marker position="[<?php echo $lat;?>,<?php echo $lng;?>]" />
       </map>
    </div>
    <?php endif; ?>
  </div>
  
  <?php if(get_field('location_hours')): ?>
  <div class="widget list">
    <h4><span><i class="fa fa-clock-o"></i></span> <?php the_title(); ?> Office Hours</h4>
    <?php the_field('location_hours'); ?>
  </div>
  <?php endif; ?>
  
  <?php if(get_field('location_resources')): ?>
  <div class="widget list">
    <h4><span><i class="fa fa-file-text"></i></span> <?php the_title(); ?> Law Firm Resources</h4>
    <?php the_field('location_resources'); ?>
  </div>
  <?php endif; ?>
</aside>