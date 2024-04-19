<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
        require __DIR__ . '/src/php/home.php';
        break;
    case '/linode-mysiteapp/':
        require __DIR__ . '/src/php/home.php';
        break;
    case '':
        require __DIR__ . '/src/php/home.php';
        break;
    case '/linode-mysiteapp/about':
        require __DIR__ . '/src/php/home.php';
        break;
    case '/about':
        require __DIR__ . '/src/php/home.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/src/php/404.php';
        break;
}