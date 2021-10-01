<?php

$request = $_SERVER['REQUEST_URI'];

require_once($_SERVER['DOCUMENT_ROOT'] . "/MyWebsite/templates/FR/header.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/MyWebsite/templates/FR/nav.php");

switch ($request){
    case '/':
    case '':
    case '/MyWebsite/':
        require __DIR__ . '/pages/FR/accueil.php';
        break;
        require __DIR__ . '/pages/FR/accueil.php';
        break;
    case '/Contact':
        require __DIR__ . '/pages/FR/contact.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/pages/FR/errors/404.php';
        break;
}

require_once($_SERVER['DOCUMENT_ROOT'] . "/MyWebsite/templates/FR/footer.php");
?>