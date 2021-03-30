<?php

use PraktineApp\DB;
use PraktineApp\Tasks;

require "view/pages/search.view.php";

if(isset($_POST['submit'])) {
    $connection = DB::connect();
    $tasks = new Tasks($connection);
    $tasks->search($_POST);
}

