<?php

function hide_update_noticee()
{
    remove_all_actions( 'admin_notices' );   
}
add_action( 'admin_head', 'hide_update_noticee', 1 );


?>
