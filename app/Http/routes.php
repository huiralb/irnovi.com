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

/**
 * Routes for resource page
 */
$app->get('/', 'PagesController@index');


/**
 * Routes for resource posts
 */
$app->get('posts', 'PostsController@index');

$app->get('api/posts', 'PostsController@all');

$app->get('posts/{id}/{name}', 'PostsController@get');
$app->post('posts', 'PostsController@add');
$app->put('posts/{id}', 'PostsController@put');
$app->delete('posts/{id}', 'PostsController@remove');
