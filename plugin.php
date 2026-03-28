<?php
/**
  * Sample Plugin
  *
  * @package      SAMPLE
  * @author       D
  * @verion       1.0.0
  *
  * @wordpress-plugin
  * Plugin Name:  Plugin-two
  * Description:  A sample plugin with boiler plate for testing git deployment
  * Version: 1.0.0
  * Text Domain:  sample-plugin
  * Author: D
  *
*/

if ( !defined( 'ABSPATH')) exit;

// Custom admin page to test deployment
add_action('admin_menu', function() {
    add_menu_page(
        'Sample Plugin',           // Page title
        'Sample Plugin',           // Menu title
        'manage_options',          // Capability
        'sample-plugin',           // Menu slug
        function() {               // Callback function
            echo '<div class="wrap">';
            echo '<h1>Sample Plugin Status</h1>';
            echo '<div style="background-color: #f1f1f1; padding: 20px; border-radius: 5px; margin-top: 20px;">';
            echo '<p><strong>Plugin Information:</strong></p>';
            echo '<p>Plugin Name: Sample Plugin</p>';
            echo '<p>Plugin Version: 1.0.5</p>';
            echo '<p>Deployment Date: ' . date('Y-m-d H:i:s') . '</p>';
            echo '<p>WordPress Version: ' . get_bloginfo('version') . '</p>';
            echo '<p style="color: green; font-weight: bold; margin-top: 20px;">✓ Git Deployment Test Active</p>';
            echo '</div>';
            echo '</div>';
        },
        'dashicons-admin-tools',   // Icon
        25                         // Position
    );
});
