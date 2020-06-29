<?php
if (!defined('ABSPATH')) {
    exit;
}
global
$idealx_options,
$idealx_category,
$idealx_is_sidebar,
$idealx_is_sticky,
$idealx_animation_class, 
$idealx_flex,
$idealx_animation,
$idealx_is_page_sidebar,
$idealx_animation_repeat,
$idealx_card,
$idealx_is_cards,
$idealx_is_single_cards,
$idealx_is_page_cards,
$idealx_id_container,
$idealx_id_child,
$idealx_is_featured_image,
$idealx_card_imge,
$idealx_featured_image
;


$idealx_options                   = idealx_get_theme_options();
$idealx_category                  = get_the_category();
$idealx_is_sidebar                = false;
$idealx_is_sticky                 = null;
$idealx_sidebar_position          = null;
$idealx_animation_class           = null;
$idealx_flex                      = null;
$idealx_animation                 = null;
$idealx_is_page_sidebar           = false;
$idealx_animation_repeat          = null;
$idealx_is_cards                  = null;
$idealx_is_single_cards           = null;
$idealx_is_page_cards             = null;
$idealx_card                      = null;
$idealx_id_container              = null;
$idealx_id_child                  = null;
$idealx_is_featured_image         = null;
$idealx_card_imge                 = null;
$idealx_featured_image            = null;


if (class_exists('Kirki')) {


    if(!empty($idealx_options['is_post_sidebar'])){ 
    $idealx_is_sidebar               = $idealx_options['is_post_sidebar'] ;
    }if(!empty($idealx_options['is-page-sidebar'])){
        $idealx_is_page_sidebar      =  $idealx_options['is-page-sidebar'] ;
    }if(!empty($idealx_options['i-sticky-sidebar'])){
        $idealx_is_sticky            =  $idealx_options['i-sticky-sidebar'] ;
    }if( !empty($idealx_options['sidebar-position'])){
        $idealx_sidebar_position     =  $idealx_options['sidebar-position'] ;
    }if(!empty($idealx_options['id-scroll-animations'])){
        $idealx_animation_class      =  $idealx_options['id-scroll-animations'] ;
    }if(!empty($idealx_options['post-imge-in'])){
        $idealx_is_featured_image    =  $idealx_options['post-imge-in'] ;
    }if(!empty($idealx_options['add-cards-blog'])){
        $idealx_is_cards             =  $idealx_options['add-cards-blog'] ;
    }if(!empty($idealx_options['post-cards'])){
        $idealx_is_single_cards      =  $idealx_options['post-cards']  ;
    }if(!empty($idealx_options['add-cards-page'])){
        $idealx_is_page_cards        =  $idealx_options['add-cards-page'] ;
    }if(!empty($idealx_options['post-cards'])){
        $idealx_is_cards             =  $idealx_options['add-cards-blog'] ;
    }
}else{
    
    $idealx_is_sidebar           =   false  ;
    $idealx_is_page_sidebar      =   false ;   
    $idealx_is_featured_image    =    false ; 

}

if (!empty($idealx_is_cards) && $idealx_is_cards == true ) {

    $idealx_card = 'uk-card-default';
}

if (!empty($idealx_options['repeat-scrollspy']) && $idealx_options['repeat-scrollspy'] == true) {
    $idealx_animation_repeat = '  repeat: "true"';

} else{
    $idealx_animation_repeat = null;
}

if (!empty($idealx_options['add-scrollspy']) && $idealx_options['add-scrollspy'] == true) {

    $idealx_animation = 'uk-scrollspy="cls: ' . $idealx_animation_class . '; target: .uk-card; delay: 500;' . $idealx_animation_repeat . '';
}


if (empty( $idealx_is_page_sidebar ) || $idealx_is_page_sidebar == false ) {
  $idealx_id_container = 'uk-container-expand';
} else {
  $idealx_id_container = 'uk-container-small';
}

if (!empty($idealx_sidebar_position) && $idealx_sidebar_position == 'left') {
    $idealx_flex = 'uk-flex-first@m';
} else {
    $idealx_flex = null;
}

if (!empty($idealx_is_sticky) && $idealx_is_sticky == true ) {

    $idealx_is_sticky = 'uk-sticky="offset: 100; bottom: #id-comments"';
}
if (empty($idealx_is_sidebar) || $idealx_is_sidebar == false) {
  $idealx_id_container = 'uk-container-expand';
  $idealx_id_child = 'uk-child-width-1-2@m';
} else {
  $idealx_id_container = 'uk-container-small';
  $idealx_id_child = 'uk-child-width-1-3@m';
}

if ($idealx_is_featured_image == false  &&  $idealx_is_cards == false  ){

    $idealx_card_imge = 'single-post-fe-img';

}