<?php $badges = explode( ',', ot_get_option( 'bages', '' ) ); ?>

<?php if ( ! empty( $badges ) ): ?>
<div class="badges clearfix">
  <?php foreach( $badges as $id ): if ( ! empty( $id ) ): ?>
  <?php $full_img_src = wp_get_attachment_image_src( $id, '' ); ?>
  <div class="my-badge"><img src="<?php echo $full_img_src[0];?>" alt=""/></div>
  <?php endif; endforeach; ?>
</div>
<?php endif; ?>