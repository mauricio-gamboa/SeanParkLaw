<?php 
if (function_exists('wpp_get_mostpopular')) {
  wpp_get_mostpopular(
    'wpp_start="<div>"&wpp_end="</div>"
    &limit="3"
    &thumbnail_width="69"
    &thumbnail_height="69"
    &excerpt_length="65"
    &post_html="<article class=\'article\'><h3>{text_title}</h3>{thumb_img}<div><p>{summary}</p><div class=\'clearfix\'><a href=\'{url}\' class=\'my-link link-1\'>read full story <i class=\'fa fa-chevron-right\'></i></a></div></div></article>"'
    );
}