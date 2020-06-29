<?php
/**
 * options style link - padding - margin - shadow 
 * 
 * @package idealx Theme
 * @subpackage Dynamic style
 * @since V1.0.0
 * @version 1.0.0 
 *  # menu
 *  #Page Header
 */
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if (!class_exists('Kirki')) {
    return;
}
if(empty($idealx_options['nav-idealx-height'])){
    $idealx_header_height = '80px';
}else{
    $idealx_header_height = $idealx_options['nav-idealx-height'];

}
$idealx_options    = idealx_get_theme_options();
$idealx_light_logo =null;
$idealx_dark_logo =null;
if(!empty($idealx_options['header-t-logo-light-kmod'])){
$idealx_light_logo       = $idealx_options['header-t-logo-light-kmod'];}
if(!empty($idealx_options['header-t-logo-dark-kmod'])){

$idealx_dark_logo        = $idealx_options['header-t-logo-dark-kmod'];} 

/*-=========================[ menu ]=====================- */
echo '
'.(!empty($idealx_options['header-s-logo'])? '
.idealx-Logoo{
    content:url("'.$idealx_options['header-s-logo'].'");
}':"") .'
'.(!empty($idealx_light_logo)? '
.uk-light .idealx-Logoo{
    content:url("'. $idealx_light_logo .'");
}':"") .'
'.(!empty($idealx_dark_logo)? '
.uk-dark .idealx-Logoo{
    content:url("'. $idealx_dark_logo .'");
}':"") .'
'.(!empty($idealx_options['navbar-light-color-moode'])? '
#idealx-nav.uk-light .idealx-Logo h2{
    color: '. $idealx_options['navbar-light-color-moode'] .';
}':"") .'
'.(!empty($idealx_options['navbar-dark-color-moode'])? '
#idealx-nav.uk-dark .idealx-Logo h2{
    color: '. $idealx_options['navbar-dark-color-moode'] .' ;
}':"") .'
'.(!empty($idealx_options['nav-idealx-height'])? '
#idealx-nav-c{
    height: '.  $idealx_options['nav-idealx-height'] .';
}':"") .'
'.(!empty( $idealx_options['header-m-b-color'])? '
#idealx-nav.uk-navbar-container:not(.uk-navbar-transparent){
    background: '.  $idealx_options['header-m-b-color'] .';
}':"") .'
'.(! empty( $idealx_options['transparent-header'] ) && $idealx_options['transparent-header'] == true ? '
.header-hero{
	margin-top:-'.  $idealx_header_height .';
}':"") .'
';
/*---------menu shadow------------ */
if(!empty($idealx_options['header-shadow-b']) && $idealx_options['header-shadow-b'] == 'smal'){
    echo '
    @media screen and (min-width: 900px) {
    #idealx-nav{
        -webkit-box-shadow: 0 0 3px 0 rgba(0,0,0,0.22);
        box-shadow: 0 0 3px 0 rgba(0,0,0,0.22);
        } } ';
    }elseif(!empty($idealx_options['header-shadow-b']) && $idealx_options['header-shadow-b'] == 'larg'){
        echo '
        @media screen and (min-width: 900px) {
        #idealx-nav{
        webkit-box-shadow: 0 3px 45px rgba(0,0,0,0.15);
        box-shadow: 0 3px 45px rgba(0,0,0,0.15);
            } }';
    }elseif( !empty($idealx_options['header-shadow-b']) &&  $idealx_options['header-shadow-b'] == 'non'){

        echo '
        @media screen and (min-width: 900px) {
        #idealx-nav{
        webkit-box-shadow: unset;
        box-shadow: unset;
            } }';
    }


/*-=========================[ Page Header ]=====================-*/
if(! empty($idealx_options['transparent-header']) && $idealx_options['transparent-header'] == true ){
    echo'
    .blog-wrap-header,.archives-wrap-header,#hero-section,idealx-pages-header{
        padding-top: '.(!empty( $idealx_options['nav-idealx-height']) ? '
         '.  $idealx_options['nav-idealx-height'] .';
    }' : '80px }') . '
    
    ';
}
echo'
'.(!empty($idealx_options['post-header-hight']['padding-top']) ? '
.id-bh-inner-wrap{
    padding-top:'.  $idealx_options['post-header-hight']['padding-top'].';
    padding-bottom:'.  $idealx_options['post-header-hight']['padding-bottom'] .';
}':"") .'

'.(!empty($idealx_options['archives-header-hight']['padding-top']) ? '

.id-archives-inner-wrap{
    padding-top:'.  $idealx_options['archives-header-hight']['padding-top'].';
    padding-bottom:'.  $idealx_options['archives-header-hight']['padding-bottom'] .';
}':"") .'
';

/*-=========================[ ---Page---- ]=====================-*/
if(! empty($idealx_options['page-container-width'])){
    echo'
    #idealx-page-content-inner.uk-container{
        max-width:' . $idealx_options['page-container-width'] . 'px;
    }
    ';
}
if(! empty($idealx_options['page-padding-top-bottom']['padding-top'])){
echo'
#idealx-pagecontent.uk-section{
    padding-top:'.  $idealx_options['page-padding-top-bottom']['padding-top'].';
    padding-bottom:'.  $idealx_options['page-padding-top-bottom']['padding-bottom'] .';
}
';
}
/*-=========================[ ---hero---- ]=====================-*/

if(!empty($idealx_options['hero_overlay_color'])){
    
   echo' #hero-section{box-shadow: inset 0 0 0 100vw '.esc_html($idealx_options['hero_overlay_color']).';}';
}
echo'
#hero-section{ 
    ' . (!empty($idealx_options['hero_section_background_setting']['background-color']) ? '
    background:' . $idealx_options['hero_section_background_setting']['background-color'] . ';' : "") . '
    ' . (!empty($idealx_options['hero_section_background_setting']['background-image']) ? '
    background-image:url("' . $idealx_options['hero_section_background_setting']['background-image'] . '");
    background-repeat:' . $idealx_options['hero_section_background_setting']['background-repeat'] . ';
    background-position:' . $idealx_options['hero_section_background_setting']['background-position'] . ';
    background-size:' . $idealx_options['hero_section_background_setting']['background-size'] . ';
    background-attachment:' . $idealx_options['hero_section_background_setting']['background-attachment'] . ';
    }' : "}") . '
    ';