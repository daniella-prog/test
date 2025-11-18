<?php

require_once __DIR__ . '/../src/Controller/HomeController.php';

use App\Controller\HomeController;

$config = ['app_name' => 'Test App'];

$controller = new HomeController($config);

if ($controller->index() !== 'Welcome to Test App!') {
    echo "Test failed\n";
    exit(1);
}

echo "All tests passed\n";
