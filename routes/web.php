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
// Root Page
Route::get('/', function () {
    return redirect('/pages/login');
});

// Customer
Route::group(['prefix' => 'pages'], function () {
    // Auth Process
    Route::get('/', function () {
        return redirect('/pages/login');
    });
    Route::get('/login', function () {
        return view('auth.customer.login');
    });
    Route::get('/register', function () {
        return view('auth.customer.register');
    });
    Route::post("/login-process", "Auth\CustomerAuthController@login")->name("customer.login");
    Route::post("/register-process", "Auth\CustomerAuthController@register")->name("customer.register");

    Route::group(['middleware' => 'auth:customer'], function () {

        Route::get("/logout", "Auth\CustomerAuthController@logout")->name("customer.logout");
        Route::get('dashboard', 'CustomerDashboard@index')->name('customer.dashboard');

        /**
         * Pengajuan Page
         **/
        Route::get('pengajuan/data', 'Pengajuan\PengajuanController@data')->name("pengajuan.data");
        Route::post('pengajuan/restore/{id}', 'Pengajuan\PengajuanController@restore')->name('pengajuan.restore');
        Route::delete('pengajuan/remove/{id}', 'Pengajuan\PengajuanController@remove')->name('pengajuan.delete');
        Route::resource('pengajuan', 'Customer\PengajuanController');
    });
});

// Backend
Route::group(['prefix' => 'backend'], function () {
    Auth::routes();
    Route::get('/delete', 'Auth\LoginController@logout')->name('logout');
    Route::get('/', function () {
        return redirect('/backend/login');
    });

    Route::group(['middleware' => 'auth:web'], function () {
        Route::get('/dashboard', 'HomeController@index')->name('dashboard');

        /**
         * User Page
         **/
        Route::get('user/data', 'Backend\UserController@data')->name("user.data");
        Route::post('user/restore/{id}', 'Backend\UserController@restore')->name('user.restore');
        Route::delete('user/remove/{id}', 'Backend\UserController@remove')->name('user.delete');
        Route::resource('user', 'Backend\UserController');

        /**
         * Customer Page
         **/
        Route::get('customer/data', 'Customer\CustomerController@data')->name("customer.data");
        Route::post('customer/restore/{id}', 'Customer\CustomerController@restore')->name('customer.restore');
        Route::delete('customer/remove/{id}', 'Customer\CustomerController@remove')->name('customer.delete');
        Route::resource('customer', 'Customer\CustomerController');
    });
});