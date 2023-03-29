<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

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
    return redirect('project');
});

Route::resource('project', ProjectController::class);

//Route::post('home', [ProjectController::class, 'post'])->name('post.project');
//
//
//Route::post('post_test', function () {
//    return "Post Test";
//});
//
//Route::prefix('project')->group(function () {
//    Route::get('/', [ProjectController::class, 'index']);
//    Route::get('/{id}/{slug}', [ProjectController::class, 'get']);
//});
