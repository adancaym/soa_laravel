<?php

use App\Hosts;
use App\Http\Middleware\Authenticate;
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

//borra todo salida de emergecia si fallan las sesiones
Route::get('/test', function () {

});
//borra todo salida de emergecia si fallan las sesiones
Route::get('/exit', function () {
    session()->flush();
    Auth::logout();
});

//landing page del host dependiendo del host muestra la pagina de inicio
Route::get('/', function () {
    return view('hosts.pages.'.session('host')->landing_page);
})->middleware([CheckHost::class]);



//variables de sesion
Route::get('/host', 'NavbarController@getHost')->middleware([CheckHost::class]);
Route::get('/links', 'NavbarController@getLinks')->middleware([CheckHost::class]);
Route::get('/isAdmin', function (){
    return response()->json(['isAdmin'=>Auth::user()->isAdmin()]);
})->middleware([CheckHost::class]);

//autenticación
Auth::routes();

//pagina de inicio dentro del sistema
Route::get('/home', 'HomeController@index')->name('home')->middleware([CheckHost::class]);



//indexApis
Route::get('/users', 'ApiController@apiAdminUsers')->middleware([CheckHost::class]);


Route::post('/api/users/verifyEmail', 'UsersController@verifyEmail')->middleware([CheckHost::class]);

//apis
Route::resource('api/users', 'UsersController')->middleware([CheckHost::class,Authenticate::class]);
Route::resource('api/hosts', 'HostsController')->middleware([CheckHost::class,Authenticate::class]);

