<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
        require __DIR__ . '/src/php/home.php';
        break;
    case '':
        require __DIR__ . '/src/php/home.php';
        break;
    case '/contact/':
        require __DIR__ . '/src/php/contact.php';
        break;
    case '/contact':
        require __DIR__ . '/src/php/contact.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/src/php/404.php';
        break;
}