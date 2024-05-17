<?php

if (defined('IRESCOUK_URL')  == false)     define('IRESCOUK_URL', get_template_directory());

if (defined('IRESCOUK_URI')  == false)     define('IRESCOUK_URI', get_template_directory_uri());


// Setup Theme

require(IRESCOUK_URL . '/extends/theme_setup.php');

// Add js, css, live customize

require(IRESCOUK_URL . '/extends/include_assets.php');

