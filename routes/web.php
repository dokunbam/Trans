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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('verified');
Route::get('/superadmin', 'SuperAdminController@index')->name('superadmin')->middleware('verified');
Route::post('/mailsubscribers', 'NewsletterController@storeMailChimpSubscriber')->name('mailsubscribers');


/*
| Domain | Method   | URI                    | Name                | Action                                                                 | Middleware                             |
+--------+----------+------------------------+---------------------+------------------------------------------------------------------------+----------------------------------------+
|        | GET|HEAD | /                      |                     | Closure                                                                | web                                    |
|        | GET|HEAD | admin                  | admin               | App\Http\Controllers\AdminController@index                             | web,verified,auth,role:ROLE_ADMIN      |
|        | GET|HEAD | api/user               |                     | Closure                                                                | api,auth:api                           |
|        | GET|HEAD | email/resend           | verification.resend | App\Http\Controllers\Auth\VerificationController@resend                | web,auth,throttle:6,1                  |
|        | GET|HEAD | email/verify           | verification.notice | App\Http\Controllers\Auth\VerificationController@show                  | web,auth                               |
|        | GET|HEAD | email/verify/{id}      | verification.verify | App\Http\Controllers\Auth\VerificationController@verify                | web,auth,signed,throttle:6,1           |
|        | GET|HEAD | home                   | home                | App\Http\Controllers\HomeController@index                              | web,auth,verified                      |
|        | GET|HEAD | login                  | login               | App\Http\Controllers\Auth\LoginController@showLoginForm                | web,guest                              |
|        | POST     | login                  |                     | App\Http\Controllers\Auth\LoginController@login                        | web,guest                              |
|        | POST     | logout                 | logout              | App\Http\Controllers\Auth\LoginController@logout                       | web                                    |
|        | POST     | mailsubscribers        | mailsubscribers     | App\Http\Controllers\NewsletterController@storeMailChimpSubscriber     | web                                    |
|        | POST     | password/email         | password.email      | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web,guest                              |
|        | POST     | password/reset         | password.update     | App\Http\Controllers\Auth\ResetPasswordController@reset                | web,guest                              |
|        | GET|HEAD | password/reset         | password.request    | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web,guest                              |
|        | GET|HEAD | password/reset/{token} | password.reset      | App\Http\Controllers\Auth\ResetPasswordController@showResetForm        | web,guest                              |
|        | POST     | register               |                     | App\Http\Controllers\Auth\RegisterController@register                  | web,guest                              |
|        | GET|HEAD | register               | register            | App\Http\Controllers\Auth\RegisterController@showRegistrationForm      | web,guest                              |
|        | GET|HEAD | superadmin             | superadmin          | App\Http\Controllers\SuperAdminController@index                        | web,verified,auth,role:ROLE_SUPERADMIN |
+--------+----------+------------------------+---------------------+------------------------------------------------------------------------+----------------------------------------+

*/