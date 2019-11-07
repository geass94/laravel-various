<?php
use App\Http\Middleware\CheckRole;

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

Route::get('/', [
    'uses' => 'PageController@getIndex',
    'as' => 'home'
]);

Route::get('/login', [
    'uses' => 'Auth\LoginController@showLoginForm',
    'as' => 'login'
]);

Route::get('/logout', [
    'uses' => 'Auth\LoginController@logout',
    'as' => 'logout'
]);

Route::post('/login', [
    'uses' => 'Auth\LoginController@login',
    'as' => 'login'
]);

Route::post('/register', [
    'uses' => 'Auth\RegisterController@register',
    'as' => 'register'
]);

Route::get('/register', [
    'uses' => 'Auth\RegisterController@showRegistrationForm',
    'as' => 'register'
]);

Route::get('/home', [
    'uses' => 'PageController@getDashbaord',
    'as' => 'home'
]);

Route::get('/addresource', [
    'uses' => 'PageController@addResourcePage',
    'as' => 'addresource',
    'roles' => ['USER', 'ADMIN', 'EDITOR'],
])->middleware(CheckRole::class);

Route::post('/addresource', [
    'uses' => 'AppController@createResourse',
    'as' => 'addresource',
    'roles' => ['USER', 'ADMIN', 'EDITOR'],
])->middleware(CheckRole::class);

Route::get('/image', function (){
    return view('image');
});
