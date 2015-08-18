<?php if (has_children() && top_level_id() == get_the_id()): ?>
  <?php $location_id = get_the_id(); ?>
<?php else: ?>
  <?php $location_id = get_my_post_parents(); ?>
<?php endif; ?>

<?php $values = get_field('location_map', $location_id); ?>

<?php $lat = $values['lat']; ?>

<?php $lng = $values['lng']; ?>

<aside class="sidebar">
  
  <div class="widget testimonials">
    <h4><span><i class="fa fa-quote-left"></i></span> testimonials</h4>
    <?php get_template_part('template_parts/content', 'testimonial-slider'); ?>
  </div>
  
  <div class="widget map">
    <h4><span><i class="fa fa-map-marker"></i></span> <?php echo get_the_title($location_id); ?> Office Location</h4>
    
    <address>
      <?php if(get_field('location_address', $location_id)): ?>
      <p><?php echo get_field('location_address', $location_id); ?></p>
      <?php endif; ?>

      <?php if(get_field('location_phone', $location_id)): ?>
      <p>Phone: <?php echo get_field('location_phone', $location_id); ?></p>
      <?php endif; ?>

      <?php if(get_field('location_fax', $location_id)): ?>
      <p>Fax: <?php echo get_field('location_fax', $location_id); ?></p>
      <?php endif; ?>

      <?php if(get_field('location_email', $location_id)): ?>
      <p>Email: <a href="mailto: <?php echo get_field('location_email', $location_id); ?>"><?php echo get_field('location_email', $location_id); ?></a></p>
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
  
  <?php if(get_field('location_hours', $location_id)): ?>
  <div class="widget list">
    <h4><span><i class="fa fa-clock-o"></i></span> <?php echo get_the_title($location_id); ?> Office Hours</h4>
    <?php echo get_field('location_hours', $location_id); ?>
  </div>
  <?php endif; ?>
  
  <?php if(get_field('location_resources', $location_id)): ?>
  <div class="widget list">
    <h4><span><i class="fa fa-file-text"></i></span> <?php echo get_the_title($location_id); ?> Law Firm Resources</h4>
    <?php echo get_field('location_resources', $location_id); ?>
  </div>
  <?php endif; ?>
</aside>