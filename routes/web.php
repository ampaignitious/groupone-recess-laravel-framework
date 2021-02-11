<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\officersController;
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
Auth::routes();
Route::get('/officers','officersController@index');
Route::get('/officers/create','officersController@create');
Route::post('/officersaction','officersController@storeofficer');

Route::get('insert', 'healthofficersController@insertform');
Route::post('create','healthofficersController@insert');

Route::get('index', 'donationController@indexs');
Route::post('/add','donationController@index');

Route::get('officers/create', function(){
return view('officers/create');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('homeview', function () {
    return view('homeview');
});
Route::get('healthofficers_create', function () {
    return view('healthofficers_create');
});
Route::get('donation_create', function () {
    return view('donation_create');
});
Route::get('view-record','donationlistController@index');

Route::get('view-records','healthlistController@index');

Route::get('donation_view', function () {
    return view('donation_view');
});
Route::get('home', function () {
    return view('home');
});

