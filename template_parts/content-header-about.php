<header id="header-about" class="header">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="header-about clearfix">
          <?php if(ot_get_option('sean_s_about_image')): ?>
          <img class="lawyer-img" src="<?php echo ot_get_option('sean_s_about_image'); ?>" alt=""/>
          <?php endif; ?>

          <img class="sep-star hide-xs" src="<?php bloginfo('template_directory'); ?>/public/images/bg-quote.png" alt=""/>

          <?php if(ot_get_option('about_title') && ot_get_option('sean_s_quote') && ot_get_option('sean_s_cite')): ?>
          <div class="about-meta-data">
            <h1><?php echo ot_get_option('about_title'); ?></h1>
            <blockquote>
              <p><?php echo ot_get_option('sean_s_quote'); ?>”</p>
            </blockquote>
            <div class="cite">
              <p><?php echo ot_get_option('sean_s_cite'); ?></p>
            </div>
          </div>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
</header>