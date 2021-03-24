<?php 
use PraktineApp\Tasks;
use PraktineApp\DB;
$db=DB::connect();
$tasks=new Tasks($db); 

require "view/pages/page.view.php";