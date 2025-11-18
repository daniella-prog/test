<?php
require_once __DIR__ . '/../src/Controller/HomeController.php';

use App\Controller\HomeController;

$config = require __DIR__ . '/../config/config.php';

$controller = new HomeController($config);

echo $controller->index();
