<?php while ( have_posts() ) : the_post(); ?>
<header id="header-general" class="header">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="header-general">
          <?php the_title('<h1>', '&nbsp;office</h1>');?> 
        </div>
      </div>
    </div>
  </div>
</header>
<?php endwhile; ?>