<?php

define("THEME_PATH", get_template_directory());
define("IMAGES_PATH", THEME_PATH.'/assets/images/');

// LOADING CORE FILES
foreach ($folders as $folder) {
    foreach ( glob( THEME_PATH . "/inc/*.php" ) as $file ) {
        include_once $file;
    }
}
