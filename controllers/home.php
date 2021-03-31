<?php session_start();

use PraktineApp\DB;
use PraktineApp\Tasks;
use PraktineApp\Validation;

if (isset($_POST['login'])) {
    if (!empty($_POST['email']) || !empty($_POST['password)'])) {
        $connection = DB::connect();
        $task = new Tasks($connection);
        $task->prelogin($_POST);

    } else {
            echo "<div style='position:absolute; bottom:5em; left:50%;'><div style='position:relative; left:-50%; color:red'>Abu laukeliai turi būti užpildyti!</div></div>";
    }
}

if (isset($_POST['register'])) {
    $connection = DB::connect();
    $vali = Validation::reg($_POST);
    if (empty(implode("", $vali))) {
        $task = new Tasks($connection);
        $task->register1($_POST);
    } else {
        foreach ($vali as $err) {
            echo '<p>' . $err . '</p>';
        }
    }
}

require "view/pages/home.view.php";




