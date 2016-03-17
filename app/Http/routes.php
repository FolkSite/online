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

Route::get('/', [
    'as' => 'home',
    function () {
        return view('welcome');
    }
]);
Route::get('boards', [
    'as' => 'boards',
    function () {
        return view('welcome');
    }
]);
    

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
    
    Route::get('/boards/agree', [
        'as' => 'boards.agree', 
        function () {
            return view('boards.agree');
        }
    ]);
    
    // Provide controller methods with object instead of ID
    Route::model('types', 'BoardsType');
//    Route::model('user', 'User', function()
//{
//    throw new NotFoundHttpException;
//});

    //Route::bind('boards/types', function($value, $route) {
    //    return App\BoardsType::find($value);
    //});

    //Route::resource('asdad/boards', 'BoardsController');
    Route::resource('boards/types', 'BoardsTypesController', ['except' => ['show']]);
});

Route::group(['middleware' => ['web']], function () {
    Route::patch('boards/types/{id}/restore', [
        'as' => 'boards.types.restore', 'uses' => 'BoardsTypesController@restore'
    ]);
});