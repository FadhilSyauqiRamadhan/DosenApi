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

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('dosen', 'DosenController@index');         // Get all
    $router->get('dosen/{no}', 'DosenController@show');     // Get by ID
    $router->post('dosen', 'DosenController@store');        // Create
    $router->put('dosen/{no}', 'DosenController@update');   // Update
    $router->delete('dosen/{no}', 'DosenController@destroy'); // Delete
});
