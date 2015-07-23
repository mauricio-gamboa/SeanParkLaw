<!DOCTYPE html>
<html <?php language_attributes(); ?> ng-app="sean_park_law">
<head>
  <title><?php wp_title('|','true','right'); ?><?php bloginfo('name'); ?></title>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=1470477823219714";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<nav id="main-menu" change-menu>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="menu-wrapper clearfix">
          <div class="toggler show-s show-xs collapsed" data-toggle="collapse" data-target="#mobile-menu">
            <i class="fa fa-bars"></i>
          </div>
          <h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          
          <ul class="list-unstyled main-menu clearfix hide-s hide-xs">
            <?php wp_nav_menu(array( 'menu' => 'main-menu', 'container' => false, 'items_wrap' => '%3$s', 'depth' => 2)); ?>
            <li><a href="#reviews-wrapper" offset="73" du-smooth-scroll>Contact Us</a></li>
          </ul>

          <ul id="mobile-menu" class="main-menu-mobile list-unstyled collapse">
            <?php wp_nav_menu(array( 'menu' => 'main-menu', 'container' => false, 'items_wrap' => '%3$s', 'depth' => 1)); ?>
            <li><a href="#contact-form" offset="90" du-smooth-scroll>Contact Us</a></li>
          </ul>
          
          <?php if(ot_get_option('phone_number')): ?>
          <div class="call clearfix hide-xs">
            <span class="phone-icon"><i class="fa fa-phone"></i></span>
            <span>
              <span>call free toll</span>
              <br/>
              <span class="phone"><?php echo ot_get_option('phone_number') ?></span>
            </span>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</nav>