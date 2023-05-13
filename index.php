<?php
/*
Plugin Name: UniConecta
Plugin URI: http://jhonabril.com/
Description: Plugin personalizado para UniConecta.
Version: 1.0.1
Author: Jhon Abril
Author URI: http://jhonabril.com
License: A "Slug" license name e.g. GPL2
*/


function activate_plugin_crm() {

}

function deactivate_plugin_crm() {

}

//function create_menu_crm() {
//    $parent_slug = plugin_dir_path(__FILE__).'pages/home/index.php';
//    add_menu_page(
//        'UniConecta',
//        'UniConecta',
//        'manage_options',
//        $parent_slug,
//        null,
//        plugin_dir_url(__FILE__).'public/img/icon.svg',
//        '1'
//    );
//
//    add_submenu_page(
//        $parent_slug,
//        'Inicio',
//        'Inicio',
//        'manage_options',
//        $parent_slug,
//        null,
//        '1'
//    );
//}

//function enqueue_plugin_code($hook) {
//    if(str_contains($hook, 'uniconecta')) {
//        wp_enqueue_style('enqueue_plugin_index_css', plugins_url('public/css/index.css',__FILE__));
//    }
//}

//add_action('admin_enqueue_scripts','enqueue_plugin_code');
//add_action('admin_menu','create_menu_crm');

register_activation_hook(__FILE__,'activate_plugin_crm');
register_deactivation_hook(__FILE__,'deactivate_plugin_crm');