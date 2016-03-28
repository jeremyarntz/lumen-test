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

$app->get('/', function() use ($app) {
  return "RESTful API";
});

$app->group(['prefix' => 'api/v1'], function () use ($app) {

  // user
  $app->get('/user/collection', 'App\Http\Controllers\CollectionController@getcollection');
  $app->post('/user/collection', 'App\Http\Controllers\CollectionController@addtocollection');
  $app->delete('/user/collection', 'App\Http\Controllers\CollectionController@removefromcollection');


  // releases
  $app->get('/releases/{id}', 'App\Http\Controllers\ReleaseController@getrelease');
  $app->post('/releases', 'App\Http\Controllers\ReleaseController@createrelease');
  $app->put('/releases/{id}', 'App\Http\Controllers\ReleaseController@updaterelease');


  // artists
  $app->get('/artists', 'App\Http\Controllers\ArtistController@getartists');
  $app->get('/artists/{id}', 'App\Http\Controllers\ArtistController@getartist');
  $app->post('/artists', 'App\Http\Controllers\ArtistController@createartist');
  $app->put('/artists/{id}', 'App\Http\Controllers\ArtistController@updateartist');
  $app->get('/artists/{id}/releases', 'App\Http\Controllers\ArtistController@getartistreleases');


  // labels
  $app->get('/labels', 'App\Http\Controllers\LabelController@getlabels');
  $app->post('/labels', 'App\Http\Controllers\LabelController@createLabel');
  $app->put('/labels/{id}', 'App\Http\Controllers\LabelController@updatelabel');
  $app->get('/labels/{id}', 'App\Http\Controllers\LabelController@getlabel');
  $app->get('/labels/{id}/releases', 'App\Http\Controllers\LabelController@getlabelreleases');

});
