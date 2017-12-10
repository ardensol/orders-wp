<?php

// Create a option page for settings
add_action('admin_menu', 'add_restaurantops_option_page');

// Add top-level admin bar link
add_action('admin_bar_menu', 'add_restaurantops_link_to_admin_bar', 999);

// Adds RestaurantOps link to top-level admin bar
function add_restaurantops_link_to_admin_bar()
{
  global $wp_version;
  global $wp_admin_bar;

  $restaurantops_icon = '<img src="' . RESTAURANTOPS_PATH . '/assets/restaurantops-icon-16x16-white.png' . '">';

  $args = array(
    'id' => 'restaurantops-admin-menu',
    'title' => '<span class="ab-icon" ' . ($wp_version < 3.8 && !is_plugin_active('mp6/mp6.php') ? ' style="margin-top: 3px;"' : '') . '>' . $restaurantops_icon . '</span><span class="ab-label">RestaurantOps</span>', // alter the title of existing node
    'parent' => FALSE,   // set parent to false to make it a top level (parent) node
    'href' => get_bloginfo('wpurl') . '/wp-admin/admin.php?page=menus.php',
    'meta' => array('title' => 'RestaurantOps')
  );

  $wp_admin_bar->add_node($args);
}

// Hook in the options page functionå
function add_restaurantops_option_page()
{
  add_options_page('RestaurantOps Options', 'RestaurantOps', 'activate_plugins', basename(__FILE__), 'restaurantops_options_page');
}

?>
