<aside class="sidebar blog">
  <div class="widget most-viewed">
    <h4><span><i class="fa fa-eye"></i></span> Most Viewed</h4>
    <?php get_template_part('template_parts/content', 'most-viewed'); ?>
  </div>

  <?php if ( is_active_sidebar( 'sidebar-blog' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-blog' ); ?>
  <?php endif; ?>
</aside>