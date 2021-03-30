<?php 

$router->define([
    '/' => 'controllers/home.php',
    '/page' => 'controllers/page.php',
    '/search' => 'controllers/search.php',
    '404' => 'controllers/404.php',
    '/info' => 'controllers/info.php',
    '/control' => 'controllers/control.php',
    '/logout' => 'controllers/logout.php'
]);