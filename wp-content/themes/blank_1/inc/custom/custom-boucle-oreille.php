<?php
/**
 * Register a custom post type called "boucle-oreille".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_boucle_oreille_init() {
    $labels = array(
        'name'                  => _x( 'boucle-d\'oreilles', 'Post type general name', 'blank_1' ),
        'singular_name'         => _x( 'boucle-d\'oreille', 'Post type singular name', 'blank_1' ),
        'menu_name'             => _x( 'boucle-d\'oreilles', 'Admin Menu text', 'blank_1' ),
        'name_admin_bar'        => _x( 'boucle-d\'oreilles', 'Add New on Toolbar', 'blank_1' ),
        'add_new'               => __( 'Ajouter un nouveau boucle-d\'oreille', 'blank_1' ),
        'add_new_item'          => __( 'Ajouter un nouveau boucle-d\'oreille', 'blank_1' ),
        'new_item'              => __( 'Nouveau boucle-d\'oreille', 'blank_1' ),
        'edit_item'             => __( 'Modifier un boucle-d\'oreille', 'blank_1' ),
        'view_item'             => __( 'Voir le boucle-d\'oreille', 'blank_1' ),
        'all_items'             => __( 'Tous les boucle-d\'oreilles', 'blank_1' ),
        'search_items'          => __( 'Rechercher des boucle-d\'oreilles', 'blank_1' ),
        'parent_item_colon'     => __( 'Parent du boucle-d\'oreilles:', 'blank_1' ),
        'not_found'             => __( 'Aucun boucle-d\'oreilles trouvé.', 'blank_1' ),
        'not_found_in_trash'    => __( 'Aucun boucle-d\'oreille trouvée dans la corbeille.', 'blank_1' ),
        'featured_image'        => _x( 'Image de couverture du boucle-d\'oreille', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'blank_1' ),
        'set_featured_image'    => _x( 'Définir le boucle-d\'oreille à la une', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'blank_1' ),
        'remove_featured_image' => _x( 'Supprimer le boucle-d\'oreille à la une', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'blank_1' ),
        'use_featured_image'    => _x( 'Utiliser comme boucle-d\'oreille à la une', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'blank_1' ),
        'archives'              => _x( 'boucle-d\'oreille archivée', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'blank_1' ),
        'insert_into_item'      => _x( 'Inserer dans boucle-d\'oreille', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'blank_1' ),
        'uploaded_to_this_item' => _x( 'Télécharger une image pour boucle-d\'oreille', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'blank_1' ),
        'filter_items_list'     => _x( 'liste des boucle-d\'oreille filtré', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'blank_1' ),
        'items_list_navigation' => _x( 'Navigation dans la liste boucle-d\'oreille ', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'blank_1' ),
        'items_list'            => _x( 'Liste boucle-d\'oreille ', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'blank_1' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'boucle-d\'oreille' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'supports'           => array( 'title','thumbnail','excerpt' ),
        'menu_icon'          => 'dashicons-insert'
    );
 
    register_post_type( 'boucle_oreille', $args );
}
 
add_action( 'init', 'wpdocs_codex_boucle_oreille_init' );