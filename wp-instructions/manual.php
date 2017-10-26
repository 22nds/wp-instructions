<?php
/*
    Plugin Name: WP Instructions
    Description: Instructions for admins in the main navigation
    Author: Maja Kraljic
    Version: 1.0.0
*/

class WP_Manual
{
    public function __construct()
    {
        function debug_console($data)
        {
            $mode = 'dev';
            $output = $data;
            if (is_array($output)) {
                $output = implode(',', $output);
            }
            if ($mode === 'dev') {
                echo "<script>console.log( 'DEBUG: " . $output . "' );</script>";
            }
            return;
        }

        // Hook into the admin menu
        add_action('admin_menu', array( $this, 'create_plugin_instructions_page' ));

        /**
         * Enqueue scripts and styles - for all admin pages.
         */
        function wpdocs_theme_name_scripts($hook)
        {
            // load css on every admin page for main nav icon colors
            wp_enqueue_style('22nds_custom_css', plugin_dir_url(__FILE__) . 'css/style.css');

            // Exit if not on plugin page
            if ('toplevel_page_22nds_manual' != $hook) {
                return;
            }
            wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', false, true);
            wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), false, true);
            wp_enqueue_script('22nds_custom', plugin_dir_url(__FILE__) . 'js/custom.js', ['bootstrap-js', 'jquery'], '1.0.0', true);
        }
        add_action('admin_enqueue_scripts', 'wpdocs_theme_name_scripts');
    }

    public function create_plugin_instructions_page()
    {
        // Add the menu item and page
        // define parameters
        $page_title = 'Instructions';    // title of the page when icon is clicked
        $menu_title = 'Instructions';    // next to the icon
        $capability = 'manage_options';
        $menu_slug = '22nds_manual';
        $callback = array( $this, 'plugin_instructions_page_content' );
        $icon = 'dashicons-welcome-learn-more';  // icon displayed in the menu
        $position = 2;  // on the top of menu

        // reference: https://developer.wordpress.org/reference/functions/add_menu_page/
        add_menu_page($page_title, $menu_title, $capability, $menu_slug, $callback, $icon, $position);
    }

    public function plugin_instructions_page_content()
    {
        // include content of page
        include( 'page.php' );
    }
}

new WP_Manual();
