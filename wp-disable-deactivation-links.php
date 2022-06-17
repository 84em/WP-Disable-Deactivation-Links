<?php

// drop this file in your wp-content/mu-plugins/ folder to hide all Deactivate links in the plugins screen
add_filter( 'plugin_action_links', function ( $actions, $plugin_file ) {
    unset( $actions['deactivate'] );
    return $actions;
}, 10, 2 );
