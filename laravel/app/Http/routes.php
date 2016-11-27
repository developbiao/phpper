<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// first router practice
Route::get('/basic1', function (){
    return 'Hello Laravel Route';
});


// post method router
Route::post('basic2', function (){
    return 'Basic2';
});


// match router
Route::match(['get', 'post'], 'multy1', function (){
    return 'multy1';
});

Route::any('multy2', function (){
    return 'any multy';
});

// have parameter route
//Route::get('user/{id}', function ($id){
//  return 'User-id' . $id;
//});
//
//Route::get('user/{name?}', function ($name=null){
//    return 'User-name' .  $name;
//});

// regular parameter router
//Route::get('user/{name?}', function ($name){
//    return 'User-name:' . $name;
//})->where('name', '[A-Za-z]+');

//Route::get('user/{id}/{name?}', function ($id, $name=null){
//    return 'User-id:' . $id . '-Name-' . $name;
//}).where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);

// alias route name
//Route::get('user/member-center', ['as' => 'center', function(){
//    return 'member-center';
//}]);


// group route
Route::group(['prefix' => 'member'], function (){
    Route::get('user/center', ['as' => 'center', function (){
       return 'center'; 
    }]);
    Route::any('multy2', function (){
        return 'member-multy2';
    });
});







/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});







