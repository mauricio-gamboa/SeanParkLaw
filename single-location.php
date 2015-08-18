<?php get_header(); ?>

<?php get_template_part('template_parts/content', 'header-location'); ?>

<section id="content" class="bg-lines-2 site-padding white-bg">
  <div class="container">
    <div class="row">
      
      <?php while ( have_posts() ) : the_post(); ?>
      <div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
        <div class="content">
          <?php get_template_part('template_parts/content', 'meta-office'); ?>
          <?php the_content(); ?>
        </div>
      </div>
      <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 hide-xs">
        <?php get_sidebar('location'); ?>
      </div>
      <?php endwhile; ?>
      
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <?php get_template_part('template_parts/content', 'logos'); ?>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template_parts/content', 'reviews'); ?>

<?php get_footer(); ?>