<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\TrafficController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FeedbackController;

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

Route::get('authinticate',[AdminController::class,'login'])->name('custom.login');
Route::post('authinticate',[AdminController::class,'authenticate'])->name('auth.login');
Route::get('/',[SiteController::class,'site1'])->name('home');

Route::get('registeration',[AdminController::class,'registration']);
Route::post('registeration', [AdminController::class, 'customRegistration'])->name('registration');


Route::middleware('auth')->group(function () {

Route::get('dashboard',[AdminController::class,'index']);
Route::post("/logout",[AdminController::class,"store"])->name("logout");

Route::get('customer',[CustomerController::class,'customer'])->name('customer.index');
Route::get('create-customer',[CustomerController::class,'create'])->name('create.customer');
Route::post('store-customer',[CustomerController::class,'store'])->name('store.customer');
Route::get('edit-customer/{id}',[CustomerController::class,'edit'])->name('edit.customer');
Route::post('update-customer',[CustomerController::class,'update'])->name('update.customer');
Route::get('delete-customer/{id}',[CustomerController::class,'delete'])->name('delete.customer');


//Country

Route::get('country',[CountryController::class,'index'])->name('country.index');
Route::get('create-country',[CountryController::class,'create'])->name('create.country');
Route::post('store-country',[CountryController::class,'store'])->name('store.country');
Route::get('edit-country/{id}',[CountryController::class,'edit'])->name('edit.country');
Route::post('update-country',[CountryController::class,'update'])->name('update.country');

Route::get('delete-country/{id}', [CountryController::class, 'delete'])->name('delete.conuntry');

//Category
Route::get('category',[CategoryController::class,'index'])->name('category.index');
Route::get('create-category',[CategoryController::class,'create'])->name('create.category');
Route::post('store-category',[CategoryController::class,'store'])->name('store.category');
Route::get('edit-category/{id}',[CategoryController::class,'edit'])->name('edit.category');
Route::post('update-category',[CategoryController::class,'update'])->name('update.category');


Route::get('admin/user',[AdminController::class,'user'])->name('index.user');

Route::get('delete-category/{id}', [CategoryController::class, 'delete'])->name('delete.category');

//City

Route::get('city',[CityController::class,'index'])->name('city.index');
Route::get('create-city',[CityController::class,'create'])->name('create.city');
Route::post('store-city',[CityController::class,'store'])->name('store.city');
Route::get('edit-city/{id}',[CityController::class,'edit'])->name('edit.city');
Route::post('update-city',[CityController::class,'update'])->name('update.city');
Route::get('delete-city/{id}', [CityController::class, 'delete'])->name('delete.city');

// Traffic

Route::get('traffic',[TrafficController::class,'index'])->name('traffic.index');
Route::get('create-traffic',[TrafficController::class,'create'])->name('create.traffic');
Route::post('store-traffic',[TrafficController::class,'store'])->name('store.traffic');
Route::get('edit-traffic/{id}',[TrafficController::class,'edit'])->name('edit.traffic');
Route::post('update-traffic',[TrafficController::class,'update'])->name('update.traffic');
Route::get('delete-traffic/{id}', [TrafficController::class, 'delete'])->name('delete.traffic');


//feedback

Route::get('feedback',[FeedbackController::class,'index'])->name('feedback.index');
Route::get('create-feedback',[FeedbackController::class,'create'])->name('create.feedback');
Route::post('store-feedback',[FeedbackController::class,'store'])->name('store.feedback');
Route::get('edit-feedback/{id}',[FeedbackController::class,'edit'])->name('edit.feedback');
Route::post('update-feedback',[FeedbackController::class,'update'])->name('update.feedback');
Route::get('delete-feedback/{id}', [FeedbackController::class, 'delete'])->name('delete.feedback');





});
