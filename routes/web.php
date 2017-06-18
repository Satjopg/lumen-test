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
 */
$app->get('article', 'ArticlesController@all');
$app->get('article/{id}', 'ArticlesController@get');
$app->post('article', 'ArticlesController@add');
$app->put('article/{id}', 'ArticlesController@put');
$app->delete('article/{id}', 'ArticlesController@remove');
