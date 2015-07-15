<?php get_header(); ?>

<?php get_template_part('template_parts/content', 'header-blog'); ?>

<section id="content" class="bg-lines-2 site-padding white-bg">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
        <?php if ( have_posts() ) : ?>
        <div class="content">
          <?php while ( have_posts() ) : the_post(); get_template_part( 'template_parts/content', 'single'); endwhile; ?>
        </div>
        <?php endif; ?>

        <div class="hide-s hide-xs">
          <?php get_template_part('template_parts/content', 'related-posts'); ?>
          <?php if ( comments_open() || get_comments_number() ) { comments_template(); } ?>
        </div>
      </div>
      
      <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 hide-xs">
        <?php get_sidebar('blog'); ?>
      </div>
      
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 show-s show-xs">
        <?php get_template_part('template_parts/content', 'related-posts'); ?>
        <?php if ( comments_open() || get_comments_number() ) { comments_template(); } ?>
      </div>
      
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <?php get_template_part('template_parts/content', 'logos'); ?>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template_parts/content', 'reviews'); ?>

<?php get_footer(); ?>