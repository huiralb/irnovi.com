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

$app->get('/', 'PostsController@all');


/**
 * Routes for resource posts
 */
$app->get('posts', 'PostsController@all');
$app->get('posts/{id}', 'PostsController@get');
$app->post('posts', 'PostsController@add');
$app->put('posts/{id}', 'PostsController@put');
$app->delete('posts/{id}', 'PostsController@remove');
