<?php session_start();

use PraktineApp\DB;
use PraktineApp\Tasks;

if (isset($_POST['login'])) {
    $connection = DB::connect();
    $task = new Tasks($connection);
    $task->prelogin($_POST);
    
}

if (isset($_POST['register'])) {
    $connection = DB::connect();
    $task = new Tasks($connection);
    $task->register1($_POST);
}

require "view/pages/home.view.php";




