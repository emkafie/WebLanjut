<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/world', function () {
    return 'World';
});
Route::get('/', [HomeController::class, 'index']);

Route::get('/about/{name}/{nim}', [AboutController::class, 'about']);

Route::get('/articles/{id?}', [ArticleController::class, 'article']);
// Route::get('/user/{name?}', function ($name = 'John') {
//     return 'Nama saya ' . $name;
// });

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});


Route::get('/user/profile', function () {
    //
})->name('profile');


//This can be used to only or except
// Route::resource('photos', PhotoController::class)->except([
//     'create', 'store', 'update', 'destroy'
//     ]);

Route::resource('photos', PhotoController::class)->only([
    'index',
    'show'
]);

// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'emkafie']);
// });

Route::get('/greeting', [WelcomeController::class, 'greeting']);