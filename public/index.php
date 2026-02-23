<?php

require_once "./vendor/autoload.php";

use App\Controllers\UserController;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVICE['REQUEST_METHOD'];

if ($uri === '/users/create' && $method === 'POST') {
	$contoller = new UserController();
	$contoller->create();
}