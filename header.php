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
          
          <?php wp_nav_menu(array( 'menu' => 'main-menu', 'container' => false, 'menu_class' => 'list-unstyled main-menu clearfix hide-s hide-xs', 'depth' => 2)); ?>
          <?php wp_nav_menu(array( 'menu' => 'main-menu', 'container' => false, 'menu_id' => 'mobile-menu', 'menu_class' => 'main-menu-mobile list-unstyled collapse', 'depth' => 1)); ?>
          
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