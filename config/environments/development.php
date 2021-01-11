<?php
/* Development */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'SCRIPT_DEBUG', true );

define( 'SAVEQUERIES', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );

ini_set('display_errors', '1');

define( 'AUTOMATIC_UPDATER_DISABLED', false );
// Enable plugin and theme updates and installation from the admin
define('DISALLOW_FILE_MODS', false);
// Disable the plugin and theme file editor in the admin
define( 'DISALLOW_FILE_EDIT', true );

define( 'WP_POST_REVISIONS', false );
define( 'AUTOSAVE_INTERVAL', 900 );
define( 'EMPTY_TRASH_DAYS', 15 );
