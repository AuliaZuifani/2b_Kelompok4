<?php
// routes.php

require_once 'app/controllers/publiserController.php';

$controller = new PubliserController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/publiser/index' || $url == '/') {
    $controller->index();
} elseif ($url == '/publiser/create' && $requestMethod == 'GET') {
    $controller->create();
} elseif ($url == '/publiser/store' && $requestMethod == 'POST') {
    $controller->store();
} elseif (preg_match('/\/publiser\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->edit($userId);
} elseif (preg_match('/\/publiser\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $controller->update($userId, $_POST);
} elseif (preg_match('/\/publiser\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->delete($userId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}