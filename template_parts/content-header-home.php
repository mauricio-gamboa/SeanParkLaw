<header id="header-home" class="header">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="header-home">
          
          <?php if(ot_get_option('home_page_subtitle')): ?>
          <h2 class="stripe"><?php echo ot_get_option('home_page_subtitle'); ?></h2>
          <?php endif; ?>

          <?php if(ot_get_option('home_page_title')): ?>
          <h1><?php echo ot_get_option('home_page_title'); ?></h1>
          <?php endif; ?>
          <a href="" class="my-btn btn-3">get help now <span><i class="fa fa-chevron-right"></i></span></a>
          
          <?php if(ot_get_option('sean_s_image')): ?>
          <img class="lawyer-img" src="<?php echo ot_get_option('sean_s_image'); ?>" alt=""/>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  
  <?php if(ot_get_option('home_page_quote') && ot_get_option('home_page_cite')): ?>
  <div class="home-quote">
    <img src="<?php bloginfo('template_directory'); ?>/public/images/arrow-1.png" alt="" class="arrow"/>

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <blockquote>
            <p><?php echo ot_get_option('home_page_quote'); ?>”</p>
          </blockquote>
          <div class="cite">
            <p><?php echo ot_get_option('home_page_cite'); ?></p>
          </div>
          <div class="divider"></div>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
</header>