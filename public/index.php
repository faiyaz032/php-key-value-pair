<?php

use App\Core;

include_once '../vendor/autoload.php';

$core = new Core;

//Entry Point

$core->set('student', [
    'name' => 'faiyaz'
]);
$core->lpush('student', ['gender' => 'male']);
$get = $core->get('student');


print_r($get);