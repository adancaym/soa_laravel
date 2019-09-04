<?php

use App\Hosts;
use App\Http\Middleware\CheckHost;
use Illuminate\Support\Facades\Auth;

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
})->middleware(CheckHost::class);

Route::get('/exit', function () {
    session()->flush();
    Auth::logout();
})->middleware(CheckHost::class);




Route::get('/host', 'NavbarController@getHost')->middleware(CheckHost::class);

Route::get('/links', 'NavbarController@getLinks')->middleware(CheckHost::class);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware(CheckHost::class);

Route::resource('hosts', 'HostsController');
