<?php
// routes.php

require_once 'app/controllers/BooksController.php';

$controller = new BooksController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/books/index' || $url == '/') {
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
} else {
    http_response_code(404);
    echo "404 Not Found";
}