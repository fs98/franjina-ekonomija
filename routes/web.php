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

Route::get('/test', function() {
	return view('admin.blank-page');
});


Auth::routes(['register' => false]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Admin Panel Routes

// Route::group(['middleware' => 'auth'], function() {

// 	Route::get('/admin' , function() {
// 		return view('admin.blank-page');
// 	});
// });

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function() {
	Route::get('/', function() {
		// $userAll = App\Models\User::all();

		// return view('admin.users.list')->with(['userAll' => $userAll]);
		return redirect(Route('admin.users.index'));
	})->name('index');

	Route::resource('users', 'UserController', [
    'except' => [ 'show' ]
	]);

	Route::resource('posts','PostsController');
	Route::resource('events','EventsController');
	Route::resource('projects','ProjectsController');


	// Route::resource('categories', 'CategoryController');
	// Route::resource('regions', 'RegionController');
	// Route::resource('places', 'PlaceController');
	// Route::resource('products', 'ProductController');
	// Route::resource('daily-offers', 'DailyOfferController');
	// Route::resource('sale-types', 'SaleTypeController');
	// Route::resource('roles', 'RoleController');
	// Route::resource('user-types', 'UserTypeController');
});


// Route::get('admin' , function() {
// 	dd(1);
// 	return view('admin.blank-page');
// });


// Route::get('admin-login' , function() {
// 	return view('concept-auth.login');
// });

// Route::get('forgot-password' , function() {
// 	return view('concept-auth.forgot-password');
// });

