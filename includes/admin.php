<?php

// Output the options page
function restaurantops_options_page()
{
  // Get options
  $options = get_option('RestaurantOps_settings');

  // Check to see if RestaurantOps is enabled
  $restaurantops_activated = false;
  if ( esc_attr( $options['restaurantops_enabled'] ) == "on" ) {
    $restaurantops_activated = true;
    wp_cache_flush();
  }

?>
        <div class="wrap">
        <form name="RestaurantOps-form" action="options.php" method="post" enctype="multipart/form-data">
          <?php settings_fields( 'RestaurantOps_settings_group' ); ?>

            <h1>RestaurantOps</h1>
            <h3>Basic Options</h3>
            <?php if ( ! $restaurantops_activated ) { ?>
                <div style="margin:10px auto; border:3px #f00 solid; background-color:#fdd; color:#000; padding:10px; text-align:center;">
                RestaurantOps Live Chat is currently <strong>DISABLED</strong>.
                </div>
            <?php } ?>
            <?php do_settings_sections( 'RestaurantOps_settings_group' ); ?>

            <table class="form-table" cellspacing="2" cellpadding="5" width="100%">
                <tr>
                    <th width="30%" valign="top" style="padding-top: 10px;">
                        <label for="restaurantops_enabled">RestaurantOps (Online Ordering) is:</label>
                    </th>
                    <td>
                      <?php
                          echo "<select name=\"RestaurantOps_settings[restaurantops_enabled]\"  id=\"restaurantops_enabled\">\n";

                          echo "<option value=\"on\"";
                          if ( $restaurantops_activated ) { echo " selected='selected'"; }
                          echo ">Enabled</option>\n";

                          echo "<option value=\"off\"";
                          if ( ! $restaurantops_activated ) { echo" selected='selected'"; }
                          echo ">Disabled</option>\n";
                          echo "</select>\n";
                        ?>
                    </td>
                </tr>
            </table>
            <table class="form-table" cellspacing="2" cellpadding="5" width="100%">
                <tr>
                    <th valign="top" style="padding-top: 10px;">
                        <label for="RestaurantOps_widget_code">RestaurantOps JS code snippet:</label>
                    </th>
                    <td>
                        <textarea rows="15" cols="100" placeholder="<!-- Insert the RestaurantOps tag here -->" name="RestaurantOps_settings[restaurantops_widget_code]"><?php echo esc_attr( $options['restaurantops_widget_code'] ); ?></textarea>
                        <p style="margin: 5px 10px;">Enter your RestaurantOps JS code snippet.  You can find your <a href="https://orders.restaurantops.co" target="_blank" title="Open RestaurantOps Settings">RestaurantOps JS code snippet here</a>. A Free RestaurantOps account is required to use this plugin.</p>
                    </td>
                </tr>
            </table>
            <p class="submit">
                <?php echo submit_button('Save Changes'); ?>
            </p>
        </div>
        </form>

<?php
}
?>
