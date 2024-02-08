<?php
/*
    Plugin Name: FabyOC - Post Types
    Plugin URI: https://twitter.com/MysticMefisto
    Description: Añade Post Types al sitio FabyOC
    Version: 1.0.0
    Author: Mefisto Contreras
    Author URI: https://twitter.com/MysticMefisto
    Text Domain: FabyOC
*/

if(!defined('ABSPATH')) die();

// Registrar Custom Post Type
function fabyoc_clases_post_type() {

	$labels = array(
		'name'                  => _x( 'Clases', 'Post Type General Name', 'fabyoc' ),
		'singular_name'         => _x( 'Clase', 'Post Type Singular Name', 'fabyoc' ),
		'menu_name'             => __( 'Clases', 'fabyoc' ),
		'name_admin_bar'        => __( 'Clase', 'fabyoc' ),
		'archives'              => __( 'Archivo', 'fabyoc' ),
		'attributes'            => __( 'Atributos', 'fabyoc' ),
		'parent_item_colon'     => __( 'Clase Padre', 'fabyoc' ),
		'all_items'             => __( 'Todas Las Clases', 'fabyoc' ),
		'add_new_item'          => __( 'Agregar Clase', 'fabyoc' ),
		'add_new'               => __( 'Agregar Clase', 'fabyoc' ),
		'new_item'              => __( 'Nueva Clase', 'fabyoc' ),
		'edit_item'             => __( 'Editar Clase', 'fabyoc' ),
		'update_item'           => __( 'Actualizar Clase', 'fabyoc' ),
		'view_item'             => __( 'Ver Clase', 'fabyoc' ),
		'view_items'            => __( 'Ver Clases', 'fabyoc' ),
		'search_items'          => __( 'Buscar Clase', 'fabyoc' ),
		'not_found'             => __( 'No Encontrado', 'fabyoc' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'fabyoc' ),
		'featured_image'        => __( 'Imagen Destacada', 'fabyoc' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'fabyoc' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'fabyoc' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'fabyoc' ),
		'insert_into_item'      => __( 'Insertar en Clase', 'fabyoc' ),
		'uploaded_to_this_item' => __( 'Agregado en Clase', 'fabyoc' ),
		'items_list'            => __( 'Lista de Clases', 'fabyoc' ),
		'items_list_navigation' => __( 'Navegación de Clases', 'fabyoc' ),
		'filter_items_list'     => __( 'Filtrar Clases', 'fabyoc' ),
	);
	$args = array(
		'label'                 => __( 'Clase', 'fabyoc' ),
		'description'           => __( 'Clases para el Sitio Web', 'fabyoc' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => true, // true = posts , false = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'fabyoc_clases', $args );

}
add_action( 'init', 'fabyoc_clases_post_type', 0 );