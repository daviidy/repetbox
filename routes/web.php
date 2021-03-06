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
Route::post('paypal', 'PaymentController@payWithpaypal')->name('paywithpaypal');
Route::get('status', 'PaymentController@getPaymentStatus')->name('status');

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

Route::resource('users', 'UserController');

Route::resource('instruments', 'InstrumentController');

Route::resource('styles', 'StyleController');

Route::resource('skills', 'SkillController');

Route::resource('recordings', 'RecordingController');

Route::resource('titles', 'TitleController');

Route::resource('effects', 'EffectController');

Route::resource('medias', 'MediaController');



//pricings routes
Route::get('/admin/pricings', 'PricingController@index')->name('pricings');

Route::get('/studioPlan', 'PricingController@indexFront');

Route::get('/admin/pricings/create', 'PricingController@create')->name('pricings');

Route::get('/admin/pricings/{pricing}/edit', 'PricingController@edit')->name('pricings');

//pricings routes
Route::get('/admin/characteristics', 'CharacteristicController@index')->name('characteristics');

Route::get('/admin/characteristics/create', 'CharacteristicController@create')->name('characteristics');

Route::get('/admin/characteristics/{characteristic}/edit', 'CharacteristicController@edit')->name('characteristics');

//skills routes
Route::get('/admin/skills', 'SkillController@index')->name('skills');

Route::get('/admin/skills/create', 'SkillController@create')->name('skills');

Route::get('/admin/skills/{skill}/edit', 'SkillController@edit')->name('skills');

//instruments routes
Route::get('/admin/instruments', 'InstrumentController@index')->name('instruments');

Route::get('/admin/instruments/create', 'InstrumentController@create')->name('instruments');

Route::get('/admin/instruments/{instrument}/edit', 'InstrumentController@edit')->name('instruments');

//styles routes
Route::get('/admin/styles', 'StyleController@index')->name('styles');

Route::get('/admin/styles/create', 'StyleController@create')->name('styles');

Route::get('/admin/styles/{style}/edit', 'StyleController@edit')->name('styles');

//purchases routes
Route::get('/admin/purchases', 'PurchaseController@index')->name('purchases');

Route::get('/admin/purchases/create', 'PurchaseController@create')->name('purchases');

//users routes
Route::get('/members/{user}/edit', 'UserController@edit')->name('users');

//recordings route routes
Route::get('/recordings', 'RecordingController@index')->name('recordings');
Route::get('/recordings/create', 'RecordingController@create')->name('recordings');
Route::get('/recordings/edit/{recording}', 'RecordingController@edit')->name('recordings');
Route::get('/recordings/multi/edit/{recording}/', 'RecordingController@editMulti')->name('recordings');
Route::get('/joinVideos/{recording}/', 'RecordingController@joinVideos')->name('recordings');
Route::get('/refuse/{recording}/', 'RecordingController@refuse')->name('recordings');
Route::get('/accept/{recording}/', 'RecordingController@accept')->name('recordings');

//ajax routes

Route::post('/uploadAvatar', 'UserController@uploadAvatar');
Route::post('/uploadVideo', 'RecordingController@uploadVideo');
