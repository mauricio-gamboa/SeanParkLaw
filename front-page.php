<?php get_header(); ?>
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

<?php get_template_part('template_parts/content', 'services'); ?>

<section id="practice-areas" class="site-padding gray-border">
  <div class="container hide-xs">
    <h2 class="star-title">Practice Areas</h2>

    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div class="practice">
          <img src="<?php bloginfo('template_directory'); ?>/public/images/practice-1.png" alt=""/>
          <h4>DUI</h4>

          <p>Sean Park Law specializes in DUI cases of all kinds. Whether you or a loved one has been charged with a
            DUI,
            attorney Sean Park has the experience to represent you no matter the situation.</p>
          <a href="" class="my-btn btn-1">learn more</a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div class="practice">
          <img src="<?php bloginfo('template_directory'); ?>/public/images/practice-2.png" alt=""/>
          <h4>Criminal Defense</h4>

          <p>The Park Law Firm specializes in criminal defense cases of all kinds. Whether you or a loved one has
            recently
            run into legal trouble, attorney Sean Park has the experience to represent you no matter the
            situation.</p>
          <a href="" class="my-btn btn-1">learn more</a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div class="practice">
          <img src="<?php bloginfo('template_directory'); ?>/public/images/practice-3.png" alt=""/>
          <h4>Personal Injury</h4>

          <p>The Park Law Firm specializes in personal injury cases of all kinds. Whether you or a loved one has
            recently
            been injured, attorney Sean Park has the experience to represent you no matter the situation.</p>
          <a href="" class="my-btn btn-1">learn more</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container show-xs">
    <h2 class="star-title">Practice Areas</h2>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="practice-slider owl-carousel" owl-single-nav>
          <div class="practice">
            <img src="<?php bloginfo('template_directory'); ?>/public/images/practice-1.png" alt=""/>
            <h4>DUI</h4>

            <p>Sean Park Law specializes in DUI cases of all kinds. Whether you or a loved one has been charged with a
              DUI,
              attorney Sean Park has the experience to represent you no matter the situation.</p>
            <a href="" class="my-btn btn-1">learn more</a>
          </div>
          <div class="practice">
            <img src="<?php bloginfo('template_directory'); ?>/public/images/practice-2.png" alt=""/>
            <h4>Criminal Defense</h4>

            <p>The Park Law Firm specializes in criminal defense cases of all kinds. Whether you or a loved one has
              recently
              run into legal trouble, attorney Sean Park has the experience to represent you no matter the
              situation.</p>
            <a href="" class="my-btn btn-1">learn more</a>
          </div>
          <div class="practice">
            <img src="<?php bloginfo('template_directory'); ?>/public/images/practice-3.png" alt=""/>
            <h4>Personal Injury</h4>

            <p>The Park Law Firm specializes in personal injury cases of all kinds. Whether you or a loved one has
              recently
              been injured, attorney Sean Park has the experience to represent you no matter the situation.</p>
            <a href="" class="my-btn btn-1">learn more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="as-seen-on" class="site-padding">
  <div class="container">
    <h2 class="star-title">As seen on</h2>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="aso-wrapper clearfix">
          <div class="aso"><img src="<?php bloginfo('template_directory'); ?>/public/images/aso-1.jpg" alt=""/></div>
          <div class="aso"><img src="<?php bloginfo('template_directory'); ?>/public/images/aso-2.jpg" alt=""/></div>
          <div class="aso"><img src="<?php bloginfo('template_directory'); ?>/public/images/aso-3.jpg" alt=""/></div>
          <div class="aso"><img src="<?php bloginfo('template_directory'); ?>/public/images/aso-4.jpg" alt=""/></div>
          <div class="aso"><img src="<?php bloginfo('template_directory'); ?>/public/images/aso-5.jpg" alt=""/></div>
          <div class="aso"><img src="<?php bloginfo('template_directory'); ?>/public/images/aso-6.jpg" alt=""/></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="reviews-wrapper" class="bg-gradient-1">
  <div class="site-padding bg-lines-3">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div id="client-reviews" class="gray-border-1">
            <h2 class="star-title">Client reviews</h2>

            <div class="reviews-slider owl-carousel" owl-single-nav>
              <div class="review-slide">
                <h4><i class="fa fa-quote-left"></i> Someone I would trust for anything</h4>

                <p>When I first got into trouble I had no idea who to call for legal help. On the advice of a family
                  friend I called Sean and from our first phone call I knew I had made the right decision. The final
                  outcome of my case was more than I could have asked for. <i class="fa fa-quote-right"></i></p>

                <p><strong>Travis</strong> from <strong>Avvo.com</strong></p>

                <p><img src="<?php bloginfo('template_directory'); ?>/public/images/rating.png" alt=""/></p>

                <p><img src="<?php bloginfo('template_directory'); ?>/public/images/rating-logo.png" alt=""/></p>
              </div>
              <div class="review-slide">
                <h4><i class="fa fa-quote-left"></i> Someone I would trust for anything</h4>

                <p>When I first got into trouble I had no idea who to call for legal help. On the advice of a family
                  friend I called Sean and from our first phone call I knew I had made the right decision. The final
                  outcome of my case was more than I could have asked for. <i class="fa fa-quote-right"></i></p>

                <p><strong>Travis</strong> from <strong>Avvo.com</strong></p>

                <p><img src="<?php bloginfo('template_directory'); ?>/public/images/rating.png" alt=""/></p>

                <p><img src="<?php bloginfo('template_directory'); ?>/public/images/rating-logo.png" alt=""/></p>
              </div>
              <div class="review-slide">
                <h4><i class="fa fa-quote-left"></i> Someone I would trust for anything</h4>

                <p>When I first got into trouble I had no idea who to call for legal help. On the advice of a family
                  friend I called Sean and from our first phone call I knew I had made the right decision. The final
                  outcome of my case was more than I could have asked for. <i class="fa fa-quote-right"></i></p>

                <p><strong>Travis</strong> from <strong>Avvo.com</strong></p>

                <p><img src="<?php bloginfo('template_directory'); ?>/public/images/rating.png" alt=""/></p>

                <p><img src="<?php bloginfo('template_directory'); ?>/public/images/rating-logo.png" alt=""/></p>
              </div>
              <div class="review-slide">
                <h4><i class="fa fa-quote-left"></i> Someone I would trust for anything</h4>

                <p>When I first got into trouble I had no idea who to call for legal help. On the advice of a family
                  friend I called Sean and from our first phone call I knew I had made the right decision. The final
                  outcome of my case was more than I could have asked for. <i class="fa fa-quote-right"></i></p>

                <p><strong>Travis</strong> from <strong>Avvo.com</strong></p>

                <p><img src="<?php bloginfo('template_directory'); ?>/public/images/rating.png" alt=""/></p>

                <p><img src="<?php bloginfo('template_directory'); ?>/public/images/rating-logo.png" alt=""/></p>
              </div>
              <div class="review-slide">
                <h4><i class="fa fa-quote-left"></i> Someone I would trust for anything</h4>

                <p>When I first got into trouble I had no idea who to call for legal help. On the advice of a family
                  friend I called Sean and from our first phone call I knew I had made the right decision. The final
                  outcome of my case was more than I could have asked for. <i class="fa fa-quote-right"></i></p>

                <p><strong>Travis</strong> from <strong>Avvo.com</strong></p>

                <p><img src="<?php bloginfo('template_directory'); ?>/public/images/rating.png" alt=""/></p>

                <p><img src="<?php bloginfo('template_directory'); ?>/public/images/rating-logo.png" alt=""/></p>
              </div>
            </div>
          </div>

          <div class="badges clearfix">
            <div class="my-badge"><img src="<?php bloginfo('template_directory'); ?>/public/images/badge-1.png" alt=""/></div>
            <div class="my-badge"><img src="<?php bloginfo('template_directory'); ?>/public/images/badge-2.png" alt=""/></div>
            <div class="my-badge"><img src="<?php bloginfo('template_directory'); ?>/public/images/badge-3.png" alt=""/></div>
          </div>
          <div class="facebook-plugin">
            <img src="<?php bloginfo('template_directory'); ?>/public/images/facebook-like.jpg" alt=""/>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div id="contact-form">
            <h2 class="star-title">How can I help you?</h2>

            <p><strong>You can contact us using this form day or night, 24 hours a day, 7 days a week, 365 days a
              year.</strong> You will hear back from one of our attorneys the same day or next day.</p>

            <div class="my-form clearfix">
              <form action="">
                <div class="form-group">
                  <label>Your Name</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label>Your E-mail</label>
                  <input type="email" class="form-control">
                </div>
                <div class="form-group">
                  <label>Cell Phone</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label>How can we help? <span>(Optional)</span></label>
                  <textarea class="form-control" rows="5"></textarea>
                </div>
                <button type="submit" class="my-btn btn-2 clearfix">send message <span><i
                  class="fa fa-chevron-right"></i></span>
                </button>
                <img src="<?php bloginfo('template_directory'); ?>/public/images/form-image.jpg" alt=""/>
              </form>
            </div>
          </div>
          <div class="disclosure">
            <p>If you would like to speak with a team member immediately, we are available 24/7 via LIVE CHAT — or via
              phone toll-free from 8am – 10pm PST at: <span>844-seanpark</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div id="click-here">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <h3>Arrested for DUI?</h3>
      </div>
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <a href="" class="my-btn btn-2">Click Here</a>
        <h4 class="hide-s">for our free online DUI case evaluation</h4>
        <h4 class="show-s">for our free online <br/> DUI case evaluation</h4>
      </div>
    </div>
  </div>
