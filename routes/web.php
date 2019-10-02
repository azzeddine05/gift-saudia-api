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

// Backend

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});
Route::get('admin/gift-steps', 'admin\DashboardController@giftSteps')->name('gift.steps');
Route::get('admin/main-sectors', 'admin\DashboardController@mainSectors')->name('gift.mainSectors');
Route::get('admin/sub-sectors', 'admin\DashboardController@subSectors')->name('gift.subSectors');

Route::get('admin/registration-fields', 'admin\DashboardController@registrationFields')->name('registration.fields');


Route::get('test', 'admin\TestController@index');
Route::get('dashboard', 'admin\DashboardController@index');



// FrontEnd
Route::get('/', function () {
    return view('front.index');
});
Route::get('home', 'front\HomeController@index');
Route::get('constructor/register', 'front\HomeController@registerConstructor');
Route::get('main-sector/sub-sector', 'front\HomeController@getSubSectorByMainSector');


Route::post('company/register', 'front\HomeController@registerCompany');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
