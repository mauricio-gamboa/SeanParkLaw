<?php get_header(); ?>

<?php get_template_part('template_parts/content', 'header-location'); ?>

<section id="content" class="bg-lines-2 site-padding white-bg">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
        
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="content">
          <div class="office-meta-data">
            <div class="location clearfix">
              <div><?php the_post_thumbnail( array(138, 138) ); ?></div>
              <div>            
                <span class="hide-s hide-xs"><a href="#reviews-wrapper" offset="73" du-smooth-scroll class="my-btn btn-1">Contact Us Online</a></span>
                
                <?php the_title('<h4>', '</h4>'); ?>
                
                <?php if(get_field('location_address')): ?>
                <address>
                  <span class="marker-icon"><i class="fa fa-map-marker"></i></span>
                  <p><?php the_field('location_address'); ?></p>
                </address>
                <?php endif; ?>

                <?php if(get_field('location_phone')): ?>
                <p class="phone"><span><i class="fa fa-phone"></i></span> <?php the_field('location_phone'); ?></p>
                <?php endif; ?>
              </div>
            </div>
            <div class="contact-online show-s show-xs">
              <a href="#contact-form" offset="80" du-smooth-scroll class="my-btn btn-1">Contact Us Online</a>
            </div>
          </div>
          <?php the_content(); ?>
        </div>
        <?php endwhile; ?>

      </div>
      <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 hide-xs">
        <?php get_sidebar('location'); ?>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <?php get_template_part('template_parts/content', 'logos'); ?>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template_parts/content', 'reviews'); ?>

<?php get_footer(); ?>