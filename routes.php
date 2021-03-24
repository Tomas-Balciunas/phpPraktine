<?php 

$router->define([
    '/' => 'controllers/home.php',
    '/page' => 'controllers/page.php',
    '404' => 'controllers/404.php',
    '/info' => 'controllers/info.php'
]);