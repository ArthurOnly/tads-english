<?php
require 'texts.php';

session_start();
if (!isset($_SESSION['lang'])){
    $_SESSION['lang'] = 'english';
}

require 'produtos.php';
$route = $_SERVER['REQUEST_URI'];

switch ($route) {
    case '/':
        require 'pages/index.php';
        break;
    case '/store':
        require 'pages/store.php';
        break;
    case '/checkout':
        require 'pages/checkout.php';
        break;
    default:
        echo "NOT FOUND";
        break;
}