<?php 

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
        'driver' => 'mysql',
        'host' => 'localhost',
        'database' => 'eloquent',
        'username' => 'homestead',
        'password' => 'secret',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();