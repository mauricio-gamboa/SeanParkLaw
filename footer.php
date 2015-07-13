<footer id="footer" class="bg-lines-3">
  <div id="top">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h1 class="logo color"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

          <div class="footer-menus clearfix">
            <div class="footer-menu hide-xs">
              <h5>Home</h5>
            </div>
            <div class="footer-menu">
              <h5>practice areas</h5>
              <ul class="list-unstyled">
                <li><a href="">DUI</a></li>
                <li><a href="">Criminal Defense</a></li>
                <li><a href="">personal injury</a></li>
              </ul>
            </div>
            <div class="footer-menu">
              <h5>Locations</h5>
              <ul class="list-unstyled">
                <li><a href="">Nashville</a></li>
                <li><a href="">Franklin</a></li>
                <li><a href="">Atlanta</a></li>
              </ul>
            </div>
            <div class="footer-menu">
              <h5>Blog</h5>
            </div>
            <div class="footer-menu">
              <h5>Contact</h5>
            </div>
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

            <p>Copyright &copy; <?php echo date('Y'); ?>. All rights reserved. <span>&bull;</span> <a href="">Terms of Use</a>
              <span>&bull;</span> <a href="">Privacy Policy</a></p>
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

            <p><a href="">Terms of Use</a> <span>&bull;</span> <a href="">Privacy Policy</a></p>
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