<?php $services = ot_get_option( 'services_list', array() ); ?>

<?php if ( ! empty( $services ) ): ?>
<section id="we-help" class="bg-lines-2 site-padding white-bg gray-border">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <?php if(ot_get_option('services_title') && ot_get_option('services_subtitle') && ot_get_option('services_text')): ?>
        <h3><?php echo ot_get_option('services_title'); ?></h3>
        <h3 class="stripe"><?php echo ot_get_option('services_subtitle'); ?></h3>
        <p><?php echo ot_get_option('services_text'); ?></p>
        <?php endif; ?>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
        <ul class="list-unstyled clearfix">
          <?php foreach($services as $service): ?>
          <li><i class="fa fa-check"></i> <?php echo $service['title'];?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>