<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\RedirectionController;
use Illuminate\Support\Facades\Redirect;
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

//Route::controller(\App\Http\Controllers\AuthenticationController::class)->group(function() {
//    Route::get('auth', 'show');
////    Route::get('auth','index');
//    Route::post('auth', 'submitData')->name('submit.data');
//});
Route::get('auth', [App\Http\Controllers\AuthenticationController::class, 'index'])->name('users.index');
Route::post('auth', [App\Http\Controllers\AuthenticationController::class, 'store'])->name('users.store');

Route::controller(\App\Http\Controllers\RedirectionController::class)->group(function () {
    Route::get('redirection/success', 'successPage')->name('success.page');
    Route::get('redirection/failed', 'failedPage')->name('failed.page');
});


Route::get('/', function () {
    return view('posts', [
        'posts' => Post::all()
    ]);
});


Route::get('posts/{post}', function ($slug) {
    return view('post', [
        'posts' => Post::find($slug)
    ]);
})->where('post', '[A-z\-]+');

