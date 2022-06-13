<?php


use App\Http\Controllers\JobseekerController;
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
Route::get('home', function () {
    return view('welcome');
});

Route::get('seek', function () {
    return view('seek');
});

Route::get('employer', function () {
    return view('employer');
});




Route::get('/', function () {
    return view('job');
});


//auth route for both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});


// for users
Route::group(['middleware' => ['auth', 'role:user']], function() { 
    Route::get('/dashboard/viewposted', 'App\Http\Controllers\DashboardController@viewposted')->name('dashboard.viewposted');
    // Route::get('/dashboard/createpost', 'App\Http\Controllers\DashboardController@createpost')->name('dashboard.createpost');
});
// Route::group(['middleware' => ['auth', 'role:user']], function() { 
    
// });





// for Company
Route::group(['middleware' => ['auth', 'role:company']], function() { 
    Route::get('/dashboard/companyposts', 'App\Http\Controllers\DashboardController@companyposts')->name('dashboard.companyposts');
});


//jobseekers
// Route::get('create-seeker', [JobseekerController::class, 'create']);
Route::POST('store-seeker', [JobseekerController::class, 'store']);

Route::get('index-seeker', [JobseekerController::class, 'index']);
Route::get('show-seeker/{seeker}', [JobseekerController::class, 'show']);



require __DIR__.'/auth.php';
