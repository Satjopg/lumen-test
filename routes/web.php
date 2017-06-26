<?php

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

$app->get('/', function () use ($app) {
    return $app->version();
});

/**
 * Routes for resource article

$app->get('article', 'ArticlesController@all');
$app->get('article/{id}', 'ArticlesController@get')->where('id', '[0-9]+');
$app->get('article/{first}', 'ArticlesController@first')->where('first', 'first');
*/

$app->group(['prefix' => 'api/v1'], function($app)
{
	    resource('article', 'ArticlesController');
});


function resource($uri, $controller)
{
	global $app;
	$app->get($uri, $controller.'@index');
	$app->get($uri.'/viewin/{id}', $controller.'@find');
	$app->get($uri.'/first', $controller.'@first');
}
