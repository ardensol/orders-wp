<?php

// Add the RestaurantOps Javascript
add_action('wp_head', 'add_restaurantops');

// The guts of the RestaurantOps script
function add_restaurantops()
{
  // Ignore admin, feed, robots or trackbacks
  if ( is_feed() || is_robots() || is_trackback() )
  {
    return;
  }

  $options = get_option('RestaurantOps_settings');

  // If options is empty then exit
  if( empty( $options ) )
  {
    return;
  }

  // Check to see if RestaurantOps is enabled
  if ( esc_attr( $options['restaurantops_enabled'] ) == "on" )
  {
    $restaurantops_tag = $options['restaurantops_widget_code'];
    
    // Insert tracker code
    if ( '' != $restaurantops_tag )
    {
      echo "<!-- Start RestaurantOps By WP-Plugin: RestaurantOps -->\n";
      echo $restaurantops_tag;
      echo"<!-- end: RestaurantOps Code. -->\n";
    }
  }
}
?>