<?php
/**
 *  Dynamic style
 *  color and background
 *
 * @package idealx Theme
 * @subpackage Dynamic style
 * @since V1.0.0
 * @version 1.0.0
 *
 */

if (!class_exists('Kirki')) {
    return;
}

$idealx_options = idealx_get_theme_options();

if (!empty($idealx_options['post-img-background'])) {
    $idealx_featured_options = $idealx_options['post-img-background'];
}else{
  $idealx_featured_options =null;
}
if (!empty($idealx_options['id_color_gradient']['from'])) {
    $idealx_gradient_prim_from = $idealx_options['id_color_gradient']['from'];
}if (!empty($idealx_options['id_color_gradient']['to'])) {
    $idealx_gradient_prim_to = $idealx_options['id_color_gradient']['to'];
}if (!empty($idealx_options['id_sub_color_gradient']['from'])) {
    $idealx_sub_gradient_from = $idealx_options['id_sub_color_gradient']['from'];
}if (!empty($idealx_options['id_sub_color_gradient']['to'])) {
    $idealx_sub_gradient_to = $idealx_options['id_sub_color_gradient']['to'];
}
/*-------------------------------------------------------------------------
#                         General Color background                       #
-------------------------------------------------------------------------*/

echo '
' . (!empty($idealx_options['id_primary_color']) ? '

.id-button-primary,.id-primary,.cart-count-nav,.idealx-woo-cart-nav .widget_shopping_cart a.button,
.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button
{
  background-color:' . $idealx_options['id_primary_color'] . ';
}
.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,
.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover
{
  background-color:' . $idealx_options['id_primary_color'] . ';
}
 
' : "") . '


.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,
.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover
{
 color: #fff
}



.id-button-primary,.id-primary,.cart-count-nav,#idealx-nav-c .idealx-woo-cart-nav .widget_shopping_cart a.button,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button
{
 color: #fff;
}

' . (!empty($idealx_options['id_secondary_color']) ? '

.id-secondary{
  background:' . $idealx_options['id_secondary_color'] . ';
}' : "") . '

' . (!empty($idealx_options['id_sub_additional_color']) ? '

.id-sub-color{
  background:' . $idealx_options['id_sub_additional_color'] . ';
}' : "") . '

' . (!empty($idealx_options['id_sub_plus_color']) ? '

.id_sub_plus_color{
  background:' . $idealx_options['id_sub_plus_color'] . ';
}' : "") . '

' . (!empty($idealx_options['id_color_gradient']['from']) ? '
.has-i-color-gradient-gradient-background{
  background:linear-gradient(135deg,' . $idealx_options['id_color_gradient']['from'] . ' 0%,' . $idealx_gradient_prim_to = $idealx_options['id_color_gradient']['to'] . ' 100%)

}' : "") . '

' . (!empty($idealx_options['id_sub_color_gradient']['from']) ? '
.has-i-sub-color-gradient-gradient-background{
  background:linear-gradient(135deg,' . $idealx_options['id_sub_color_gradient']['from'] . ' 0%,' . $idealx_gradient_prim_to = $idealx_options['id_sub_color_gradient']['to'] . ' 100%)
}' : "") . '

' . (!empty($idealx_options['id_sub_additional_color']) ? '
.has-sub-additional-color{
  color:' . $idealx_options['id_sub_additional_color'] . ';
}
' : "") . '
' . (!empty($idealx_options['id_secondary_color']) ? '
.has-secondary-color-color{
  color:' . $idealx_options['id_secondary_color'] . ';
}' : "") . '
' . (!empty($idealx_options['id_primary_color']) ? '
.has-primary-color-color{
  color:' . $idealx_options['id_primary_color'] . ';
}' : "") . '
' . (!empty($idealx_options['id_sub_plus_color']) ? '
.has-sub-additional-plus-color{
  color:' . $idealx_options['id_sub_plus_color'] . ';
}' : "") . '
' . (!empty($idealx_options['id_primary_color']) ? '
.has-primary-color-background-color{
  background:' . $idealx_options['id_primary_color'] . ';
}' : "") . '
' . (!empty($idealx_options['id_secondary_color']) ? '
.has-secondary-color-background-color{
  background:' . $idealx_options['id_secondary_color'] . ';
}' : "") . '
' . (!empty($idealx_options['id_sub_plus_color']) ? '
.has-sub-additional-plus-background-color{
  background:' . $idealx_options['id_sub_plus_color'] . ';
}' : "") . '
' . (!empty($idealx_options['id_sub_additional_color']) ? '
.has-sub-additional-background-color{
  background:' . $idealx_options['id_sub_additional_color'] . ';
}' : "") . '
';
/*------------------------------------------------------------------------
#                       body Color  background                           #
-------------------------------------------------------------------------*/
echo '
' . (!empty($idealx_options['body_b_color']) ? '

body {
  background: ' . $idealx_options['body_b_color'] . ';
}' : "") . '
' . (!empty($idealx_options['body_b_color']) ? '

