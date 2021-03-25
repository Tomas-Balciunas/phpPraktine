<?php

use PraktineApp\DB;
use PraktineApp\Tasks;
use PraktineApp\Validation;

if(isset($_POST['send'])) {
    $connection = DB::connect();
    $error = Validation::validation($_POST);

    if (empty(implode("", $error))) {
        $task = new Tasks($connection);
        $task->sukurti($_POST);
    } else {
        foreach ($error as $err) {
            echo '<p>' . $err . '</p>';
        }
    }

    
}

if(isset($_POST['del'])) {
    $connection = DB::connect();
    $task2 = new Tasks($connection);
    $task2->sukurtidel($_POST);
}

require "view/pages/control.view.php";