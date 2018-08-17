<?php
/*
Plugin Name: Site Origin Taxonomy
Description: Taxonomy functions for Site Origin. Requires Site Origin Plugin
Author: Christian Oviedo - Taller Digital
*/

function add_taxonomy_widgets($folders){
    $folders[] = plugin_dir_path( __FILE__ ) . 'widgets/';
    return $folders;
}
add_filter('siteorigin_widgets_widget_folders', 'add_taxonomy_widgets');
