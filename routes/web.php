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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//payments gateways
Route::post('/payment/add-funds/paypal', 'PaymentController@payWithpaypal')->name('paywithpaypal');

Route::post('/subscribeNewsletter', 'NewsletterController@store');

Route::get('lang/{locale}', 'HomeController@lang');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

Route::resource('pricings', 'PricingController');

Route::resource('purchases', 'PurchaseController');

Route::resource('characteristics', 'CharacteristicController');



//pricings routes
Route::get('/admin/pricings', 'PricingController@index')->name('pricings');

Route::get('/studioPlan', 'PricingController@indexFront');

Route::get('/admin/pricings/create', 'PricingController@create')->name('pricings');

Route::get('/admin/pricings/{pricing}/edit', 'PricingController@edit')->name('pricings');

//pricings routes
Route::get('/admin/characteristics', 'CharacteristicController@index')->name('characteristics');

Route::get('/admin/characteristics/create', 'CharacteristicController@create')->name('characteristics');

Route::get('/admin/characteristics/{characteristic}/edit', 'CharacteristicController@edit')->name('characteristics');

//purchases routes
Route::get('/admin/purchases', 'PurchaseController@index')->name('purchases');

Route::get('/admin/purchases/create', 'PurchaseController@create')->name('purchases');
