<?php

use PraktineApp\Tasks;
use PraktineApp\DB;
use PraktineApp\Request;
$connection=DB::connect();
$tasks=new Tasks($connection); 
$id = intval(basename(Request::uri()));

require "view/pages/info.view.php";