</div>

<section id="locations" class="site-padding bg-gradient-2">
  <h2 class="star-title">Locations</h2>

  <div class="container hide-xs">
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div class="location clearfix">
          <div><img src="<?php bloginfo('template_directory'); ?>/public/images/location-1.png" alt=""/></div>
          <div>
            <h4>Nashville</h4>
            <address>
              <span class="marker-icon"><i class="fa fa-map-marker"></i></span>

              <p>424 Church Street, Suite</p>

              <p>2000 Nashville, TN 37219</p>
            </address>
            <p class="phone"><span><i class="fa fa-phone"></i></span> 615-861-8977</p>
            <a href="" class="my-link link-1">office details <i class="fa fa-chevron-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div class="location clearfix">
          <div><img src="<?php bloginfo('template_directory'); ?>/public/images/location-2.png" alt=""/></div>
          <div>
            <h4>franklin</h4>
            <address>
              <span class="marker-icon"><i class="fa fa-map-marker"></i></span>

              <p>136 Fourth Ave. South</p>

              <p>Franklin, TN 37064</p>
            </address>
            <p class="phone"><span><i class="fa fa-phone"></i></span> 615-790-1778</p>
            <a href="" class="my-link link-1">office details <i class="fa fa-chevron-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div class="location clearfix">
          <div><img src="<?php bloginfo('template_directory'); ?>/public/images/location-3.png" alt=""/></div>
          <div>
            <h4>atlanta</h4>
            <address>
              <span class="marker-icon"><i class="fa fa-map-marker"></i></span>

              <p>3355 Lenox Road Suite</p>

              <p>750 Atlanta, GA 30326</p>
            </address>
            <p class="phone"><span><i class="fa fa-phone"></i></span> 404-334-3251</p>
            <a href="" class="my-link link-1">office details <i class="fa fa-chevron-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container show-xs">
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-12 col-lg-12">
        <div class="locations-slider owl-carousel" owl-single-nav>
          <div class="location clearfix">
            <div><img src="<?php bloginfo('template_directory'); ?>/public/images/location-1.png" alt=""/></div>
            <div>
              <h4>Nashville</h4>
              <address>
                <p><i class="fa fa-map-marker"></i> 424 Church Street, Suite</p>

                <p>2000 Nashville, TN 37219</p>
              </address>
              <p class="phone"><i class="fa fa-phone"></i> 615-861-8977</p>
              <a href="" class="my-link link-1">office details <i class="fa fa-chevron-right"></i></a>
            </div>
          </div>
          <div class="location clearfix">
            <div><img src="<?php bloginfo('template_directory'); ?>/public/images/location-2.png" alt=""/></div>
            <div>
              <h4>franklin</h4>
              <address>

                <p><i class="fa fa-map-marker"></i> 136 Fourth Ave. South</p>

                <p>Franklin, TN 37064</p>
              </address>
              <p class="phone"><i class="fa fa-phone"></i> 615-790-1778</p>
              <a href="" class="my-link link-1">office details <i class="fa fa-chevron-right"></i></a>
            </div>
          </div>
          <div class="location clearfix">
            <div><img src="<?php bloginfo('template_directory'); ?>/public/images/location-3.png" alt=""/></div>
            <div>
              <h4>atlanta</h4>
              <address>

                <p><i class="fa fa-map-marker"></i> 3355 Lenox Road Suite</p>

                <p>750 Atlanta, GA 30326</p>
              </address>
              <p class="phone"><i class="fa fa-phone"></i> 404-334-3251</p>
              <a href="" class="my-link link-1">office details <i class="fa fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer() ;?>