<?php
/**
 * Register a custom post type called "coordonnee".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_coordonnée_init() {
    $labels = array(
        'name'                  => _x( 'coordonnée', 'Post type general name', 'blank_1' ),
        'singular_name'         => _x( 'coordonnée', 'Post type singular name', 'blank_1' ),
        'menu_name'             => _x( 'coordonnée', 'Admin coordonnée text', 'blank_1' ),
        'name_admin_bar'        => _x( 'coordonnée', 'Add New on Toolbar', 'blank_1' ),
        'add_new'               => __( 'Ajouter un contenu', 'blank_1' ),
        'add_new_item'          => __('Ajouter un nouveau contenu coordonnée', 'blank_1' ),
        'new_item'              => __('nouveau contenu coordonnée', 'blank_1' ),
        'edit_item'             => __( 'Modifier un contenu de coordonnée', 'blank_1' ),
        'view_item'             => __( 'Voir le contenu', 'blank_1' ),
        'all_items'             => __( 'Toutes les contenus coordonnées', 'blank_1' ),
        'search_items'          => __( 'Rechercher des contenus de coordonnées', 'blank_1' ),
        'parent_item_colon'     => __( 'Parent des coordonnées:', 'blank_1' ),
        'not_found'             => __( 'Aucun coordonnées trouvé.', 'blank_1' ),
        'not_found_in_trash'    => __( 'Aucun coordonnée trouvée dans la corbeille.', 'blank_1' ),
        'featured_image'        => _x( 'Image du coordonnée', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'blank_1' ),
        'set_featured_image'    => _x( 'Définir l\'image pour le contenu de coordonnée', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'blank_1' ),
        'remove_featured_image' => _x( 'Supprimer l\'image du contenu de coordonnée', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'blank_1' ),
        'use_featured_image'    => _x( 'Utiliser comme image pour le contenu de coordonnée', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'blank_1' ),
        'archives'              => _x( 'contenu de coordonnée archivée', 'The post type archive label used in nav coordonnées. Default “Post Archives”. Added in 4.4', 'blank_1' ),
        'insert_into_item'      => _x( 'Inserer dans coordonnée', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'blank_1' ),
        'uploaded_to_this_item' => _x( 'Télécharger une image pour coordonnée', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'blank_1' ),
        'filter_items_list'     => _x( 'liste des coordonnée filtré', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'blank_1' ),
        'items_list_navigation' => _x( 'Navigation dans la liste coordonnées ', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'blank_1' ),
        'items_list'            => _x( 'Liste coordonnées ', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'blank_1' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'coordonnée' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'supports'           => array( 'title', 'editor' ),
        'menu_icon'          => 'dashicons-email-alt'
    );
 
    register_post_type( 'coordonnee', $args );
}
 
add_action( 'init', 'wpdocs_codex_coordonnée_init' );