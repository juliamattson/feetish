<?php

/**
 * Plugin Name: Butikerna - PLUGIN
 * Description: Lista dina butiker med hjälp av Custom Post Type
 * 
 * Author: Grupp Feetish
 */


if (!defined('ABSPATH')) {
    exit;
}

function create_custom_post_type () {
    $labels = array(
        'name' => 'Butikerna',
        'singular_name' => 'Butik',
        'add_new' => 'Lägg till en butik',
        'all_items' => 'Alla butiker',
        'add_new_item' => 'Lägg till en butik',
        'edit_item' => 'Ändra butik',
        'new_item' => 'Ny butik',
        'view_item' => 'Se butik',
        'search_item' => 'Sök butik',
        'not_found' => 'Ingen butik hittades'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'support' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        'taxonomies' => array(
            'category',
            'post_tag'
        ),
        'menu_position' => 8,
        'exclude_from_search' => false
    );
    register_post_type('butikerna', $args);
}

add_action('init','create_custom_post_type');