<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::group([
//
//    'middleware' => 'api',
//    'prefix' => 'auth'
//
//], function ($router) {
//
//    Route::post('login', 'Api/AuthController@login');
//    Route::post('logout', 'Api/AuthController@logout');
//    Route::post('refresh', 'Api/AuthController@refresh');
//    Route::post('me', 'Api/AuthController@me');
//
//});
// Gift Steps
Route::get('admin/gift-steps', 'Api\giftSteps\GiftStepsController@index');

Route::get('admin/gift-steps/{id}', 'Api\giftSteps\GiftStepsController@show');

Route::post('admin/gift-steps','Api\giftSteps\GiftStepsController@store');

Route::put('admin/gift-steps/{id}','Api\giftSteps\GiftStepsController@update');

Route::delete('admin/gift-steps/{id}', 'Api\giftSteps\GiftStepsController@delete');
//Route::post('gift-steps/create', 'Api\steps\GiftStepsController@create')->name('gift.steps.create');

// Main Sectors
Route::get('admin/main-sector', 'Api\mainSectors\MainSectorController@index');

Route::get('admin/main-sector/{id}', 'Api\mainSectors\MainSectorController@show');

Route::post('admin/main-sector','Api\mainSectors\MainSectorController@store');

Route::put('admin/main-sector/{id}','Api\mainSectors\MainSectorController@update');

Route::delete('admin/main-sector/{id}', 'Api\mainSectors\MainSectorController@delete');

// Sub Sectors
Route::get('admin/sub-sector', 'Api\subSectors\SubSectorController@index');

Route::get('admin/sub-sector/{id}', 'Api\subSectors\SubSectorController@show');

Route::post('admin/sub-sector','Api\subSectors\SubSectorController@store');

Route::put('admin/sub-sector/{id}','Api\subSectors\SubSectorController@update');

Route::delete('admin/sub-sector/{id}', 'Api\subSectors\SubSectorController@delete');

// Regsitration Fields
Route::get('admin/registration-fields', 'Api\registerFields\FieldController@index');

Route::get('admin/registration-fields/{id}', 'Api\registerFields\FieldController@show');

Route::post('admin/registration-fields','Api\registerFields\FieldController@store');

Route::put('admin/registration-fields/{id}','Api\registerFields\FieldController@update');

Route::delete('admin/registration-fields/{id}', 'Api\registerFields\FieldController@delete');
