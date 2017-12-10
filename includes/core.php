<?php

// Register settings
function RestaurantOps_register_settings()
{
  register_setting( 'RestaurantOps_settings_group', 'RestaurantOps_settings' );
}
add_action( 'admin_init', 'RestaurantOps_register_settings' );

// Delete options on uninstall
function RestaurantOps_uninstall()
{
  delete_option( 'RestaurantOps_settings' );
}
register_uninstall_hook( __FILE__, 'RestaurantOps_uninstall' );
?>
