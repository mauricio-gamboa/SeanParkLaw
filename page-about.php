<?php get_header(); ?>

<?php get_template_part('template_parts/content', 'header-about'); ?>

<section id="content" class="bg-lines-2 site-padding white-bg">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">

        <?php while ( have_posts() ) : the_post(); ?>
        <div class="content content-about">
          <?php the_content(); ?>
        </div>
        <?php endwhile; ?>

      </div>
      <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 hide-xs">
        <?php get_sidebar(); ?>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <?php get_template_part('template_parts/content', 'logos'); ?>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template_parts/content', 'reviews'); ?>

<?php get_footer(); ?>