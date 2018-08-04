<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('foo', function () {
    return 'Hello World';
});

Route::prefix('admin')->group(function () {
    Route::match(['get', 'post'], 'demothree', 'DemoController@demothree');
    Route::any('demofour', 'DemoController@demofour');
});



Route::get('/demoone', 'DemoController@index');
Route::post('/demotwo', 'DemoController@demotwo');

//Route::match(['get', 'post'], '/demothree', 'DemoController@demothree');

//Route::any('/demofour', 'DemoController@demofour');



Route::get('demofive/{id}', function ($id) {
    return 'ID: '.$id;
});

//Optional
Route::get('demofive/{id?}', function ($id=123) {
    return 'ID: '.$id;
});


Route::get('demosix/{id}/{name}', function ($id, $name) {
    return 'ID: '.$id.' || NAME: '.$name;
});


Route::get('demoseven/{id}', function ($id) {
    return 'demoseven ID: '.$id;
})->where('id', '[0-9]+');

Route::get('demoeight/{name}', function ($name) {
    return 'demoeight NAME: '.$name;
})->where('name', '[A-Za-z]+');

Route::get('demonine/{id}/{name}', function ($id, $name) {
    return 'demonine ID: '.$id.' || NAME: '.$name;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);


Route::get('demoten/age/{age}/school/{school}', function ($age, $school) {
    return 'demoten age: '.$age.' || SCHOOL: '.$school;
});


Route::resource('photos', 'PhotoController');

// Case controller in folder
Route::resource('photos', 'Admin\PhotoController');

Route::resources([
    'photos' => 'PhotoController',
    'posts' => 'PostController'
]);

// Route::resource('photos', 'PhotoController')->only([
//     'index', 'show'
// ]);

// Route::resource('photos', 'PhotoController')->except([
//     'create', 'store', 'update', 'destroy'
// ]);



Route::any('por', 'BlogController@myaction');


Route::resource('admin/users', 'Admin\UsersController');

