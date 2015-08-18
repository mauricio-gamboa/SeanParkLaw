<?php if (has_children() && top_level_id() == get_the_id()): ?>
  <?php $location_id = get_the_id(); ?>
<?php else: ?>
  <?php $location_id = get_my_post_parents(); ?>
<?php endif; ?>

<?php if($location_id): ?>
<div class="office-meta-data">
  <div class="location clearfix">
    <?php if (has_post_thumbnail($location_id)): ?>
    <div><?php echo get_the_post_thumbnail($location_id, array(138, 138)); ?></div>
    <?php endif; ?>
    <div>            
      <span class="hide-s hide-xs">
        <a href="#reviews-wrapper" offset="73" du-smooth-scroll class="my-btn btn-1">Contact Us Online</a>
      </span>
      
      <h4> <?php echo get_the_title($location_id); ?> Office</h4>
      
      <?php if(get_field('location_address', $location_id)): ?>
      <address>
        <span class="marker-icon"><i class="fa fa-map-marker"></i></span>
        <p><?php echo get_field('location_address', $location_id); ?></p>
      </address>
      <?php endif; ?>

      <?php if(get_field('location_phone', $location_id)): ?>
      <p class="phone"><span><i class="fa fa-phone"></i></span> <?php echo get_field('location_phone', $location_id); ?></p>
      <?php endif; ?>
    </div>
  </div>
  <div class="contact-online show-s show-xs">
    <a href="#contact-form" offset="80" du-smooth-scroll class="my-btn btn-1">Contact Us Online</a>
  </div>
</div>
<?php endif; ?>