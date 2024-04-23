<?php


$request = $_SERVER["REQUEST_URI"];
//$parsedURL = parse_url($request, PHP_URL_QUERY);
$url = strtok($request, '?');


error_log(print_r("request:" . $request, true));
error_log(print_r("clean url:" . $url, true));


switch ($url) {
    case '/':
        require __DIR__ . '/public/home.php';
        break;
    // case '':
    //     require __DIR__ . 'home.php';
    //     break;
    case '/contact':
        require __DIR__ . '/public/contact.php';
        break;
    case '/resume':
        require __DIR__ . '/public/resume.php';
        break;
    case '/blog':
        require __DIR__ . '/public/blog.php';
        break;
    // case '/about':
    //     require __DIR__ . '/public/about.php';
    //     break;
    case '/home':
        require __DIR__ . '/public/home.php';
        break;
    case '/sendcontact':
        require __DIR__ . '/src/controller/send_contact.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/public/404.php';
        break;
}

