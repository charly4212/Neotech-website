<?php

$request = $_SERVER['RESQUEST_URI'];

require_once($_SERVER['DOCUMENT_ROOT'] . "/MyWebsite/templates/FR/header.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/MyWebsite/templates/FR/nav.php");

switch ($request){
    case '':
    case '/':
        require $SERVER['DOCUMENT_ROOT'] . '/pages/FR/accueil.php';
}
require_once($_SERVER['DOCUMENT_ROOT'] . "/MyWebsite/templates/FR/footer.php");
?>