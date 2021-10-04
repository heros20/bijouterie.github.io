

<?php
function wpdocs_register_my_custom_contact_page(){
    add_menu_page( 
        __( 'Contact', 'textdomain' ),
        'Message reçu',
        'manage_options',
        'custompage_contact',
        'my_custom_menu_page_contact',
        'dashicons-phone',
        3
    ); 
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_contact_page' );
function my_custom_menu_page_contact(){ 
    $adminUrl = admin_url().'admin.php?page=custompage_contact';
    global $wpdb;
    $table = $wpdb->prefix.'contact';
    $sdl =  "SELECT * FROM $table ORDER BY created_at DESC";
    $contacts = $wpdb->get_results($sdl, ARRAY_A);
    ?>
    <div class="wrap contact-wrap">
        <h1 class="wp-heading-inline">Contact</h1>
         <table class="wp-list-table widefat fixed striped table-view-list posts">
                <tr>
                    <th>id</th>
                    <th>email</th>
                    <th>sujet</th>
                    <th>message</th>
                    <th>date</th>
                    <th>Action</th>
                </tr>
                <?php foreach ( $contacts as $contact ) { ?>
                    <tr>
                        <td><?= $contact['id'] ?></td>
                        <td><?= $contact['email'] ?></td>
                        <td><?= $contact['sujet'] ?></td>
                        <td><?= $contact['message'] ?></td>
                        <td><?= date('d/m/Y à H:i',strtotime($contact['created_at'])) ?></td>
                        <td><a href="<?= $adminUrl ?>&id=<?= $contact['id'] ?>" onclick="return confirm('Cela va supprimer le message, confirmer?')">Supprimer</a></td>
                    </tr>
                    <?php } ?>
            </table>
    </div>
<?php } 
    if(!empty($_GET['id'])){
        $id = $_GET['id'];
        global $wpdb;
        $table = $wpdb->prefix.'contact';
        $sdl =  "SELECT * FROM $table WHERE id = $id ";
        $message = $wpdb->get_results($sdl, ARRAY_A);

        $wpdb->delete( $table, array( 'id' => $id ) );
    }