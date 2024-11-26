<?php
// routes.php

require_once 'app/controllers/UsersController.php';

$controller = new UsersController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/users/index' || $url == '/') {
    $controller->index();
} elseif ($url == '/users/create' && $requestMethod == 'GET') {
    $controller->create();
} elseif ($url == '/users/store' && $requestMethod == 'POST') {
    $controller->store();
} elseif (preg_match('/\/users\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->edit($userId);
} elseif (preg_match('/\/users\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $controller->update($userId, $_POST);
} elseif (preg_match('/\/users\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->delete($userId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}