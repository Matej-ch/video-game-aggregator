<?php

use App\Comment;
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

Route::get('/','GamesController@index')->name('games.index');

Route::get('/games/{slug}','GamesController@show')->name('games.show');

Route::get('/comments','CommentsController@index')->name('comments.index');

Route::get('/comments/{comment}/edit', static function (Comment $comment) {
    return view('comments.edit',['comment' => $comment]);
});

Route::patch('/comments/{comment}', static function (Comment $comment) {
    $comment->update(
        request()->validate(['body' => 'required|string'])
    );

    return redirect("/comments/{$comment->id}/edit");
});

Route::delete('/comments/{comment}',static function(Comment $comment) {
    $comment->delete();

    return redirect("/");
});


Route::get('/posts/create', static function () {
    return view('posts.create');
});

Route::post('/posts', static function () {
    request()->validate([
        'title' => 'required',
        'body' => 'required',
        'g-recaptcha-response' => ['required',new \App\Rules\Recaptcha()],
    ]);

    // table post must be created
    dd('Validation passed');
});
