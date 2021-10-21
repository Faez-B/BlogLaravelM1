<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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

//////
//  L'ordre des routes est IMPORTANTE (routes avec id vers la fin)
////

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() {
    phpinfo();
});

Route::get('/posts', [PostController::class, 'index'])->name('postsList');

// Route::get('/posts/details/{id}', [PostController::class, 'details'])->name('postDetails');

// Route::get('/posts/ajouter',function(){
//     return view('posts.ajout');
// });
// Route::post('/posts/ajouter',[PostController::class, 'ajouter'])->name('postAdd');

Route::get('/posts/ajouter',[PostController::class, 'ajouter'])->name('postAdd');
Route::post('/posts/ajouter',[PostController::class, 'store'])->name('postStore');

// Route::get('/posts/edit/{id}',[PostController::class, 'update'])->name('postUpdate');

Route::delete('posts/{id}', [PostController::class, 'delete'])->name('postDelete');

Route::get('posts/{id}', [PostController::class, 'details'])->name('postDetails');

Route::put('posts/{id}', [PostController::class, 'update'])->name('postUpdate');


Route::put('posts/{id}/picture', [PostController::class, 'updatePicture'])->name('postUpdatePicture');

// Route::post('posts/{id}', [PostController::class, 'addComment'])->name('addComment');
Route::post('/commentaires/{post_id}', [CommentController::class, 'store'])->name('commentAdd');
Route::delete('/commentaires/{id}', [CommentController::class, 'delete'])->name('commentDelete');
