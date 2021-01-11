<?php
/* Production */
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_DISPLAY', false );
define( 'SCRIPT_DEBUG', false );

ini_set( 'display_errors', 0 );

define( 'AUTOMATIC_UPDATER_DISABLED', true );
// Disable plugin and theme updates and installation from the admin
define( 'DISALLOW_FILE_MODS', true );
// Disable the plugin and theme file editor in the admin
define( 'DISALLOW_FILE_EDIT', true );

define( 'WP_POST_REVISIONS', 3 );
