<?php 

/*
Plugin Name: JB Custom Post Type
Plugin URI:
Description: Plugin para Custom Post
Version: 1.0
Author: jbortweb
Author URI:
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

function crear_post_type_recetas(){
    register_post_type('recetas',
        array(
            'labels'=> array(
                'name'=> __('Recetas'),
                'singular_name'=> __('Recetas')
            ),
            'public'=> true,
            'has_archive'=> true,
        )
    );
}

add_action('init', 'crear_post_type_recetas');