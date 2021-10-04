

<?php
function wpdocs_register_my_custom_boucle_oreille_page(){
    add_menu_page( 
        __( 'boucle_oreille', 'textdomain' ),
        'Commande boucle_oreille reçu',
        'manage_options',
        'custompage_boucle_oreille',
        'my_custom_menu_page_boucle_oreille',
        'dashicons-image-filter',
        2
    ); 
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_boucle_oreille_page' );
function my_custom_menu_page_boucle_oreille(){ 
    $adminUrl = admin_url().'admin.php?page=custompage_boucle_oreille';
    global $wpdb;
    $table = $wpdb->prefix.'boucle_oreille';
    $sdl =  "SELECT * FROM $table ORDER BY created_at DESC";
    $boucle_oreilles = $wpdb->get_results($sdl, ARRAY_A);
    ?>
    <div class="wrap contact-wrap">
        <h1 class="wp-heading-inline">boucle_oreille</h1>
         <table class="wp-list-table widefat fixed striped table-view-list posts">
                <tr>
                    <th>id</th>
                    <th>email</th>
                    <th>message</th>
                    <th>pierre</th>
                    <th>boucle_oreille</th>
                    <th>date</th>
                    <th>Action</th>
                </tr>
                <?php foreach ( $boucle_oreilles as $boucle_oreille ) { ?>
                    <tr>
                        <td><?= $boucle_oreille['id'] ?></td>
                        <td><?= $boucle_oreille['email'] ?></td>
                        <td><?= $boucle_oreille['message'] ?></td>
                        <td>
                            <?= 
                                $boucle_oreille['pierre'];
                            ?>
                        </td>
                        <td><?= $boucle_oreille['boucle_oreille'] ?></td>
                        <td><?= date('d/m/Y à H:i',strtotime($boucle_oreille['created_at'])) ?></td>
                        <td><a href="<?= $adminUrl ?>&id=<?= $boucle_oreille['id'] ?>" onclick="return confirm('Cela va supprimer le message, confirmer?')">Supprimer</a></td>
                    </tr>
                    <?php } ?>
            </table>
    </div>
<?php } 
    if(!empty($_GET['id'])){
        $id = $_GET['id'];
        global $wpdb;
        $table = $wpdb->prefix.'boucle_oreille';
        $sdl =  "SELECT * FROM $table WHERE id = $id ";
        $message = $wpdb->get_results($sdl, ARRAY_A);

        $wpdb->delete( $table, array( 'id' => $id ) );
    }