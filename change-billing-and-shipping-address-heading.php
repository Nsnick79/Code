<?php
// Do NOT include the opening php tag.
// Place in your theme's functions.php file

add_filter( 'cfw_billing_shipping_address_heading', function( $heading ) {
   return 'Shipping address';
} );
