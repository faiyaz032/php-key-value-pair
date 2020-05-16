<?php

use App\Core;

include_once '../vendor/autoload.php';

$core = new Core;

//Entry Point
$core->set('name', 'faiyaz');
$get = $core->get('name');