body,.article-inner-wrap .id-excerpt p,.article-inner-wrap .uk-card-default,.uk-card-default{
  color: ' . $idealx_options['body_f_color'] . ';
}' : "") . '
' . (!empty($idealx_options['id_primary_color']) ? '

a{
  color:' . $idealx_options['id_primary_color'] . ';

}' : "") . '
' . (!empty($idealx_options['id_secondary_color']) ? '
a:hover{
  color:' . $idealx_options['id_secondary_color'] . ';
}' : "") . '

';
/*------------------------------------------------------------------------
#                       body Elements                         #
-------------------------------------------------------------------------*/
echo '
' . (!empty($idealx_options['id_secondary_color']) && !empty($idealx_options['id_primary_color']) ? '
address::before,blockquote:before{
  color: ' . $idealx_options['id_secondary_color'] . ';
}
blockquote,address{
  border-color: ' . $idealx_options['id_primary_color'] . ';
}' : "") . '
';
/*------------------------------------------------------------------------
#                        menu Color - background
-------------------------------------------------------------------------*/
echo '
' . (!empty($idealx_options['off-canvas-b-color']) ? '
#m-t-offcanvas.uk-offcanvas-bar{

  background:' . $idealx_options['off-canvas-b-color'] . '!important;
  color:' . $idealx_options['font-offcanvas'] . '!important;
}

.uk-offcanvas-overlay::before{
  background:' . $idealx_options['off-canvas-overlay-color'] . '!important;
}' : "") . '
';
/*-------------------------------------------------------------------------
#                     Page Header Color  background                       #
-------------------------------------------------------------------------*/
echo '
' . (!empty($idealx_options['blog-color-rgba-header-overlay']) ? '
#blog-page-header-overlay{
  background:' . $idealx_options['blog-color-rgba-header-overlay'] . ';
}' : "") . '
' . (!empty($idealx_options['archives-color-rgba-header-overlay']) ? '

#archives-header-overlay{
  background:' . $idealx_options['archives-color-rgba-header-overlay'] . ';
}' : "") . '
';
if ( $idealx_featured_options == false || $idealx_featured_options == null ) {

    echo '
  #blog-page-header{
' . (!empty($idealx_options['s-post-header-bg']['background-color']) ? '
background:' . $idealx_options['s-post-header-bg']['background-color'] . ';
' : "") . '
' . (!empty($idealx_options['s-post-header-bg']['background-image']) ? '
background-image:url("' . $idealx_options['s-post-header-bg']['background-image'].'");
background-repeat:' . $idealx_options['s-post-header-bg']['background-repeat'] . ';
background-position:' . ($idealx_options['s-post-header-bg']['background-position'] . ';
background-size:' . $idealx_options['s-post-header-bg']['background-size']) . ';
background-attachment:' . $idealx_options['s-post-header-bg']['background-attachment'] . '; }
  ' : "}") . '
  ';
}

   


echo '#archives-page-header{
 ' . (!empty($idealx_options['archives-header-bg']['background-color']) ? '
background:' . $idealx_options['archives-header-bg']['background-color'] . ';' : "") . '
' . (!empty($idealx_options['archives-header-bg']['background-image']) ? '
background-image:url("' . $idealx_options['archives-header-bg']['background-image'] . '");
background-repeat:' . $idealx_options['archives-header-bg']['background-repeat'] . ';
background-position:' . $idealx_options['archives-header-bg']['background-position'] . ';
background-size:' . $idealx_options['archives-header-bg']['background-size'] . ';
background-attachment:' . $idealx_options['archives-header-bg']['background-attachment'] . ';
}' : "}") . ' 
';


/*-------------------------------------------------------------------------
#                                    forms                                #
-------------------------------------------------------------------------*/
echo '
' . (!empty($idealx_options['id_primary_color']) ? '

.id-primary,body[data-form-submit="regular"], input[type=submit],.uk-checkbox:checked, .uk-checkbox:indeterminate, .uk-radio:checked{
  background-color:' . $idealx_options['id_primary_color'] . ';
}
.uk-input:focus, .uk-select:focus, .uk-textarea:focus,input[type=text]:focus, input[type=email]:focus, input[type=password]:focus, input[type=tel]:focus, input[type=url]:focus, input[type=search]:focus, input[type=date]:focus, textarea:focus,.uk-textarea:focus,.uk-input:focus, .uk-select:focus, .uk-textarea:focus,.woocommerce input#coupon_code:focus{
  border-color:' . $idealx_options['id_primary_color'] . ';
}' : "") . '
';
/*-------------------------------------------------------------------------
#                                    comments                             #
-------------------------------------------------------------------------*/
echo '
' . (!empty($idealx_options['id_primary_color']) ? '
.bypostauthor .img-circle,ul>li .bypostauthor .img-circle,.children li .bypostauthor .img-circle{
  border-color:' . $idealx_options['id_primary_color'] . ';
}' : "") . '
';