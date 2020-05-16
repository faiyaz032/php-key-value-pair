<?php

use App\Core;

include_once '../vendor/autoload.php';

$core = new Core;

//Entry Point

$core->set('student', [
    'name' => 'faiyaz'
]);
$core->lpush('student', ['gender' => 'male']);
$core->rpush('student', ['age' => 18]);
$core->rpop('student');

//Hashes
$core->hset('student', 'name' , 'faiyaz');
$core->hmset('student1', ['name' , 'age', 'gender'], ['faiyaz', 16, 'male']);



print_r($get);