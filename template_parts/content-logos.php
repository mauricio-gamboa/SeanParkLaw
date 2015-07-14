<?php $images = explode( ',', ot_get_option( 'logos', '' ) ); ?>

<?php if ( ! empty( $images ) ): ?>
<section id="as-seen-on" class="site-padding">
  <div class="container">
    <h2 class="star-title">As seen on</h2>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="aso-wrapper clearfix">
          <?php foreach( $images as $id ): if ( ! empty( $id ) ): ?>
          <?php $full_img_src = wp_get_attachment_image_src( $id, '' ); ?>
          <div class="aso"><img src="<?php echo $full_img_src[0];?>" alt=""/></div>
          <?php endif; endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>