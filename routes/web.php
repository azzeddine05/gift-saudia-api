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

Route::get('/', function () {
    return view('welcome');
});
Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});
Route::get('admin/gift-steps', 'admin\DashboardController@giftSteps')->name('gift.steps');
Route::get('admin/main-sectors', 'admin\DashboardController@mainSectors')->name('gift.mainSectors');
Route::get('admin/sub-sectors', 'admin\DashboardController@subSectors')->name('gift.subSectors');

Route::get('test', 'admin\TestController@index');
Route::get('dashboard', 'admin\DashboardController@index');

