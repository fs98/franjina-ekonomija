<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MailController;

Route::get('/debug', function() {
	MailController::sendMail();
});

Route::get('/', 'NavigationControllers@index')->name('index');
Route::get('/kontakt', 'NavigationControllers@contact')->name('contact');

// Submit form from contact page
Route::post('/kontaktirajte-nas', 'QuestionsController@store')->name('question_store');

Route::get('/partneri', 'NavigationControllers@partners')->name('partners');
Route::get('/o-nama', 'NavigationControllers@about')->name('about');

// Submit form from about us page
// This also sends out an e-mail to the website owner
// Route::post('/onama', 'QuestionsController@store')->name('about_store');

Route::get('/aktivnosti', 'NavigationControllers@activities')->name('activities');
Route::get('/projekti','NavigationControllers@projectlist')->name('projects');
Route::get('/projekti/{project}','NavigationControllers@showProject')->name('specificProject');
Route::get('/podrška','NavigationControllers@support')->name('support');
Route::get('/blog','NavigationControllers@blog')->name('blog');
Route::get('/blog/{post}','NavigationControllers@show')->name('blogPost');

Route::get('/new-home', function() {
	return view('pages.new-home');
});

// Auth routes
Auth::routes(['register' => false]);

// Admin panel
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function() {
	Route::get('/', function() {
		return redirect(Route('admin.users.index'));
	})->name('index');

	Route::resource('users', 'UserController', [
    'except' => ['show']
	]);

	Route::resource('posts','PostsController');
	Route::resource('events','EventsController');
	Route::resource('projects','ProjectsController');
	Route::resource('questions', 'QuestionsController', ['except' => ['update', 'edit']]);
});