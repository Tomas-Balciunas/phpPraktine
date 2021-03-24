<?php 

error_reporting(E_ALL);
ini_set('display_errors', '1');
require "vendor/autoload.php";

use PraktineApp\Request;
use PraktineApp\Router;

require Router::load('routes.php')->direct(Request::uri());