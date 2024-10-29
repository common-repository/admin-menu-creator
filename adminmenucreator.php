<?php
    /**
    * Plugin Name:  Admin Menu Creator
    * Plugin URI: Pixeltoweb.COM
    * Description: This Plugin is used to create Wordpress Admin Menu and Submenu with Default Content.
    * Version: 1.0.0
    * Author: Pixeltoweb
    * Author URI: http://www.pixeltoweb.com
    * License: GPL12
    */
?>
<?php
    define( 'AMC_VERSION', '3.3.2' );
    define( 'AMC__MINIMUM_WP_VERSION', '3.7' );
    define( 'AMC__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
    define( 'AMC_DELETE_LIMIT', 100000 );
    
    global $wpdb;
    global $table_admin_menu; //table name variable
    $table_admin_menu    = $wpdb->prefix . "admin_menu_creator"; //table name
    
    register_activation_hook( __FILE__, 'wcamc_admin_menu_install' );
    register_deactivation_hook( __FILE__, 'wcamc_admin_menu_uninstall' );  
    if ( is_admin() || ( defined( 'WP_CLI' ) && WP_CLI ) ) {
        require_once( AMC__PLUGIN_DIR . 'class.function.php' );
        require_once( AMC__PLUGIN_DIR . 'class.common.php' );
        
        add_action( 'init', array( 'AMC_Common', 'init' ) );
        add_action( 'init', array( 'AMC_Function', 'init' ) );
    }
?>
