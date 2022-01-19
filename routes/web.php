<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Restaurant\RestaurantHomeController;
use App\Http\Controllers\Restaurant\RestaurantController;
use App\Http\Controllers\Restaurant\RestaurantRegisterController;
use App\Http\Controllers\Web\WebPagesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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


//////////// Web Pages /////////////////////

Route::get('/',[WebPagesController::class,'index']);
Route::get('/about-us',[WebPagesController::class,'about']);
Route::get('/contact-us',[WebPagesController::class,'contact']);
Route::get('/packages',[WebPagesController::class,'packages']);
Route::get('/services',[WebPagesController::class,'services']);
Route::post('/contactform',[WebPagesController::class,'contactform']);

Route::get('/test', function () {
    return Hash::make('admin@clickeat.com');
});

Route::get('/test/123', function (Request $r) {
    return $r->path();
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/admin/logout', [AdminController::class,'logout'])->name('admin.logout');

Route::get('/restaurant/register', [RestaurantRegisterController::class,'showRegistrationForm'])->name('restaurant.register');
Route::post('/restaurant/register', [RestaurantRegisterController::class,'register'])->name('restaurant.register.post');
Route::post('/restaurant/logout', [RestaurantController::class,'logout'])->name('restaurant.logout');


//Admin Home page after login

Route::group(['middleware'=>'admin'], function() {
    Route::get('/admin/dashboard', [AdminHomeController::class,'index']);
});

//Restaurant Home page after login

Route::group(['middleware'=>'restaurant'], function() {
    Route::get('/restaurant/dashboard', [RestaurantHomeController::class,'index']);
});
