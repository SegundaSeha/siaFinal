<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

// unsecure routes

// $router->get('/users', 'UserController@getAllUsers');

$router->get('/player', 'UserController@index');
$router->post('/player', 'UserController@add');
$router->get('/player/{id}', 'UserController@show');
$router->put('/player/{id}', 'UserController@update');
$router->delete('/player/{id}', 'UserController@delete');



$router->get('/role', 'RoleController@index');
$router->get('/role/{id}', 'RoleController@show');