

<?php
function wpdocs_register_my_custom_collier_page(){
    add_menu_page( 
        __( 'collier', 'textdomain' ),
        'Commande collier reçu',
        'manage_options',
        'custompage_collier',
        'my_custom_menu_page_collier',
        'dashicons-image-filter',
        2
    ); 
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_collier_page' );
function my_custom_menu_page_collier(){ 
    $adminUrl = admin_url().'admin.php?page=custompage_collier';
    global $wpdb;
    $table = $wpdb->prefix.'collier';
    $sdl =  "SELECT * FROM $table ORDER BY created_at DESC";
    $colliers = $wpdb->get_results($sdl, ARRAY_A);
    ?>
    <div class="wrap contact-wrap">
        <h1 class="wp-heading-inline">collier</h1>
         <table class="wp-list-table widefat fixed striped table-view-list posts">
                <tr>
                    <th>id</th>
                    <th>email</th>
                    <th>message</th>
                    <th>pierre</th>
                    <th>collier</th>
                    <th>date</th>
                    <th>Action</th>
                </tr>
                <?php foreach ( $colliers as $collier ) { ?>
                    <tr>
                        <td><?= $collier['id'] ?></td>
                        <td><?= $collier['email'] ?></td>
                        <td><?= $collier['message'] ?></td>
                        <td>
                            <?= 
                                $collier['pierre'];
                            ?>
                        </td>
                        <td><?= $collier['collier'] ?></td>
                        <td><?= date('d/m/Y à H:i',strtotime($collier['created_at'])) ?></td>
                        <td><a href="<?= $adminUrl ?>&id=<?= $collier['id'] ?>" onclick="return confirm('Cela va supprimer le message, confirmer?')">Supprimer</a></td>
                    </tr>
                    <?php } ?>
            </table>
    </div>
<?php } 
    if(!empty($_GET['id'])){
        $id = $_GET['id'];
        global $wpdb;
        $table = $wpdb->prefix.'collier';
        $sdl =  "SELECT * FROM $table WHERE id = $id ";
        $message = $wpdb->get_results($sdl, ARRAY_A);

        $wpdb->delete( $table, array( 'id' => $id ) );
    }