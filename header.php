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
<body <?php body_class(); ?> scroll-top>
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
            <li class="hide-m"><a href="">Home</a></li>
            <li class="active"><a href="">About</a></li>
            <li class="sub-menu">
              <a href="">Locations</a>
              <ul class="list-unstyled">
                <li><a href="">Nashville</a></li>
                <li><a href="">Franklin</a></li>
                <li><a href="">Atlanta</a></li>
              </ul>
            </li>
            <li><a href="">We Specialize In</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">Contact Us</a></li>
          </ul>
          <ul id="mobile-menu" class="main-menu-mobile list-unstyled collapse">
            <li><a href="">Home</a></li>
            <li class="active"><a href="">About</a></li>
            <li><a href="">Locations</a></li>
            <li><a href="">We Specialize In</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">Contact Us</a></li>
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