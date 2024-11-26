<?php
// routes.php

require_once 'app/controllers/publiserController.php';
require_once 'app/controllers/UsersController.php';
require_once 'app/controllers/BooksController.php';

$controller = new BooksController();
$controller = new PubliserController();
$controller = new UsersController();

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
  
} elseif ($url == '/books/index' || $url == '/') {
    $controller->index();
} elseif ($url == '/books/create' && $requestMethod == 'GET') {
    $controller->create();
} elseif ($url == '/books/store' && $requestMethod == 'POST') {
    $controller->store();
} elseif (preg_match('/\/books\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $bookId = $matches[1];
    $controller->edit($bookId);
} elseif (preg_match('/\/books\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $bookId = $matches[1];
    $controller->update($bookId, $_POST);
} elseif (preg_match('/\/books\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $bookId = $matches[1];
    $controller->delete($bookId);
}elseif ($url == '/users/index' || $url == '/') {
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