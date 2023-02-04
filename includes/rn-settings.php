<?php

declare (strict_types = 1);

// This is the main project settings.

// All core files are included from here.
require 'rn-themes.php'; // This is the theme settings.

// Basic project settings.
define('SITE_NAME', 'Radon');
define('SITE_TITLE', 'Radon');
define('SITE_SLOGAN', 'A simple, fast, and secure CMS in PHP.');
define('SITE_DESCRIPTION', 'A simple PHP framework.');
define('VERSION', '0.0.1');
define('SITE_URL', array(
    'localhost:8000',
    'http://localhost:8000',
    'https://localhost:8000/',
));

define('SITE_AUTHOR', 'Md. Almas Ali');
define('SITE_AUTHOR_URL', 'https://almasali.net');
define('SITE_AUTHOR_EMAIL', 'almaspr3@gmail.com');

// This is the database settings.
define('DB_HOST', 'localhost');
define('DB_NAME', 'radon');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_PORT', '3306');

// Default theme settings.
define('THEME', 'rose');
