<?php get_header(); ?>

<?php get_template_part('template_parts/content', 'header-blog'); ?>

<section id="content" class="bg-lines-2 site-padding white-bg">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
        <div class="content">
          <?php if ( have_posts() ) : ?>
          <div class="articles">
            <?php while ( have_posts() ) : the_post(); get_template_part( 'template_parts/content', get_post_format() ); endwhile; ?>
          </div>
          <div class="my-pagination"><?php the_posts_pagination( array(
          'prev_text' => '<i class="fa fa-caret-left"></i>',
          'next_text' => '<i class="fa fa-caret-right"></i>') ); ?></div>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 hide-xs">
        <?php get_sidebar('blog'); ?>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <?php get_template_part('template_parts/content', 'logos'); ?>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template_parts/content', 'reviews'); ?>

<?php get_footer(); ?>