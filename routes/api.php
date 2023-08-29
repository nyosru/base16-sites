<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Ttt72NewsController;

use App\Http\Controllers\Photo\CupController;

use App\Models\Photo\Cup;
use App\Http\Resources\Photo\CupCollection;
use App\Http\Resources\PhotoCupResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'photo'], function () {

    //     Route::post('add', 'PostController@add');
    // Route::get('cups', [Ttt72NewsController::class, 'index']);
    
    Route::get('mapJs', [CupController::class, 'mapJs']);

    Route::resource('cups', CupController::class );

    // Route::get('cups', function () {
    //     // return new CupCollection(Cup::all());jndtns yf djghjcs 
    //     // return CupResource::collection(Cup::all());

    //     // return Cup::all();
    //     return new PhotoCupResource(Cup::all());
    // });

    //     Route::get('edit/{id}', 'PostController@edit');
    //     Route::post('update/{id}', 'PostController@update');
    //     Route::delete('delete/{id}', 'PostController@delete');
});

Route::group(['prefix' => 'ttt72'], function () {
    //     Route::post('add', 'PostController@add');
    Route::get('news', [Ttt72NewsController::class, 'index']);
    //     Route::get('edit/{id}', 'PostController@edit');
    //     Route::post('update/{id}', 'PostController@update');
    //     Route::delete('delete/{id}', 'PostController@delete');
});

// Route::get('posts', 'PostController@index');
// Route::group(['prefix' => 'post'], function () {
//     Route::post('add', 'PostController@add');
//     Route::get('edit/{id}', 'PostController@edit');
//     Route::post('update/{id}', 'PostController@update');
//     Route::delete('delete/{id}', 'PostController@delete');
// });
