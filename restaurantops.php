<?php
/*
 * Plugin Name: RestaurantOps
 * Version: 1.0.0
 * Description: Adds an online ordering widget. Designed for restaurants like yours to increase sales, increase efficiency and increase income.
 * Author: RestaurantOps
 * Author URI: https://www.restaurantops.co/?ref=wordpress
 * Plugin URI: https://www.restaurantops.co/?ref=wordpress
 */

// Prevent Direct Access
defined('ABSPATH') or die("Restricted access!");

/*
* Define
*/
define('RESTAURANTOPS_VERSION', '1.0');
define('RESTAURANTOPS_DIR', plugin_dir_path(__FILE__));
define('RESTAURANTOPS_URL', plugin_dir_url(__FILE__));
defined('RESTAURANTOPS_PATH') or define('RESTAURANTOPS_PATH', untrailingslashit(plugins_url('', __FILE__)));

require_once(RESTAURANTOPS_DIR . 'includes/core.php');
require_once(RESTAURANTOPS_DIR . 'includes/menus.php');
require_once(RESTAURANTOPS_DIR . 'includes/admin.php');
require_once(RESTAURANTOPS_DIR . 'includes/embed.php');


?>
