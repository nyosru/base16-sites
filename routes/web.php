<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Photo\CupController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::domain('sub.{domain}.ru')->group(function () {
//     Route::get('domaintest', function ($domain) {
//         dd($domain);
//     });
// });

Route::group(['domain' => 'photo.doc.loc'], function () {
    Route::get('addcu', [CupController::class, 'showFormAdd']);
    Route::post('addcu', [CupController::class, 'store7']);
    Route::get('/', [CupController::class, 'indexShow']);
});

Route::group(['domain' => 'xn--f1aeeb2as.xn--90adfbu3bff.xn--p1ai'], function () {
    Route::get('addcu', [CupController::class, 'showFormAdd']);
    Route::post('addcu', [CupController::class, 'store7']);
    Route::get('/', [CupController::class, 'indexShow']);
});

Route::get('/', function () {
    return view('site_ttt72.layouts.app');
})->where('any', '.*');

// Route::get('{any}', function () {
//     return view('layouts.app');
// })->where('any', '.*');
