<?php

$request = $_SERVER['REQUEST_URI'];

require_once($_SERVER['DOCUMENT_ROOT'] . "/MyWebsite/templates/FR/header.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/MyWebsite/templates/FR/nav.php");

echo $request;

switch ($request){
    case '/MyWebsite/':
        require __DIR__ . '/pages/FR/accueil.php';
        break;
    case '':
        require __DIR__ . '/pages/FR/accueil.php';
        break;
    case '/':
        require __DIR__ . '/pages/FR/accueil.php';
        break;
    case '/MyWebsite/Contact/':
        require __DIR__ . '/pages/FR/contact.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/404.php'; //a modifier
        break;
}

require_once($_SERVER['DOCUMENT_ROOT'] . "/MyWebsite/templates/FR/footer.php");
?>