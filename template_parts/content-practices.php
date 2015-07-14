<?php $practice_areas = get_my_post_type('practice_area', 3); ?>

<?php if($practice_areas): ?>
<section id="practice-areas" class="site-padding gray-border">
  <div class="container hide-xs">
    <h2 class="star-title">Practice Areas</h2>

    <div class="row">
      <?php foreach ( $practice_areas as $key=>$post ) : setup_postdata( $post ); ?>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div class="practice">
          <?php the_post_thumbnail( array(168, 168) ); ?>
          <?php the_title('<h4>', '</h4>'); ?>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>" class="my-btn btn-1">learn more</a>
        </div>
      </div>
      <?php endforeach; wp_reset_postdata(); ?>
    </div>
  </div>
  
  <div class="container show-xs">
    <h2 class="star-title">Practice Areas</h2>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="practice-slider owl-carousel" owl-single-nav>
          <?php foreach ( $practice_areas as $key=>$post ) : setup_postdata( $post ); ?>
          <div class="practice">
            <?php the_post_thumbnail( array(168, 168) ); ?>
            <?php the_title('<h4>', '</h4>'); ?>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="my-btn btn-1">learn more</a>
          </div>
          <?php endforeach; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>