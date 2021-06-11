<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Http\Controllers\TemplateController;

Route::get('/', ['as' => 'home', 'uses' => function () {
    return view('layouts/home/index');
}]);
Route::post('contact/save', ['as' => 'server.contact.save', 'uses' => 'Server\ContactController@SaveContact']);

Route::group(['prefix' => 'danh-muc'], function () {
    Route::get('/{type}', ['as' => 'template', 'uses' => 'TemplateController@index']);
});

Route::group(['prefix' => 'bang-gia'], function () {
    Route::get('/', ['as' => 'price', 'uses' => 'TemplateController@price']);
});

Route::group(['prefix' => 'dang-ky'], function () {
    Route::get('/', ['as' => 'register', 'uses' => function () {
        return view('layouts/register/index');
    }]);
    Route::post('/luu', [
        'as' => 'server.register.save',
        'uses' => 'Server\TrialUsersController@RegisterTrialUsers',
    ]);
    Route::post('/luu/kiem-tra-email', [
        'as' => 'server.register.check-email',
        'uses' => 'Server\TrialUsersController@CheckEmailExisted',
    ]);
    Route::post('/luu/kiem-tra-sdt', [
        'as' => 'server.register.check-phone',
        'uses' => 'Server\TrialUsersController@CheckPhoneExisted',
    ]);
});

Route::group(['prefix' => 'dang-nhap'], function () {
    Route::get('/', ['as' => 'login', 'uses' => function () {
        return view('layouts/login/index');
    }]);
    Route::post('/xac-nhan', [
        'as' => 'server.login.confirm',
        'uses' => 'Server\TrialUsersController@LoginConfirm',
    ]);
});

Route::group(['prefix' => 'quy-dinh'], function () {
    Route::get('/', ['as' => 'rules', 'uses' => function () {
        return view('layouts/rules/index');
    }]);
});

Route::get('/tinh-nang', ['as' => 'feature', 'uses' => function () {
    return view('layouts/featured/index');
}]);

Route::group(['prefix' => 'admin'], function () {
    /** Login Routes... */
    Route::get('/dang-nhap', 'Auth\AuthController@showLoginForm');
    Route::post('/dang-nhap', 'Auth\AuthController@login');
    Route::get('/dang-xuat', 'Auth\AuthController@logout');
    Route::get('/dang-ky', 'Auth\AuthController@showRegistrationForm');
    Route::post('/dang-ky', 'Auth\AuthController@register');
    Route::get('/mat-khau/reset/{token?}', 'Auth\PasswordController@showResetForm');
    Route::post('/mat-khau/email', 'Auth\PasswordController@sendResetLinkEmail');
    Route::post('/mat-khau/reset', 'Auth\PasswordController@reset');

    /** Content Routes... */
    Route::get('/', 'HomeController@dashboard');
    Route::get('/thong-tin-lien-he', 'HomeController@contacts');
    Route::get('/tai-khoan-dung-thu', 'HomeController@trialUsers');

    /** trial_users table */
    Route::get('/tai-khoan-dung-thu/so-luong', 'Server\TrialUsersController@GetTotalNumber');
    Route::get('/tai-khoan-dung-thu/danh-sach', 'Server\TrialUsersController@GetTrialUserListForTable');

    /** contacts table */
    Route::get('/thong-tin-lien-he/so-luong', 'Server\ContactController@GetTotalNumber');
    Route::get('/thong-tin-lien-he/danh-sach', 'Server\ContactController@GetContactListForTable');
});

Route::group(['prefix' => 'kho-giao-dien'], function () {
    Route::get('/', ['as' => 'themes', 'uses' => function () {
        return view('layouts/themes/index');
    }]);
    Route::get('/{type}', ['as' => 'themereal', 'uses' => 'ThemeRealController@index']);
});

Route::group(['prefix' => 'gui-mail'], function () {
    Route::get('/co-ban', 'MailController@basicEmail');
    Route::get('/html', 'MailController@htmlEmail');
    Route::get('/kem-tai-lieu', 'MailController@attachmentEmail');

    Route::post('/thong-tin-lien-he', 'MailController@sendingEmail');
    Route::post('/tai-khoan-dung-thu', 'MailController@sendingEmail');
    Route::post('/tai-khoan-dung-thu/mail-xac-nhan', 'MailController@sendingEmail');
    Route::post('/khoi-phuc-mat-khau', 'MailController@sendingEmailWithToken');
});

Route::group(['prefix' => 'khoi-phuc-mat-khau'], function () {
    Route::get('/', ['as' => 'send-email', 'uses' => function () {
        return view('layouts/recover-password/index', ['type' => 'sendEmail']);
    }]);
    Route::get('/mat-khau-moi', ['as' => 'create-password', 'uses' => function () {
        return view('layouts/recover-password/index', ['type' => 'createPassword']);
    }]);
    Route::post('/reset-mat-khau', 'Server\TrialUsersController@ResetPasswordForOneTrialUser');
});
