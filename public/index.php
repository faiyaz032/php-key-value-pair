<?php

use App\Core;

include_once '../vendor/autoload.php';

$core = new Core;

//Entry Point
$core->set('int', 99);
$core->decrement('int');
$get = $core->get('int');

print_r($get);