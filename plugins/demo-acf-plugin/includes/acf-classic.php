<?php

function my_disable_gutenberg( $current_status, $post_type ) {

    // Disabled post types
    $disabled_post_types = array( 'post', 'movie' );

    // Change $can_edit to false for any post types in the disabled post types array
    if ( in_array( $post_type, $disabled_post_types, true ) ) {
        $current_status = false;
    }

    return $current_status;
}
add_filter( 'use_block_editor_for_post_type', 'my_disable_gutenberg', 10, 2 );
