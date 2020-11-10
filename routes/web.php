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

Route::get('/status/{token}', 'Customer\StatusController@index')->name('customer.status');

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

        Route::get('/profil', 'Customer\CustomerController@showProfile')->name('customer.profil');
        Route::put('/profil/{id}/update', 'Customer\CustomerController@updateProfile')->name('customer.profile-update');

        /**
         * Pengajuan Page
         **/
        Route::get('pengajuan/data', 'Customer\PengajuanController@data')->name("pengajuan.data");
        Route::post('pengajuan/restore/{id}', 'Customer\PengajuanController@restore')->name('pengajuan.restore');
        Route::delete('pengajuan/remove/{id}', 'Customer\PengajuanController@remove')->name('pengajuan.delete');
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

        /**
         * Pengajuan Page
         **/
        Route::get('request/data', 'Backend\PengajuanController@data')->name("request.data");
        Route::post('request/status','Backend\PengajuanController@setStatus')->name('request.set_status');
        Route::resource('request', 'Backend\PengajuanController');

    });
});
