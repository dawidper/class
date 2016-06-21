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

$app->get('/', 'AdvertController@index');

$app->get('/category/{id}','AdvertController@listByCategory');

$app->get('/advert/{id}','AdvertController@get');

$app->get('/advert','AdvertController@postForm');

$app->post('/advert','AdvertController@post');