<?php

use PraktineApp\DB;
use PraktineApp\Tasks;

if(isset($_POST['send'])) {
    $connection = DB::connect();
    $task = new Tasks($connection);
    $task->sukurti($_POST);
}

require "view/pages/control.view.php";