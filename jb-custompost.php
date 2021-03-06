<?php 

/*
Plugin Name: JB Custom Post Type
Plugin URI:
Description: Plugin para Custom Post
Version: 2.1
Author: jbortweb
Author URI:
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/


// Register Custom Post Type
function custom_post_type() {
 
    $labels = array(
        'name'                  => _x( 'Perros', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Perro', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Perros', 'text_domain' ),
        'name_admin_bar'        => __( 'Perros', 'text_domain' ),
        'archives'              => __( 'Perros Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'Todos los Perros', 'text_domain' ),
        'add_new_item'          => __( 'Agregar nuevo Perro', 'text_domain' ),
        'add_new'               => __( 'Agregar nuevo', 'text_domain' ),
        'new_item'              => __( 'Nuevo Perro', 'text_domain' ),
        'edit_item'             => __( 'Editar Perro', 'text_domain' ),
        'update_item'           => __( 'Actualizar Perro', 'text_domain' ),
        'view_item'             => __( 'Ver Perro', 'text_domain' ),
        'view_items'            => __( 'Ver Perros', 'text_domain' ),
        'search_items'          => __( 'Buscar Perro', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'perros', 'text_domain' ),
        'description'           => __( 'Perros Descripcion', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
        //'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,     
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'perros', $args );
 
}
add_action( 'init', 'custom_post_type', 0 );

function taxonomia_tama??o_perro(){
    register_taxonomy(
        'tama??o perro',
        'perros',
        array(
            'label' => __('Tama??o Perro'),
            'rewrite' => array('slug' => 'tama??o-perro'),
            'hierarchical' => false,
        )
    );
}

add_action('init', 'taxonomia_tama??o_perro');