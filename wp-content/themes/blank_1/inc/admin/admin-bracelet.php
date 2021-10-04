

<?php
function wpdocs_register_my_custom_bracelet_page(){
    add_menu_page( 
        __( 'bracelet', 'textdomain' ),
        'Commande <br>bracelet reçu',
        'manage_options',
        'custompage_bracelet',
        'my_custom_menu_page_bracelet',
        'dashicons-image-filter',
        2
    ); 
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_bracelet_page' );
function my_custom_menu_page_bracelet(){ 
    $adminUrl = admin_url().'admin.php?page=custompage_bracelet';
    global $wpdb;
    $table = $wpdb->prefix.'bracelet';
    $sdl =  "SELECT * FROM $table ORDER BY created_at DESC";
    $bracelets = $wpdb->get_results($sdl, ARRAY_A);
    ?>
    <div class="wrap contact-wrap">
        <h1 class="wp-heading-inline">bracelet</h1>
         <table class="wp-list-table widefat fixed striped table-view-list posts">
                <tr>
                    <th>id</th>
                    <th>email</th>
                    <th>message</th>
                    <th>pierre</th>
                    <th>bracelet</th>
                    <th>date</th>
                    <th>Action</th>
                </tr>
                <?php foreach ( $bracelets as $bracelet ) { ?>
                    <tr>
                        <td><?= $bracelet['id'] ?></td>
                        <td><?= $bracelet['email'] ?></td>
                        <td><?= $bracelet['message'] ?></td>
                        <td>
                            <?= 
                                $bracelet['pierre'];
                            ?>
                        </td>
                        <td><?= $bracelet['bracelet'] ?></td>
                        <td><?= date('d/m/Y à H:i',strtotime($bracelet['created_at'])) ?></td>
                        <td><a href="<?= $adminUrl ?>&id=<?= $bracelet['id'] ?>" onclick="return confirm('Cela va supprimer le message, confirmer?')">Supprimer</a></td>
                    </tr>
                    <?php } ?>
            </table>
    </div>
<?php } 
    if(!empty($_GET['id'])){
        $id = $_GET['id'];
        global $wpdb;
        $table = $wpdb->prefix.'bracelet';
        $sdl =  "SELECT * FROM $table WHERE id = $id ";
        $message = $wpdb->get_results($sdl, ARRAY_A);

        $wpdb->delete( $table, array( 'id' => $id ) );
    }