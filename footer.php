<footer id="footer" class="bg-lines-3">
  <div id="top">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h1 class="logo color"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

          <div class="footer-menus clearfix">
            <?php wp_nav_menu(array( 'menu' => 'footer-menu', 'container' => false, 'menu_class' => 'list-unstyled', 'depth' => 2)); ?>
          </div>
          
          <div class="footer-info hide-s hide-xs">
            <?php if(ot_get_option('phone_number')): ?>
            <div class="call clearfix">
              <span class="phone-icon"><i class="fa fa-phone"></i></span><span><span>call free toll</span><br/><span
              class="phone"><?php echo ot_get_option('phone_number'); ?></span></span>
            </div>
            <?php endif; ?>
            <img src="<?php bloginfo('template_directory'); ?>/public/images/cards.png" alt=""/>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="middle show-s">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="footer-info">
            <?php if(ot_get_option('phone_number')): ?>
            <div class="call clearfix">
              <span class="phone-icon"><i class="fa fa-phone"></i></span><span><span>call free toll</span><br/><span
              class="phone"><?php echo ot_get_option('phone_number'); ?></span></span>
            </div>
            <?php endif; ?>
            <img src="<?php bloginfo('template_directory'); ?>/public/images/cards.png" alt=""/>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php if(ot_get_option('phone_number')): ?>
  <div class="middle show-xs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="footer-info">
            <div class="call clearfix">
              <span class="phone-icon"><i class="fa fa-phone"></i></span><span><span>call free toll</span><br/><span
              class="phone"><?php echo ot_get_option('phone_number'); ?></span></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <div class="middle show-xs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="footer-info">
            <img src="<?php bloginfo('template_directory'); ?>/public/images/cards.png" alt=""/>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bottom hide-xs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="footer-bottom clearfix">
            <a href="http://goamv.com" target="_blank" class="powered hide-xs"><img src="<?php bloginfo('template_directory'); ?>/public/images/zealous.png" alt=""/></a>
            <p>Copyright &copy; <?php echo date('Y'); ?>. All rights reserved. </p>
            <?php wp_nav_menu(array( 'menu' => 'bottom-menu', 'container' => false, 'menu_class' => 'list-unstyled', 'depth' => 1, 'before' => '<span>&bull;</span>&nbsp;')); ?>
            <a href="http://goamv.com" target="_blank" class="powered show-xs"><img src="<?php bloginfo('template_directory'); ?>/public/images/zealous.png" alt=""/></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="bottom show-xs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="footer-bottom clearfix">
            <p>Copyright &copy; <?php echo date('Y'); ?>. All rights reserved. </p>
            <?php wp_nav_menu(array( 'menu' => 'bottom-menu', 'container' => false, 'menu_class' => 'list-unstyled', 'depth' => 1, 'before' => '<span>&bull;</span>&nbsp;')); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="bottom show-xs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="footer-bottom clearfix">
            <a href="http://goamv.com" target="_blank" class="powered"><img src="<?php bloginfo('template_directory'); ?>/public/images/zealous.png" alt=""/></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>