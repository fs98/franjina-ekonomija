<?php

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

Route::get('/', 'NavigationControllers@index')->name('index');
Route::get('/kontakt', 'NavigationControllers@contact')->name('contact');
Route::get('/partneri', 'NavigationControllers@partners')->name('partners');
Route::get('/onama', 'NavigationControllers@about')->name('about');
Route::get('/aktivnosti', 'NavigationControllers@activities')->name('activities');
Route::get('/projekti','NavigationControllers@projectlist')->name('projects');
Route::get('/nekiprojekat','NavigationControllers@project')->name('specificProject');
Route::get('/podrška','NavigationControllers@Support')->name('support');
Route::get('/blog','NavigationControllers@blog')->name('blog');
Route::get('/blogpost','NavigationControllers@blogpost')->name('blogPost');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
