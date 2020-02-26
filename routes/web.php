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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function (){
    Route::resource('/articles', 'Admin\ArticleController');
    Route::resource('/audits', 'Admin\AuditController');
});

/*
Route::get('/cadastrar', function (){
    \App\Article::create([
        'title' => 'Laravel 5.7 Auditions',
        'content' => 'text here',
        'user_id' => \Illuminate\Support\Facades\Auth::id()
    ]);
});
*/
