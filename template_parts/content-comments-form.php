<?php $comment_args = array( 
  'title_reply'=>'',
  
  'fields' => apply_filters( 'comment_form_default_fields', array(
    
    'author' => 
    '<div class="form-group">' 
    . '<label for="author">' 
    . __( 'Your Name' ) . '</label> ' 
    . ( $req ? '<span>*</span>' : '' ) 
    . '<input id="author" class="form-control" name="author" type="text" value="' 
    . esc_attr( $commenter['comment_author'] ) 
    . '" size="30"' . $aria_req 
    . ' /></div>',   

    'email'  => 
    '<div class="form-group">' 
    . '<label for="email">' 
    . __( 'Your Email' ) 
    . '</label> ' 
    . ( $req ? '<span>*</span>' : '' ) 
    . '<input id="email" class="form-control" name="email" type="text" value="' 
    . esc_attr(  $commenter['comment_author_email'] ) 
    . '" size="30"' 
    . $aria_req 
    . ' />'
    .'</div>',
    'url'    => '' 
    )),

    'comment_field' => 
    '<div class="form-group">' 
    . '<label for="comment">' 
    . __( 'Your Comment' ) 
    . ' <span>*</span></label>' 
    . '<textarea id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea>' 
    .'</div>',

    'comment_notes_after' => '',

    'comment_notes_before' => '',

    'label_submit' => __( 'Post Comment' ),

    'class_submit' => 'my-btn btn-2'

);?>

<div class="comments-form detail-section">
  <h4><span><i class="fa fa-pencil-square-o"></i></span> Leave a comment</h4>

  <div class="my-form">
    <?php comment_form($comment_args); ?>
  </div>
</div>