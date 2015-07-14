<?php if(ot_get_option('click_here_title') && ot_get_option('click_here_subtitle')): ?>
<div id="click-here">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <h3><?php echo ot_get_option('click_here_title') ;?></h3>
      </div>
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <span class="hide-xs"><a href="#reviews-wrapper" offset="64" du-smooth-scroll class="my-btn btn-2">Click Here</a></span>
        <span class="show-xs"><a href="#contact-form" offset="70" du-smooth-scroll class="my-btn btn-2">Click Here</a></span>
        <h4><?php echo ot_get_option('click_here_subtitle'); ?></h4>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>