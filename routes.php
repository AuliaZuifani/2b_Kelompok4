<?php
// routes.php

require_once 'app/controllers/LoansController.php';


$controller = new LoanController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/loans/index' || $url == '/') {
    $controller->index();
} elseif ($url == '/loans/create' && $requestMethod == 'GET') {
    $controller->create();
} elseif ($url == '/loans/store' && $requestMethod == 'POST') {
    $controller->store();
} elseif (preg_match('/\/loans\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->edit($loanId);
} elseif (preg_match('/\/loans\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $controller->update($loanId, $_POST);
} elseif (preg_match('/\/loans\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->delete($loanId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}