<?php

add_action( 'init', 'oportunidades' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function oportunidades() {
	$labels = array(
		'name'               => 'Oportunidades',
		'singular_name'      => 'Oportunidades',
		'menu_name'          => 'Oportunidades',
		'name_admin_bar'     => 'Oportunidades',
		'add_new'            => 'Nova oportunidade',
		'add_new_item'       => 'Adicionar oportunidade',
		'new_item'           => 'Nova',
		'edit_item'          => 'Editar',
		'view_item'          => 'Visualizar',
		'all_items'          => 'Todas',
		'search_items'       => 'Procurar',
		'not_found'          => 'Não localizado',
		'not_found_in_trash' => 'Nada na lixeira'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
        'menu_icon'          => 'dashicons-portfolio',
		'supports'           => array( 'title', 'editor', 'excerpt' )
	);

	register_post_type( 'oportunidades', $args );
    flush_rewrite_rules();
}