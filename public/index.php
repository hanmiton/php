<?php
require_once __DIR__ . '/../vendor/autoload.php';

$request = Request::capture();
$controller = new \PlatziPHP\Http\Controllers\HomeController();

echo $controller->index();