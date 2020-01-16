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
Route::prefix('admin')->namespace('admin')->group(function () {
    Route::get('company/confirm', 'DashboardController@confirmRegistred')->name('company.confirm.registred');
    Route::get('gift-steps', 'DashboardController@giftSteps')->name('gift.steps');
    Route::get('main-sectors', 'DashboardController@mainSectors')->name('gift.mainSectors');
    Route::get('sub-sectors/main-sector/{id}', 'DashboardController@subSectors')->name('gift.subSectors');

    Route::post('total-marks/add', 'DashboardController@addTotalMarks')->name('total.marks.add');

    Route::get('registration-fields', 'DashboardController@registrationFields')->name('registration.fields');
    Route::get('ready-model-fields', 'DashboardController@ReadyModelFields')->name('ready.model.fields');
    Route::get('get-ready-model-fields-sub-standard/{id}', 'DashboardController@getReadyModelFieldsSubStandard')->name('get.ready.model.fields.sub.standard');
    Route::get('ready-model-fields/add', 'DashboardController@addReadyModelFields')->name('ready.model.fields.add');
    Route::get('execute-payment', 'PaymentController@execute')->name('paypal.payment.execute');
    Route::post('create-payment', 'PaymentController@createPayment')->name('paypal.payment.create');

    Route::get('employes', 'EmployeController@index')->name('admin.employes');
    Route::post('employe/add', 'EmployeController@store')->name('admin.employe.add');
    Route::get('employe/permissions/{id}', 'EmployeController@employePermissions')->name('admin.employe.permissions');
    Route::post('employe/permisssions/add', 'EmployeController@store')->name('admin.employe.permissions.add');
    Route::get('employe/{id}/permission/{permissionId}/destroy', 'EmployeController@removePermissionOfEmploye');
    Route::post('employes/add','EmployeController@addEmpolyee');
    Route::put('employes/edit/{id}','EmployeController@updateEmployee');
    Route::get('employes/edit/{id}','EmployeController@showEmployee');
    //Route::post('employe/permissions/add', 'EmployeController@employePermissions')->name('admin.employe.permissions');

    Route::get('fees/registred', 'DashboardController@registredFees')->name('fees.registred');
    Route::get('fees/subscribed', 'DashboardController@subscribedFees')->name('fees.subscribed');

   // Route::get('reviews-fields', 'ReviewsController@index')->name('reviews.fields');
   // Route::post('reviews-fields/add', 'ReviewsController@store')->name('reviews.fields.add');

    //Reviews Fields
    Route::get('reviews-fields', 'ReviewsController@index')->name('reviews.fields');;
    Route::post('reviews-fields/add', 'ReviewsController@store')->name('reviews.fields.add');
    Route::get('reviews-fields/{id}', 'ReviewsController@show');
    Route::delete('reviews-fields/{id}', 'ReviewsController@delete');
    Route::put('reviews-fields/{id}', 'ReviewsController@update');

    //Reviews Items
    Route::get('review-items', 'ReviewItemController@index');
    Route::post('review-items/add', 'ReviewItemController@store');
    Route::get('review-items/{id}', 'ReviewItemController@show');
    Route::delete('review-items/{id}', 'ReviewItemController@delete');
    Route::put('review-items/{id}', 'ReviewItemController@update');
});

Route::get('user/profile', 'ProfileController@index')->name('user.profile');

// Company Routes
//add protection on company dashboard
Route::middleware(['web','auth:web'])->group(function(){
    Route::get('/company/dashboard', 'CompanyController@index')->name('company.dashboard');
    // Route::get('/company/ready-model-registred','ReadyModelReplyController@index')->name('company.ready.model.reply');
    Route::get('/company/ready-model-registred','ReadyModelControlller@index')->name('company.ready.model.reply');
    Route::post('/company/ready-model-reply','ReadyModelControlller@storeRegistredFields')->name('company.ready.model.reply.store');
});
Route::get('/admin/all-companies', 'CompanyController@getAllCompanies')->name('companies.all');
Route::post('/company/company-registre','CompanyController@storeRegistredFields');
Route::get('/companies/ready-model-notcofirmed', 'ReadyModelReplyController@getAllReplyReadyModelsReplyNotDelivred')->name('raedy.model.reply.new');




Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('test', 'admin\TestController@index');
Route::get('dashboard', 'admin\DashboardController@index');



// FrontEnd
Route::get('/','CalcDateController@index');


Route::get('home', 'front\HomeController@index');
Route::get('constructor/register', 'front\HomeController@registerConstructor');
Route::get('main-sector/sub-sector', 'front\HomeController@getSubSectorByMainSector');


Route::post('company/register', 'front\HomeController@registerCompany');
Route::get('/company/{id}/confirmed-registre', 'front\HomeController@CompanyConfirmedRegistre')->name('company.confimred.registre');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route::get('stripe', 'StripePaymentController@stripe');
//Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');
// Route::post('/make-payment', 'StripePaymentController@pay');
