add_filter( 'woocommerce_quantity_input_args', 'mrc_woocommerce_quantity_changes', 10, 2 );
   
function mrc_woocommerce_quantity_changes( $args, $product ) {
   
   if ( ! is_cart() ) {
  	  // single product
      $args['input_value'] = 4; // Start from this value (default = 1) 
      $args['max_value'] = 10; // Max quantity (default = -1)
      $args['min_value'] = 4; // Min quantity (default = 0)
      $args['step'] = 2; // Increment/decrement by this value (default = 1)
  
   } else {
  
      // Cart's "min_value" is already 0 and we don't need "input_value"
      $args['max_value'] = 10; // Max quantity (default = -1)
      $args['step'] = 2; // Increment/decrement by this value (default = 0)
      $args['min_value'] = 4; // Min quantity (default = 0)
  
   }
   
   return $args;
   
}
