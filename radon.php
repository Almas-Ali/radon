<?php

require 'includes/rn-settings.php';

function get_args(int $arg_number): string
{
    $args = $_SERVER['argv'];
    return $args[$arg_number];
}

function __help(): void
{
    echo "Usage: php random.php [options] [arguments]\n";
    echo "Options:\n";
    echo "  serve, -s, --serve\t\tStarting the development server\n";
    echo "  -h, --help\t\t\tShow this help message and exit\n";
    echo "  -v, --version\t\t\tShow program's version number and exit\n";
}

if (get_args(1) == 'serve' || get_args(1) == '-s' || get_args(1) == '--serve') {
    // Start the server
    echo 'Server started at ' . SITE_URL[0] . "\n";
    try {
        exec('php -S ' . SITE_URL[0]);
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }

    echo 'Server stopped.';
    exit(0);

} else if (get_args(1) == '-h' || get_args(1) == '--help') {
    // Show help
    __help(get_args(1));
    exit(0);

} else if (get_args(1) == '-v' || get_args(1) == '--version') {
    // Show version
    echo 'Radon ' . VERSION;
    exit(0);

} else {
    // Show help
    __help();
    exit(0);
}
