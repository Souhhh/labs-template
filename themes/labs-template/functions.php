<?php

define('INCLUDE_DIR', get_template_directory() . "/includes"); 

require_once(INCLUDE_DIR . '/enqueue-script.php');

require_once(INCLUDE_DIR . '/menu.php');

require_once(INCLUDE_DIR . '/theme-setup.php');

require_once(INCLUDE_DIR . '/customizer-home.php');

require_once(INCLUDE_DIR . '/customizer-services.php');

require_once(INCLUDE_DIR . '/customizer-blog.php');

require_once(INCLUDE_DIR . '/customizer-contact.php');

require_once(INCLUDE_DIR . '/sidebars.php');


