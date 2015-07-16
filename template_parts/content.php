<article class="article clearfix">
  <?php if ( has_post_thumbnail() ): ?>
  <?php the_post_thumbnail( array(168, 168) ); ?>
  <?php else: ?>
  <img src="<?php bloginfo('template_directory'); ?>/public/images/featured-img.png" alt=""/>
  <?php endif; ?>

  <div>
    <?php the_title('<h3>', '</h3>'); ?>

    <?php the_excerpt(); ?>

    <div class="clearfix hide-xs">
      <a href="<?php the_permalink(); ?>" class="my-link link-1">read full story <i class="fa fa-chevron-right"></i></a>
      <a href="<?php comments_link(); ?>" class="comments"><i class="fa fa-comments"></i> <?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?></a>
    </div>

    <div class="clearfix show-xs">
      <a href="<?php the_permalink(); ?>" class="my-link link-1">read full story <i class="fa fa-chevron-right"></i></a>
      <a href="<?php the_permalink(); ?>" class="comments"><i class="fa fa-comments"></i> <?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?></a>
    </div>
  </div>
</article>