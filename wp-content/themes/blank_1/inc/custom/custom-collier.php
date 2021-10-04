<?php
/**
 * Register a custom post type called "collier".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_collier_init() {
    $labels = array(
        'name'                  => _x( 'colliers', 'Post type general name', 'blank_1' ),
        'singular_name'         => _x( 'collier', 'Post type singular name', 'blank_1' ),
        'menu_name'             => _x( 'colliers', 'Admin Menu text', 'blank_1' ),
        'name_admin_bar'        => _x( 'colliers', 'Add New on Toolbar', 'blank_1' ),
        'add_new'               => __( 'Ajouter un nouveau collier', 'blank_1' ),
        'add_new_item'          => __( 'Ajouter un nouveau collier', 'blank_1' ),
        'new_item'              => __( 'Nouveau collier', 'blank_1' ),
        'edit_item'             => __( 'Modifier un collier', 'blank_1' ),
        'view_item'             => __( 'Voir le collier', 'blank_1' ),
        'all_items'             => __( 'Tous les colliers', 'blank_1' ),
        'search_items'          => __( 'Rechercher des colliers', 'blank_1' ),
        'parent_item_colon'     => __( 'Parent du colliers:', 'blank_1' ),
        'not_found'             => __( 'Aucun colliers trouvé.', 'blank_1' ),
        'not_found_in_trash'    => __( 'Aucun collier trouvée dans la corbeille.', 'blank_1' ),
        'featured_image'        => _x( 'Image de couverture du collier', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'blank_1' ),
        'set_featured_image'    => _x( 'Définir le collier à la une', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'blank_1' ),
        'remove_featured_image' => _x( 'Supprimer le collier à la une', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'blank_1' ),
        'use_featured_image'    => _x( 'Utiliser comme collier à la une', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'blank_1' ),
        'archives'              => _x( 'collier archivée', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'blank_1' ),
        'insert_into_item'      => _x( 'Inserer dans collier', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'blank_1' ),
        'uploaded_to_this_item' => _x( 'Télécharger une image pour collier', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'blank_1' ),
        'filter_items_list'     => _x( 'liste des collier filtré', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'blank_1' ),
        'items_list_navigation' => _x( 'Navigation dans la liste collier ', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'blank_1' ),
        'items_list'            => _x( 'Liste collier ', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'blank_1' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'collier' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'supports'           => array( 'title','thumbnail','excerpt' ),
        'menu_icon'          => 'dashicons-insert'
    );
 
    register_post_type( 'collier', $args );
}
 
add_action( 'init', 'wpdocs_codex_collier_init' );