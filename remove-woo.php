<?php

function didesweb_assets() {
  // Remove Woocommerce styles
  wp_dequeue_style( 'selectWoo' );
  wp_dequeue_style( 'woocommerce_frontend_styles' );
  wp_dequeue_style( 'woocommerce-general');
  wp_dequeue_style( 'woocommerce-layout' );
  wp_dequeue_style( 'woocommerce-smallscreen' );
  wp_dequeue_style( 'woocommerce_fancybox_styles' );
  wp_dequeue_style( 'woocommerce_chosen_styles' );
  wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
  wp_dequeue_style( 'woocommerce-inline' );
  wp_dequeue_style( 'select2' );

  // Remove Woocommerce scripts
  wp_dequeue_script( 'selectWoo' );
  wp_deregister_script( 'selectWoo' );
  wp_dequeue_script( 'select2' );
  wp_deregister_script( 'select2' );
  wp_dequeue_script( 'wc-add-payment-method' );
  wp_dequeue_script( 'wc-lost-password' );
  wp_dequeue_script( 'wc_price_slider' );
  wp_dequeue_script( 'wc-single-product' );
  wp_dequeue_script( 'wc-add-to-cart' );
  wp_dequeue_script( 'wc-cart-fragments' );
  wp_dequeue_script( 'wc-credit-card-form' );
  wp_dequeue_script( 'wc-checkout' );
  wp_dequeue_script( 'wc-add-to-cart-variation' );
  wp_dequeue_script( 'wc-single-product' );
  wp_dequeue_script( 'wc-cart' );
  wp_dequeue_script( 'wc-chosen' );
  wp_dequeue_script( 'woocommerce' );
  wp_dequeue_script( 'prettyPhoto' );
  wp_dequeue_script( 'prettyPhoto-init' );
  wp_dequeue_script( 'jquery-blockui' );
  wp_dequeue_script( 'jquery-placeholder' );
  wp_dequeue_script( 'jquery-payment' );
  wp_dequeue_script( 'fancybox' );
  wp_dequeue_script( 'wc-country-select' );
  wp_deregister_script( 'wc-country-select' );
  wp_dequeue_script( 'wc-address-i18n' );
  wp_deregister_script( 'wc-address-i18n' );
}
add_action('wp_enqueue_scripts', 'didesweb_assets', 100);

// Remove noscript woocommerce
add_action( 'init', 'didesweb_remove_custom_action' );
function didesweb_remove_custom_action(){
	remove_action( 'wp_head', 'wc_gallery_noscript' );
}
function didesweb_remove_hook(){
	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
}
add_action( 'woocommerce_before_shop_loop', 'didesweb_remove_hook', 1 );