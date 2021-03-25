<?php

use PraktineApp\DB;
use PraktineApp\Tasks;
use PraktineApp\Validation;

if(isset($_POST['send'])) {
    $connection = DB::connect();
    $vali = Validation::validation($_POST);

    if (empty(implode("", $vali))) {
        $task = new Tasks($connection);
        $task->sukurti($_POST);
    } else {
        foreach ($vali as $err) {
            echo '<p>' . $err . '</p>';
        }
    }

    
}

if(isset($_POST['del'])) {
    $connection = DB::connect();
    $vali2 = Validation::validation2($_POST);

    if (empty(implode("", $vali2))) {
        $task2 = new Tasks($connection);
        $task2->sukurtidel($_POST);
    } else {
        foreach ($vali2 as $err) {
            echo '<p>' . $err . '</p>';
        }
    }
    
}

require "view/pages/control.view.php";