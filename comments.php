<div id="comments" class="comments-wrapper detail-section">
  <h4><span><i class="fa fa-comments"></i></span> Comments</h4>

  <?php if ( have_comments() ) : ?>
  <div class="comments">
    <?php wp_list_comments( array('style' =>'div', 'callback' => 'mytheme_comment' ) ); ?>
  </div>
  <?php endif; ?>
</div>

<?php get_template_part('template_parts/content', 'comments-form'); ?>