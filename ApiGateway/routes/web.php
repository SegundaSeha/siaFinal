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


// SITE 1

$router->get('/site1', 'User1Controller@index');
$router->get('/site1/{id}', 'User1Controller@show');
$router->post('/site1', 'User1Controller@add');
$router->put('/site1/{id}', 'User1Controller@update');
$router->delete('/site1/{id}', 'User1Controller@delete');

// SITE 2

$router->get('/site2', 'User2Controller@index');
$router->get('/site2/{id}', 'User2Controller@show');
$router->post('/site2', 'User2Controller@add');
$router->put('/site2/{id}', 'User2Controller@update');
$router->delete('/site2/{id}', 'User2Controller@delete');


Route::group([

    'prefix' => 'api'

], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('user-profile', 'AuthController@me');

});
