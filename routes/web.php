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
   // echo "hello";
});

$router->get('/key', function() {
    return \Illuminate\Support\Str::random(32);
});
$router->get('/redis1', 'Controller@redis1');
$router->get('/save', 'Controller@save');
$router->get('/sha512', 'Controller@sha512');
$router->get('/jwttoken', 'Controller@jwttoken');
$router->get('/getkey', 'Controller@getkey');
$router->get('/create_order', 'Controller@create_order');
$router->get('/sendsbmsas', 'Controller@sendsbmsas');
$router->get('/sendsbmsasbatch', 'Controller@sendsbmsasbatch');
$router->get('/test', 'Controller@test');
$router->get('/testAES', 'Controller@testAES');
$router->get('/testAES1', 'Controller@testAES1');
$router->post('/receivesbmsas', 'Controller@receivesbmsas');
$router->post('/handle_new_order', 'Controller@handle_new_order');
$router->post('/handle_require_delivery','Controller@handle_require_delivery');
$router->post('/handle_status_change','Controller@handle_status_change');
$router->post('/info_change','Controller@info_change');
//$router->post('/deletesbmsas', 'Controller@deletesbmsas');
$router->group( ['middleware' => 'auth'], function() use ($router) {

});
/*$router->group( ['middleware' => 'auth:mgt_api'], function() use ($router) {
    $router->get('/test', 'ExampleController@test');
    $router->get('/sendsbm', 'ExampleController@sendsbm');
   
    $router->post('/getsbm', 'ExampleController@getsbm');
    $router->get('/testdeleteSBM', 'ExampleController@testdeleteSBM');
    $router->get('/userinfo', 'ExampleController@userinfo');
    $router->post('/create_order', 'ExampleController@create_order');
    $router->get('/user/profile', function () {
        echo 'Nancy';
    });

});*/
