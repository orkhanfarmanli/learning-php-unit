<?php 

use App\Models\User;
use Illuminate\Database\Capsule\Manager as Capsule;

// Capsule::schema()->create('users', function($table)
// {
//   $table->increments('id');
//   $table->string('firstName');
//   $table->string('lastName');
//   $table->string('email');
//   $table->timestamps();
// });

// User::create(['firstName' => 'Orxan', 'lastName' => 'Fərmanlı', 'email'=> 'orkhanfarmanli@gmail.com']);

var_dump(User::first());