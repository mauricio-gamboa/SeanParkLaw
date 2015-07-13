<?php $services = ot_get_option( 'services', array() ); ?>

<?php if ( ! empty( $services ) ): ?>
<section id="we-help" class="bg-lines-2 site-padding white-bg gray-border">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <h3>No matter your situation,</h3>
        <h3 class="stripe">we can help</h3>
        <p></p>
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