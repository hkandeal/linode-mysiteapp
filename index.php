<?php

// Simple Request Router via PHP and Apache/.htaccess
// https://perishablepress.com/request-router-php-apache-htaccess/

$request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : null;

if ($request_uri === '/' || $request_uri === '/linode-mysiteapp/') {

    $route = '/src/php/home.php';

} elseif ($request_uri === '/about' || $request_uri === '/linode-mysiteapp/about') {

    $route = '/src/php/about.php';

} else {

    $route = '/src/php/404.php';

}

require __DIR__ . $route;
