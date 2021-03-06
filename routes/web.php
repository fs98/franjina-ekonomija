<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MailController;
use App\Http\Middleware\Blogger;
use App\Http\Middleware\ContentManager;

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
Route::post('/onama', 'QuestionsController@store')->name('about_store');

Route::get('/aktivnosti', 'NavigationControllers@activities')->name('activities');
Route::get('/gdpr', 'NavigationControllers@gdpr')->name('gdpr');
Route::get('/projekti','NavigationControllers@projectlist')->name('projects');
Route::get('/projekti/{project}','NavigationControllers@showProject')->name('specificProject');
Route::get('/podrska','NavigationControllers@support')->name('support');
Route::get('/blog','NavigationControllers@blog')->name('blog');
Route::get('/blog/{post}','NavigationControllers@show')->name('blogPost');

Route::get('/rezultati-pretrazivanja/', 'NavigationControllers@search')->name('searchResults');

// Auth routes
Auth::routes(['register' => false]);

/**
 * Admin Panel
 */

// Superadmin and admin
Route::middleware(['auth', Blogger::class, ContentManager::class])->prefix('admin')->name('admin.')->group(function() {

	Route::resource('users', 'UserController', [
    'except' => ['show']
	]); 

	Route::resource('questions', 'QuestionsController', [
		// 'except' => ['update', 'edit']
	]); 

});

// Content manager can see but blogger cannot

Route::middleware(['auth', Blogger::class])->prefix('admin')->name('admin.')->group(function() {
	
  Route::resource('projects','ProjectsController', [
		'except' => ['show']
	]);

  Route::resource('events','EventsController', [
		'except' => ['show']
	]);

  Route::resource('partners', 'PartnersController', [
		'except' => ['show']
	]);

  Route::resource('newsletter', 'NewsletterController', [
		'except' => ['show', 'edit', 'update', 'destroy']
	]);

  Route::resource('sliders', 'SliderController');
	Route::resource('slider-images', 'SliderImageController');

	Route::resource('project-images', 'ProjectImagesController', [
    'only' => ['destroy']
  ]);

  Route::resource('activities', 'ActivitiesController', [
    'except' => ['show']
  ]);

  Route::resource('gdpr', 'GdprController', [
    'only' => ['show', 'update']
  ]);

});


// Everybody including blogger

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function() {
  Route::get('/', function() {
		return redirect(Route('admin.posts.index'));
	})->name('index');
  
	Route::resource('posts','PostsController', [
		'except' => ['show']
	]);

  Route::resource('bloggers', 'BloggersController', [
    'except' => ['show']
  ]);
});

Route::post('subscribe', 'NewsletterController@subscribe')->name('newsletter.subscribe');
Route::get('unsubscribe/{email}/{token}', 'NewsletterController@unsubscribe')->name('newsletter.unsubscribe');
Route::post('unsubscribe', 'NewsletterController@unsubscribeLinkPost')->name('newsletter.unsubscribelink');
Route::get('unsubscribe', 'NewsletterController@unsubscription')->name('newsletter.unsubscription');

