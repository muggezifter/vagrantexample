<?php

use App\User;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('users', function () use ($router) {
    return User::all(['id','name','email'])->toJson();;
});


$router->get('users/{id}', function ($id) use ($router) {
    return User::find($id)->toJson();
});