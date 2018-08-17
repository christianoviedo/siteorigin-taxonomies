<?php
/*
Widget Name: List Taxonomy
Description: Shows a list of categories from taxonomy
Author: Christian Oviedo
Author URI: http://example.com
Widget URI: http://example.com/hello-world-widget-docs,
Video URI: http://example.com/hello-world-widget-video
*/

class List_Taxonomy_Widget extends SiteOrigin_Widget {

	function __construct() {
	    //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

	    //Call the parent constructor with the required arguments.
	    parent::__construct(
	        // The unique id for your widget.
	        'list-taxonomy-widget',

	        // The name of the widget for display purposes.
	        __('Lista de Taxonomías', 'list-taxonomy-widget-text-domain'),

	        // The $widget_options array, which is passed through to WP_Widget.
	        // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
	        array(
	            'description' => __('Muestra la lista de categorías en una taxonomía', 'list-taxonomy-widget-text-domain'),
	            'help'        => 'http://example.com/hello-world-widget-docs',
	        ),

	        //The $control_options array, which is passed through to WP_Widget
	        array(
	        ),

	        //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
	        array(
	            'title' => array(
	                'type' => 'text',
	                'label' => __('Título', 'siteorigin-widgets'),
	                'default' => ''
	            ),
	            'taxonomy_slug' => array(
	                'type' => 'text',
	                'label' => __('Slug de la taxonomía', 'siteorigin-widgets'),
	                'default' => ''
	            ),
	        ),

	        //The $base_folder path string.
	        plugin_dir_path(__FILE__)
	    );
	}

    function get_template_name($instance) {
        return 'default';
    }

    function get_template_variables( $instance ) {
	    return array(
	        'title' => ! empty( $instance['title'] ) ? $instance['title'] : '',
	        'taxonomy_slug' => ! empty( $instance['taxonomy_slug'] ) ? $instance['taxonomy_slug'] : '',
	    );
	}

    function get_style_name($instance) {
        return '';
    }
}

siteorigin_widget_register('list-taxonomy-widget', __FILE__, 'List_Taxonomy_Widget');
