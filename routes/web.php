<?php

use Illuminate\Support\Facades\Artisan;
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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/contact', 'HomeController@contact');

Route::get('/nosotros', 'HomeController@about');

Route::get('/productos', 'HomeController@products');

Route::get('/home', function () {
    return redirect()->route('home');
});

Auth::routes();

// Redireccionando al login
Route::get('/admin', function ()
{
    return redirect()->route('login');

});

// Anulando la ventana del registrara
Route::get('/register', function ()
{
    return abort(404);
});

// Rutas del contacto
Route::prefix('contacts')->group(function ()
{
    Route::get('/', 'ContactController@index')->name('mails.index')->middleware('auth');
    Route::post('/store', 'ContactController@store')->name('mails.store');

    Route::get('/success-message-to-contact', function ()
    {
        return view('contacts.success');
    })->name('contact.success');

    Route::get('/failure-message-to-contact', function ()
    {
        return view('contacts.failure');
    })->name('contact.failure');
});

Route::middleware(['auth'])->group(function ()
{
    Route::prefix('dashboard')->group(function ()
    {
        Route::get('/', 'DashboardController@index')->name('dashboard.index');
    });
});

Route::get('/migrate-and-seed', function ()
{
    Artisan::call('migrate');
});

Route::get('/config-clear', function ()
{
    Artisan::call('config:cache');
});
